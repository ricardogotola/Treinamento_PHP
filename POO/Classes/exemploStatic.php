<?php
header("Content-type: text/html; charset=utf-8");

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $resultado = Documento::validaCPF($numero);

        if($resultado === false){
            throw new Exception("CPF informádo não é inválido!");
        }


        $this->numero = $numero;
    }

    public static function validaCPF($cpf):bool {

    if (empty($cpf)) {
        return false;
    }

    $cpf = preg_match('/[0-9]/', $cpf) ? $cpf : 0;

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    } else if ($cpf == '00000000000' ||
        $cpf == '11111111111' ||
        $cpf == '22222222222' ||
        $cpf == '33333333333' ||
        $cpf == '44444444444' ||
        $cpf == '55555555555' ||
        $cpf == '66666666666' ||
        $cpf == '77777777777' ||
        $cpf == '88888888888' ||
        $cpf == '99999999999') {
        return false;

        } else {

        for ($t = 9; $t < 11; $t++) {

            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }

        return true;
        }
    }

}

//Como a classe é Static posso chamar o método sem instanciar
//var_dump(Documento::validaCPF("21379477816"));

//Utilizando a maneira convencional de classe, instanciando e definindo o atributo da Classe Documento
$cpf = new Documento();
$cpf->setNumero("21379477816");
var_dump($cpf->getNumero());

