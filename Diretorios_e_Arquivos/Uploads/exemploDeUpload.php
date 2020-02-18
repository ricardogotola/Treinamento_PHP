<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file"><br><br>
    <input type="submit" value="submit" name="submit">
</form>


<!--<form method="POST" enctype="multipart/form-data">-->
<!---->
<!--    <input type="file" name="fileUpload">-->
<!---->
<!--    <button type="submit">Enviar</button>-->
<!---->
<!--</form>-->

<?php
if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];
    $temp_name  = $_FILES['file']['tmp_name'];
    if(isset($name)){
        if(!empty($name)){
            $location = '../uploads/';
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }
    }  else {
        echo 'You should select a file to upload !!';
    }
}

//
//if ($_SERVER["REQUEST_METHOD"] === "POST"){
//
//    $file = $_FILES["fileUpload"];
//
//    if ($file["error"]){
//
//        throw new Exception("Erro no Upload.".$file["error"]);
//
//    }
//
//    $dirUploads = "uploads";
//
//    if(!is_dir($dirUploads)){
//        mkdir($dirUploads);
//    }
//
//    //$diretorio = $dirUploads.DIRECTORY_SEPARATOR.$file["name"];
//
//    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
//        echo "Upload realizado com sucesso";
//    }else{
//        throw new Exception("Erro no Upload, não foi possível realizar o upload.");
//    }
//}

