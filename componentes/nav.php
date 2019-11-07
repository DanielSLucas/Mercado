<div class="branco">
<?php 
    
    echo "<link rel='stylesheet' href='./componentes/estilo.css'>";

    $index      = "";
    $produtos   = "";
    $venda      = "";

    switch ($tab = $_GET['tab']) {
        case 1:
            $index = "active";
            break;
            
        case 2:
            $produtos = "active";
            break;
            
        case 3:
            $venda = "active";
            break;
        
        default:
            $index = "active";
    }
    




    echo "<ul class='nav nav-tabs justify-content-end'>";
    
        echo "<li class='nav-item'>";
            echo "<a class='nav-link $index' href='index.php?tab=1'>Castro de produto</a>";
        echo "</li>";

        echo "<li class='nav-item'>";
            echo "<a class='nav-link $produtos' href='mostra.php?tab=2'>Produtos</a>";
        echo "</li>";

        echo "<li class='nav-item'>";
            echo "<a class='nav-link $venda' href='vendas.php?tab=3'>Venda</a>";
        echo "</li>";

        echo "<li class='nav-item'>";
            echo "<a class='nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>Disabled</a>";
        echo "</li>";

    echo "</ul>";
?>
</div>