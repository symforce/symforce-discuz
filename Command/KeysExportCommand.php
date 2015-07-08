<?php

namespace Symforce\DiscuzBundle\Command ;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Filesystem\Filesystem ;

class KeysExportCommand extends ContainerAwareCommand
{


    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this
            ->setName('sf:bbs:keys_export')
        ;
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $bbs_parameters_file = $this->getContainer()->getParameter('kernel.root_dir') . '/config/parameters_bbs.yml' ;
        if( !file_exists($bbs_parameters_file) ) {
            $parameters = array(
                'parameters'    =>  array() ,
            ) ;
            $output->writeln("generate parameters from discuz config files");
            $root_dir = $this->getContainer()->getParameter('sf.web_root_dir') ;
            $file = sprintf('%s/config/config_global.php', $root_dir) ;
            include $file ;

            $parameters['parameters']['sf.bbs.memory_prefix'] = $_config['memory']['prefix'] ;
            $parameters['parameters']['sf.bbs.cookiepre'] = $_config['cookie']['cookiepre'] ;
            $parameters['parameters']['sf.bbs.security_authkey'] = $_config['security']['authkey'] ;
            $parameters['parameters']['sf.bbs.remote_appkey'] = $_config['remote']['appkey'] ;


            $file = sprintf('%s/config/config_ucenter.php', $root_dir) ;
            $const = $this->getDefineConst($file) ;

            $parameters['parameters']['sf.bbs.uc_key']    = $const['UC_KEY'] ;

            $file = sprintf('%s/uc_server/data/config.inc.php', $root_dir) ;
            $const = $this->getDefineConst($file) ;

            $parameters['parameters']['sf.bbs.ucs_found_pw']    = $const['UC_FOUNDERPW'] ;
            $parameters['parameters']['sf.bbs.ucs_found_salt']    = $const['UC_FOUNDERSALT'] ;

            $parameters['parameters']['sf.bbs.ucs_key']    = $const['UC_KEY'] ;
            $parameters['parameters']['sf.bbs.ucs_site_id']    = $const['UC_SITEID'] ;
            $parameters['parameters']['sf.bbs.ucs_mykey']    = $const['UC_MYKEY'] ;

            $data = \Symfony\Component\Yaml\Yaml::dump( $parameters );
            \Dev::write_file($bbs_parameters_file, $data ) ;
        } else {
            $output->writeln(sprintf("generate parameters from %s", $bbs_parameters_file));
            $parameters = \Symfony\Component\Yaml\Yaml::parse( file_get_contents($bbs_parameters_file) ) ;
        }
        $parameters_file = $this->getContainer()->getParameter('kernel.root_dir') . '/config/parameters.yml' ;
        $_parameters = \Symfony\Component\Yaml\Yaml::parse( file_get_contents($parameters_file) ) ;
        foreach($parameters['parameters'] as $key => $value ) {
            $_parameters['parameters'][$key] = $value ;
        }
        $_data = \Symfony\Component\Yaml\Yaml::dump( $_parameters );
        \Dev::write_file($parameters_file, $_data ) ;
    }

    private function getDefineConst($file){
        $data = file_get_contents($file) ;
        preg_match_all('/define\((.+),\s*(.+)\);/', $data, $ls) ;
        $const = array() ;
        $code =  '<' . "?php\n" ;
        foreach($ls[1] as $i => $key) {
            $code .= sprintf('$const[%s] = %s;', $key, $ls[2][$i] ) . "\n" ;
        }
        $tmp = tempnam( $this->getContainer()->getParameter('kernel.cache_dir'), 'sf_bbs_keys_') ;
        file_put_contents($tmp, $code) ;
        include $tmp ;
        unlink($tmp) ;
        return $const ;
    }

}
