<?php

    include 'conexao.php';
    include "./componentes/head.php";
    echo "<link rel='stylesheet' href='./componentes/estilo.css'>";

    include "./componentes/nav.php";

?>

<div class="container">

    <form action="mostraVendas.php?tab=4" method="POST">
        <div class="row">
            <div class="col-5 text">
                Informe a data da venda que deseja:
            </div>

            <div class="col-6">
                <input type="date" name="dataVenda" class="form-control">
            </div>
            
            <div class="col-1">
                <button type="submit" class="btn lupa"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>

</div>