<?php

    //modelo - objeto
    class Funcionario {

        //atributos
        public $nome = 'Fernando';
        public $telefone = '11 99999-8888';
        public $numFilhos = 0;

        //métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }


    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();
    echo '<br />';
    echo $y->modificarNumFilhos(2);
    echo $y->resumirCadFunc();
    echo '<hr />';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br />';
    echo $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();

?>