<?php

namespace Tres\core {
    
    use Tres\security\XSS\HTML as XSSHTML;
    
    class Asset {
        
        /**
         * The path to the file.
         * 
         * @var string
         */
        protected $_path = '';
        
        /**
         * Adds a style resource to the application.
         * 
         * @param  string $file     The path to the file.
         * @param  bool   $relative Whether to start from the default directory or not.
         * @return string           Generated tag.
         */
        public function getStyle($file, $relative = true){
            $this->_path = ($relative) ? STYLE_URL.'/'.$file : $file;
            return  '<link rel="stylesheet" href="'.
                        XSSHTML::escape($this->_path).
                    '" />'.PHP_EOL;
        }
        
        /**
         * Adds a script resource to the application.
         * 
         * @param  string $file     The path to the file.
         * @param  bool   $relative Whether to start from the default directory or not.
         * @return string           Generated tag.
         */
        public function getScript($file, $relative = true){
            $this->_path = ($relative) ? SCRIPT_URL.'/'.$file : $file;
            return  '<script type="text/javascript" src="'.
                        XSSHTML::escape($this->_path).
                    '"></script>'.PHP_EOL;
        }
        
        /**
         * Adds a favicon to the site.
         * 
         * @param  string $file     The path to the file.
         * @param  bool   $relative Whether to start from the default directory or not.
         * @return string           Generated tag.
         */
        public function getFavicon($file, $relative = true){
            $this->_path = ($relative) ? PUBLIC_URL.'/'.$file : $file;
            $ext = strtolower(pathinfo($this->_path, PATHINFO_EXTENSION));
            
            switch($ext){
                case 'png':
                    $type = 'image/png';
                    break;
                case 'gif':
                    $type = 'image/gif';
                    break;
                default:
                    $type = 'image/x-icon';
                    break;
            }
            
            return  '<link rel="icon" type="'.$type.'" href="'.
                        XSSHTML::escape($this->_path).
                    '" />'.PHP_EOL;
        }
    
    }
    
}
