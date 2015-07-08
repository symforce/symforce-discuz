<?php

namespace Symforce\DiscuzBundle\Discuz\Lang;


class DiscuzLangWrapper {

    protected $root ;
    protected $path ;

    protected $dir ;
    protected $plugin ;
    protected $file ;

    protected $langfile ;

    protected $language = array() ;

    public function __construct(\Twig_Environment $env, $root ) {
        if( !defined('DISCUZ_ROOT') ) {
            throw new \Exception( 'discuz is not load yet!');
        }
        $this->chroot($root, $path ) ;
    }

    protected function chroot($root) {

        $this->dir   = null ;
        $this->plugin   = null ;
        $this->file    = null ;
        $this->root    = $root ;

        $_pos = strpos( $root, ':' )  ;
        if( false !== $_pos ) {
            if( $_pos !== strrpos( $root, ':' ) ) {
                throw new \Exception( sprintf('not implement locate plugin tempalte dir:%s', $root) );
            }
            $this->plugin   = substr($root, 0, $_pos) ;
            $this->file     = substr($root, $_pos + 1 ) ;
            $lang_file =   sprintf('%s/data/plugindata/%s.lang.php', rtrim(DISCUZ_ROOT, '/'), $this->plugin ) ;
        } else {
            $_pos = strpos( $root, '/' )  ;
            if( false !== $_pos ) {
                if( $_pos !== strrpos( $root, '/' ) ) {
                    throw new \Exception( sprintf('not implement locate plugin tempalte dir:%s', $root) );
                }
                $this->dir   = substr($root, 0, $_pos) ;
                $this->file     = substr($root, $_pos + 1 ) ;
                $lang_file =   sprintf('%s/source/language/language/%s/lang_%s.php', rtrim(DISCUZ_ROOT, '/'), $this->dir, $this->file ) ;
            } else {
                $this->file     = $root ;
                $lang_file = sprintf('%s/source/language/lang_%s.php',rtrim(DISCUZ_ROOT, '/') , $root) ;
            }
        }
        $this->langfile = $lang_file ;
    }

    public function trans($var) {

        $vars   = explode(':', $var);
        $isplugin = count($vars) == 2;

        if(!$isplugin) {
            if(!isset($this->language['inner'])) {
                $this->language['inner'] = array();
            }
            $langvar = &$this->language['inner'];
        } else {
            if(!isset($this->language['plugin'][$vars[0]])){
                $this->language['plugin'][$vars[0]] = array();
            }
            $langvar = &$this->language['plugin'][$vars[0]];
            $var = &$vars[1];
        }

        if(!isset($langvar[$var])) {
            $this->language['inner'] = lang('template');

            if(!$isplugin) {
                if(defined('IN_MOBILE')) {
                    $mobiletpl = getglobal('mobiletpl');
                    list($path) = explode('/', str_replace($mobiletpl[IN_MOBILE].'/', '', $this->root));
                } else {
                    list($path) = explode('/', $this->root);
                }

                foreach(lang($path.'/template') as $k => $v) {
                    $this->language['inner'][$k] = $v;
                }

                if(defined('IN_MOBILE')) {
                    foreach(lang('mobile/template') as $k => $v) {
                        $this->language['inner'][$k] = $v;
                    }
                }
            } else {
                global $_G;
                if(empty($_G['config']['plugindeveloper'])) {
                    loadcache('pluginlanguage_template');
                } elseif(!isset($_G['cache']['pluginlanguage_template'][$vars[0]]) && preg_match("/^[a-z]+[a-z0-9_]*$/i", $vars[0])) {
                    if(@include(DISCUZ_ROOT.'./data/plugindata/'.$vars[0].'.lang.php')) {
                        $_G['cache']['pluginlanguage_template'][$vars[0]] = $templatelang[$vars[0]];
                    } else {
                        loadcache('pluginlanguage_template');
                    }
                }
                $this->language['plugin'][$vars[0]] = $_G['cache']['pluginlanguage_template'][$vars[0]];
            }
        }
        if(isset($langvar[$var])) {
            return $langvar[$var];
        } else {
            return '!'.$var.'!';
        }
    }
} 