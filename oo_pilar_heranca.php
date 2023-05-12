<?php

    class Carro extends Veiculo {

        public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição volante';
        }

    }

    class Moto extends Veiculo {

        public $contra_peso_guidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinar';
        }


    }

    class Veiculo {

        public $placa = null;
        public $cor = null;

        function acalerar(){
            echo 'Acelerar';
        }

        function freiar(){
            echo 'Freiar';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122','Preta');

    echo '<pre>';
        print_r($carro);
        echo '<br />';
        print_r($moto);
    echo '</pre>';

    echo '<hr />';

    $carro->abrirTetoSolar();
    echo '<br />';
    $carro->acalerar();
    echo '<br />';
    $carro->freiar();

    echo '<hr />';

    $moto->empinar();
    echo '<br />';
    $moto->acalerar();
    echo '<br />';
    $moto->freiar();

?>