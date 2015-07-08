<?php

namespace Symforce\DiscuzBundle\Command ;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Filesystem\Filesystem ;

class PlguinExportCommand extends ContainerAwareCommand
{


    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this
            ->setName('sf:bbs:plugin_export')
            ;
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $source_dir = __DIR__ . '/../Resources/docs/discuzx_embed.txt' ;

        $writer  = new \CG\Generator\Writer() ;
        $writer
            ->writeln('array(')
            ->indent()
        ;

        $key    = null ;
        foreach(file($source_dir) as $ln) {
            $ln = trim($ln);
            if( empty($ln) ) continue ;
            if( preg_match('/^(.+)\((.+)\/\s*\)$/', $ln, $ms) ) {

                if( $key ) {
                    $writer
                        ->outdent()
                        ->writeln('),')
                    ;
                }

                $name = $ms[1] ;
                $key = preg_replace('/\\//', '_', $ms[2] ) ;
                $writer
                    ->writeln( sprintf('%s => array( // %s ', var_export($key, 1), $name ) )
                    ->indent()
                ;
                continue ;
            }

            if( preg_match('/^.+\.htm/', $ln) ) {
                // echo $ln, "\n" ;
                $writer
                    ->writeln( sprintf('// %s ', $ln) )
                ;
                continue ;
            }

            if( preg_match('/([^\s]+)\s+([^\s]+)/', $ln, $ms) ) {
                $writer
                    ->writeln( sprintf('%s, // %s ', var_export($ms[2], 1), $ms[1] ) )
                ;
                continue ;
            }

        }
        $writer
            ->outdent()
            ->writeln('),')
            ->outdent()
            ->write(');')
        ;

        $output->writeln($writer->getContent());
    }

}
