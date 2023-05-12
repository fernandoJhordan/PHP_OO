<?php

    class Exemplo {
    
        public static $atributo1 = 'eu sou um atributo statico';
        public $atributo2 = 'eu sou um atributo normal';

        public static function metod1(){
            echo 'eu sou um método statico';
        }

        public function metod2(){   
            echo 'eu sou um método normal';
        }

    }

    //$x = new Exemplo();
    echo Exemplo::$atributo1;
    echo '<br />';
    Exemplo::metod1();


?>