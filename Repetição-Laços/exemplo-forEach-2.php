<form>
    <input type="text" name="Nome">
    <input type="date" name="Nascimento">
    <input type="submit" name="OK">
</form>

<?php

if (isset($_GET)){
    foreach ($_GET as $key => $value){
        if($key <> "OK"){
            echo "Nome do campo:" . $key;
            echo "<br>";
            echo "Valor do campo: " . $value;
            echo "<hr>";
        }
    }
}
