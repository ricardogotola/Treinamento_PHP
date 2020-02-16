<?php

class Endereco
{

    private $logradouro;
    private $numero;
    private $cidade;

    //Os parâmetros não precisam ter o mesmo nome do atributo
    public function __construct($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()
    {
        //var_dump("DESTRUIR");
    }

    public function __toString()
    {
     return $this->logradouro . $this->numero . $this->cidade;
    }

}


$meuEndereco = new Endereco("Rua Marques de Abrantes","78","Flamengo-RJ");

//Utilizando a serialização __toString()
echo $meuEndereco;
echo "<br>";echo "<br>";


//Exibindo tipos e valores do bojeto
var_dump($meuEndereco);
echo "<br>";
unset($meuEndereco);

