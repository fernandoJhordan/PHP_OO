<?php

    class Pai {

        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        
        //método de interface -- só por ele conseguimos recuperar o valor do atributo nome
        public function __get($atributo){
            return $this->$atributo;
        }

        //método de interface -- só por ele conseguimos alterar o valor do atributo nome
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
            
        }
        

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'oi';
        }

        public function executarAcao($metod){
            $this->$metod();
        }
    }

    class Filho extends Pai {
        /*
        public function getAtributo($attr){
            return $this->$attr;
        }

        public function setAtributo($attr, $value){
            $this->$attr = $value;
        }
        */

    }

    /*
    $pai = new Pai();
    echo $pai->__get('nome');
    echo '<br />';
    $pai->executarAcao('executarMania');
    */

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    //exibir os métodos do obj
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';
?>