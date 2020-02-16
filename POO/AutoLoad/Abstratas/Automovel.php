<?php

interface Veiculo
{

    public function acelerar($velocidade);

    public function frenar($velocidade);

    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{


    public function acelerar($velocidade){
        echo "<br>" . "o veículo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade){
        echo "<br>" . "o veículo frenou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha){
        echo "<br>" . "o veículo trocou " . $marcha . " marchas";
    }
}