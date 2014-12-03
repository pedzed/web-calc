<?php

namespace controllers {
    
    use Config;
    use View;
    
    class CalcController extends BaseController {
        
        public function renderPage(){
            View::make('home', [
                'appName' => Config::get('app/name')
            ]);
            die();
        }
        
        public function postForm(){
            pd($_POST);
        }
        
    }
    
}
