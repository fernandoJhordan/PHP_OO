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

        function trocarMarcha(){
            echo 'desengatar embreagem com a mão e engatar marcha com o pé';
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

        function trocarMarcha(){
            echo 'desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122','Preta');

    $moto->trocarMarcha();


?>