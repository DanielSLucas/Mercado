<?php
    $servidor = '127.0.0.1:3306';
    $user     = 'root';
    $senha    = '';
    $banco    = 'db_mercado';
    
    $link     = mysqli_connect($servidor, $user, $senha, $banco);

    if(!$link) {
       echo '<h1>Não conectado</h1>';
       exit();
    }

?>