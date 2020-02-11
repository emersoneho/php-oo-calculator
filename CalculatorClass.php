<?php 
    //This interface create functions used in another classes
    interface iCalculator
    {
        public function resetResult();
        public function getResult();
    }

    class Calculator implements iCalculator{
        var $result = 0;

        public function __construct(){
        }

         /**
        * Set result =0 
        * @author Émerson Henrique
        * @return num
        **/
        public function resetResult(){
            $result = 0;
            return $this->result;
        }

        /**
        * Get last value of last result var
        * @author Émerson Henrique
        * @return num
        **/
        public function getResult(){
            return $this->result;
        }

          /**
        * Verify if that result is a number
        * @param number
        * @author Émerson Henrique
        * @return num 
        * @return error
        **/
        private function verifyNumber($num1,$num2){
            return (is_numeric($num1) &&  is_numeric($num2));
        }

        /**
        * Sum two numbers
        * @param first,second
        * @author Émerson Henrique
        * @return num 
        * @return error
        **/
        public function sum($first,$second){
            if($this->verifyNumber($first,$second)){
                $this->result = $first + $second;
                return $this->result;
            }else{
                return 'error - one of this arguments are number';
            }
        }

         /**
        * Subtract two numbers
        * @param first,second
        * @author Émerson Henrique
        * @return num 
        * @return error
        **/
        public function subtract($first,$second){
            if($this->verifyNumber($first,$second)){
                $this->result = $first - $second;
                return $this->result;
            }else{
                return 'error - one of this arguments are number';
            }
        }

        /**
        * multiply two numbers
        * @param first,second
        * @author Émerson Henrique
        * @return num 
        * @return error
        **/
        public function multiply($first,$second){
            if($this->verifyNumber($first,$second)){
                $this->result = $first * $second;
                return $this->result;
            }else{
                return 'error - one of this arguments are number';
            }
        }
        
        /**
        * divide two numbers
        * @param first,second
        * @author Émerson Henrique
        * @return num 
        * @return error
        **/
        public function divide($first,$second){
            if($this->verifyNumber($first,$second)){
                $this->result = $first / $second;
                return $this->result;
            }else{
                return 'error - one of this arguments are number';
            }
        }
    }
?>