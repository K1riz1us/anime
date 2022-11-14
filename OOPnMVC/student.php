<?php
    require_once 'user.php';
    class student extends user{
        public $rate;

        public function __construct($n, $s, $a, $r){
            $this->setInfo($n, $s, $a);
            $this->rate = $r;
        }

        public function show(){
            parent::show();
            echo 'Рейтинг:'.$this->rate.'<br>';
        }
    }
?>