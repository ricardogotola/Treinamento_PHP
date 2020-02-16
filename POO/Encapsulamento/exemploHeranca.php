<?php

class Pessoa{

    public $nome = "Rasmus Lerdof";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha. "<br>";
    }

}

class Programador extends Pessoa{
    //Mesmo declarando a mesma function, oque é private no pai o filho não herda, exmplo abaixo "senha"
    public function verDados(){

        echo get_class($this);
        echo "<br>";
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha. "<br>";
    }

}

$prog = new Programador();
$prog->verDados();
echo "<br>";


$objeto = new Pessoa();

echo $objeto->nome;
echo "<br>";
echo $objeto->idade;
echo "<br>";
echo $objeto->senha;
echo "<br>";

//Método da mesma classe por ver o protected e private
//Classes herdadas não acessm private
echo "<br>";
$objeto -> verDados();