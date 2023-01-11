<?php
    class observable{
        private $observers= array();
        public function register($object){
            if($object instanceof observar){
                $this ->observers[] = $object;
            }
            else {
                echo "Object should be implement interface ...<br>";
            }
        }
        public function stateChange(){
            foreach ($this ->observers as $overver){
               $overver ->message();
            }
        }
        
    }
?>