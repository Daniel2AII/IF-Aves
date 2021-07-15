<?php
include_once "site.php";

$idPagina = $_GET["idPagina"];
$result_carousel = "SELECT * FROM pagina WHERE id = $idPagina";
$resultado_carousel = mysqli_query($con, $result_carousel);
$dados = mysqli_fetch_assoc($resultado_carousel);   

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link  rel = " shortcut icon " type = " image / x-icon " href = "../static/_image/icone.png" />
    <link rel="stylesheet" type="text/css" href="../static/_css/_site.css">
    <link rel="stylesheet" href="../static/_css/bootstrap.css">

    <title> <?php echo $dados['nome']; ?> </title>
    
</head>

<body id="normal">

<div class="conteiner">

<div class="ave">

<a href="index.php"><img src="../static/_image/voltar.png" class="rounded float-start" id="img" width="50px"></a>
    <div class="div01">
        <h1><b><?php echo $dados['nome']; ?></b></h1>
    </div> </br>
    <div>
        <?php echo $dados['conteudo']; ?>
    </div>
</div>

</div>

</body>

</html>