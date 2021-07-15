<?php
include_once "site.php";

$idAve = $_GET["idAve"];
$result_carousel = "SELECT * FROM aves WHERE id = $idAve";
$resultado_carousel = mysqli_query($con, $result_carousel);
$dados = mysqli_fetch_assoc($resultado_carousel);   

?>

<!DOCTYPE html>
<html id="color">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf8">
    <meta charset="UTF-8">
    <link  rel = " shortcut icon " type = " image / x-icon " href = "../static/_image/icone.png" />
    <link rel="stylesheet" type="text/css" href="../static/_css/_site.css">
    <link rel="stylesheet" href="../static/_css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Catálogo de Aves </title>
</head>

<body id="normal">

<div class="conteiner">

<div class="ave">

<a href="index.php"><img src="../static/_image/voltar.png" class="rounded float-start" id="img" width="50px"></a>
    <div class="div01">
        <h1><b><?php echo $dados['nome']; ?></b></h1>
    </div> </br>

    <div class="div07">
        <div class=div06><img src="<?php echo $dados['imagem']; ?>" class='d-block w-100'> </div>
        <table id="inf">
        <tr> <td class="espaco"> <h5><b>Ordem: </b><?php echo $dados['ordem']; ?></h5> </td> </tr>
        <tr> <td class="espaco"> <h5><b>Familia: </b><?php echo $dados['familia']; ?></h5> </td> </tr>
        <tr> <td class="espaco"> <h5><b>Gênero: </b><?php echo $dados['genero']; ?></h5> </td> </tr>
        <tr> <td class="espaco"> <h5><b>Espécie: </b><i><?php echo $dados['especie']; ?></i></h5> </td> </tr>
        <tr> <td class="espaco"> <h5><b>Nome popular: </b><?php echo $dados['nome']; ?></h5> </td> </tr>
        </table>
    </div>
    <div>
        </br> <hr> </br>
        <h5 class="alinhamento"><b>Descrição</b></h5>
        <?php echo $dados['descricao']; ?> <hr> <br>
        <h5 class="alinhamento"><b>Características</b></h5>
        <?php echo $dados['caracteristica']; ?> <hr> <br>
        <h5 class="alinhamento"><b>Manifestação Sonora</b></h5>
        <audio src="<?php echo $dados['audio']; ?>" preload="auto" class="rounded mx-auto d-block" controls></audio> <br/>
        <?php echo $dados['voz']; ?> <hr> <br>
        <h5 class="alinhamento"><b>Alimentação</b></h5>
        <?php echo $dados['alimentacao']; ?> <hr> <br>
        <h5 class="alinhamento"><b>Reprodução</b></h5>
        <?php echo $dados['reproducao']; ?> <hr> <br>
        <h5 class="alinhamento"><b>Comportamento</b></h5>
        <?php echo $dados['comportamento']; ?>
    </div>
</div>

</div>

</body>

</html>