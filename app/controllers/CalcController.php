<?php

namespace controllers {
    
    use Config;
    use View;
    
    class CalcController extends BaseController {
        
        protected $_input = '';
        
        const ADDITION = '+';
        const SUBTRACTION = '-';
        const MULTIPLICATION = '*';
        const DIVISION = '/';
        
        public function renderPage(){
            View::make('home', [
                'appName' => Config::get('app/name')
            ]);
            die();
        }
        
        public function postForm(){
            if(isset($_POST['input'])){
                $this->_input = $_POST['input'];
                $this->_preCalculate();
            }
        }
        
        protected function _preCalculate(){
            if(preg_match('#(-?\d)+\s+(\+|\-|\*|\/)\s+(\d)+#', $this->_input, $matches)){
                pd($matches);
            }
        }
        
    }
    
}
