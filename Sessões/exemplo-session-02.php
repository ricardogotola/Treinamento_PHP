<?php

session_start();

echo $_SESSION['nome'];

session_unset(); // limpa a variável mas mantém a sessão

session_destroy(); // destróia a sessão atual e cria uma nova