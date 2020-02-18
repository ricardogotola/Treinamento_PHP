<?php

$nomeDiretorio = "images";

//    if (!is_dir($nomeDiretorio)){
//        //mkdir cria o diretório
//        mkdir($nomeDiretorio);
//        echo "O diretório $nomeDiretorio foi criado com sucesso.";
//    }else{
//        //rmdir remove o diretório
//        rmdir($nomeDiretorio);
//        echo "O diretório $nomeDiretorio já exite. Foi removido.";
//    }

//listar o conteúde de um arquivo
//    $nomeDiretorio = scandir("images");
//    var_dump($nomeDiretorio);

//Buscando informações dos arquivos e criando links
    $images = scandir("images");
    $data = array();

    foreach ($images as $img){
        if(!in_array($img, array(".", ".."))){
            $filename = $nomeDiretorio . DIRECTORY_SEPARATOR . $img;
            $info = pathinfo($filename);
            $info["size"] = filesize($filename);
            $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
            $info["url"] = "http://localhost/TreinamentoPHP/Diretorios_e_Arquivos/".str_replace("\\", "/", $filename);

            array_push($data, $info);
        }
    }

    echo json_encode($data);