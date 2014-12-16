<?php

namespace controllers {
    
    use Config;
    use Exception;
    use View;
    
    class CalcException extends Exception {}
    
    class CalcController extends BaseController {
        
        public function renderPage(){
            View::make('home', [
                'appName' => Config::get('app/name')
            ]);
            die();
        }
        
        public function calc(){
            if(!isset($_POST['calc_type'])){
                throw new CalcException('Missing calculation type.');
            }
            
            if(!isset($_POST['calc_input_x'])){
                throw new CalcException('Missing input X.');
            }
            
            $notRequiredInputY = [
                'power',
                'square root'
            ];
            
            if(!isset($_POST['calc_input_y']) && !in_array($_POST['calc_type'], $notRequiredInputY)){
                throw new CalcException('Missing input Y.');
            }
            
            $oldResult = (isset($_POST['calc_result'])) ? $_POST['calc_result'] : '';
            $inputX = (!empty($_POST['calc_input_x'])) ? $_POST['calc_input_x'] : 0;
            $inputY = (!empty($_POST['calc_input_y'])) ? $_POST['calc_input_y'] : 0;
            
            switch($_POST['calc_type']){
                case 'addition':
                    $result = "{$inputX}\t+\t{$inputY}\t=\t".$this->_calcAddition($inputX, $inputY);
                break;
                
                case 'subtraction':
                    $result = "{$inputX}\t-\t{$inputY}\t=\t".$this->_calcSubtraction($inputX, $inputY);
                break;
                
                case 'multiplication':
                    $result = "{$inputX}\tx\t{$inputY}\t=\t".$this->_calcMultiplication($inputX, $inputY);
                break;
                
                case 'multiplication table':
                    $result = '';
                    
                    for($i = 0; $i <= $inputY; $i++){
                        $result .= "{$inputX}\tx\t{$i}\t=\t".$this->_calcMultiplication($inputX, $i)."\n";
                    }
                break;
                
                case 'division':
                    if($inputY === 0){
                        $result = 'Cannot divide by zero.';
                        break;
                    }
                    
                    $result = "{$inputX}\t:\t{$inputY}\t=\t".$this->_calcDivision($inputX, $inputY);
                break;
                
                case 'power':
                    $result = "pow({$inputX})\t=\t".$this->_calcPower($inputX, 2);
                break;
                
                case 'power of':
                    $result = "pow({$inputX}, {$inputY})\t=\t".$this->_calcPower($inputX, $inputY);
                break;
                
                case 'square root':
                    $result = "sqrt({$inputX})\t=\t".$this->_calcSquareRoot($inputX);
                break;
            }
            
            $newResult = (empty($oldResult)) ? $result : $result."\n".$oldResult;
            
            View::make('home', [
                'appName' => Config::get('app/name'),
                'calcResult' => $newResult
            ]);
            die();
        }
        
        /**
         * Calculates an addition.
         * 
         * @param  int|float $inputX
         * @param  int|float $inputY
         * 
         * @return int|float
         */
        protected function _calcAddition($inputX, $inputY){
            return $inputX + $inputY;
        }
        
        /**
         * Calculates a subtraction.
         * 
         * @param  int|float $inputX
         * @param  int|float $inputY
         * 
         * @return int|float
         */
        protected function _calcSubtraction($inputX, $inputY){
            return $inputX - $inputY;
        }
        
        /**
         * Calculates a multiplication.
         * 
         * @param  int|float $inputX
         * @param  int|float $inputY
         * 
         * @return int|float
         */
        protected function _calcMultiplication($inputX, $inputY){
            return $inputX * $inputY;
        }
        
        /**
         * Calculates a division.
         * 
         * @param  int|float $inputX
         * @param  int|float $inputY
         * 
         * @return int|float
         */
        protected function _calcDivision($inputX, $inputY){
            return $inputX / $inputY;
        }
        
        /**
         * Calculates a power.
         * 
         * @param  int|float $inputX
         * @param  int|float $inputY
         * 
         * @return int|float
         */
        protected function _calcPower($inputX, $inputY){
            return pow($inputX, $inputY);
        }
        
        /**
         * Calculates a square root.
         * 
         * @param  int|float $inputX
         * @param  int|float $inputY
         * 
         * @return int|float
         */
        protected function _calcSquareRoot($inputX){
            return sqrt($inputX);
        }
        
    }
    
}
