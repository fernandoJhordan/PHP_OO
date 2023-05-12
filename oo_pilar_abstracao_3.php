<?php

    //modelo - objeto
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        //métodos
        function resumirCadFunc(){
            return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s)';
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 1);
    $y->__set('telefone', '11 99999-8888');
    $y->__set('cargo', 'Manobrista');
    $y->__set('salario', 1320);
    echo $y->resumirCadFunc();
    //echo $y->__get('nome') . ' possui ' . $y->__get('NumFilhos') . ' filho(s), seu cargo é ' . $y->__get('cargo') . ' e recebe um salário de ' . $y->__get('salario');
    echo '<hr />';

    $x = new Funcionario();
    $x->__set('nome','Felipe');
    $x->__set('numFilhos', 3);
    echo $x->resumirCadFunc();
    //echo $x->__get('nome') . ' possui ' . $x->__get('NumFilhos') . ' filho(s)';


?>