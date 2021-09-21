<?php
include_once(dirname(__FILE__) . "/inc/MySQL.php");

include_once(dirname(__FILE__) . "/inc/header.php");

include_once(dirname(__FILE__) . "/inc/menu.php");

$servidor = "localhost:3308";
$usuario = "root";
$senha = "";
$dbname = "getjob";
//Criar a conexao

$teste = mysqli_connect($servidor, $usuario, $senha, $dbname);

$busca = isset($_GET['busca']) ? $_GET['busca'] : false;



if ($busca != false) :
    $result_anun = "SELECT * FROM anuncios WHERE profissao LIKE '%$busca%' "; // após o WHERE deve-se inserir o segundo elemento da tabela de
    $result_anuncios = mysqli_query($teste, $result_anun);

    echo "Você pesquisou: " . $busca;
    while ($rows_anun = mysqli_fetch_array($result_anuncios)) {
?><div class="container">
            <div class="row">
                <div class="col col-md-3 p-3 mb-5">
                    <div class="bg-white p-4 h-100" style="border: 2px solid goldenrod;">
                        <div>Profissão <?php echo $rows_anun['profissao'] ?></div>
                        <div>Nome: <?php echo $rows_anun['nome'] ?></div>
                        <div>Descrição: <?php echo $rows_anun['descricao'] ?></div>
                        <div class="text-center"><button><a style="color:black; font-family:'Courier'; text-decoration: none;background-color:green; border: 3px outset gray" role="button" href="workperf.php?id=<?php echo $rows_anun['ID'] ?>">Contratar</a></button></div>
                        <div> <?php echo $rows_anun['ID'] ?></div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
endif;
?>
<?php
include_once(dirname(__FILE__) . "/inc/menu.php");

include_once(dirname(__FILE__) . "/inc/down.php");
?>