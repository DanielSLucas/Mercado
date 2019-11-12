<div class="branco">
<?php 
    
    echo "<link rel='stylesheet' href='./componentes/estilo.css'>";

    $tab = 1;
    $index      = "";
    $produtos   = "";
    $venda      = "";
    $relatorios = "";

    if (isset($_GET['tab'])) {
        $tab = $_GET['tab'];
    }

    switch ($tab) {
        case 1:
            $index = "active";
            break;
            
        case 2:
            $produtos = "active";
            break;
            
        case 3:
            $venda = "active";
            break;
        
        case 4:
            $relatorios = "active";
            break;
            
        default:
            $index      = "";
            $produtos   = "";
            $venda      = "";
    }
    




    echo "<ul class='nav nav-tabs justify-content-end'>";
    
        echo "<li class='nav-item'>";
            echo "<a class='nav-link $index' href='index.php?tab=1'>Cadastro de produto</a>";
        echo "</li>";

        echo "<li class='nav-item'>";
            echo "<a class='nav-link $produtos' href='mostra.php?tab=2'>Produtos</a>";
        echo "</li>";

        echo "<li class='nav-item'>";
            echo "<a class='nav-link $venda' href='novavenda.php?tab=3'>Iniciar venda</a>";
        echo "</li>";

        echo "<li class='nav-item'>";
            echo "<a class='nav-link $relatorios' href='relatorios.php?tab=4'>Relatórios</a>";
        echo "</li>";

    echo "</ul>";
?>
</div>