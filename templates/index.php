<?php
    include_once "site.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf8">
    <meta charset="UTF-8">
    <link  rel = " shortcut icon " type = " image / x-icon " href = "../static/_image/icone.png" />
    <link rel="stylesheet" type="text/css" href="../static/_css/_site.css">
    <link rel="stylesheet" href="../static/_css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Catálogo de Aves </title>
</head>

<body> 

<div class="div01"> 

  <div class="btn-group" class="rounded float-start">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      MENU
    </button>
    <ul class="dropdown-menu dropdown-menu-dark">
      <?php
		    $result_carousel = "SELECT * FROM pagina ORDER BY id";
		    $resultado_carousel = mysqli_query($con, $result_carousel);
		    while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){?>
				  <li><a class="dropdown-item" href="pagina.php?idPagina=<?php echo $row_carousel['id']?>"><?php echo $row_carousel['nome'] ?></a></li><?php
		    } ?>
    </ul>
  </div>

  <h1 class="rounded mx-auto d-block"><b>IF AVES</b></h1>

  <a href="_Sobre.html"><img src="../static/_image/sobre.png" class="rounded float-end" width="50px"></a>

</div> <br/>

<div class="div04"> <img src="../static/_image/logo.png" class="imghome" class="rounded float-start" class='d-block w-100'> </div>

<div class="div05"> <img src="../static/_image/ilustracao.png" class="imghome" class="rounded float-end" class='d-block w-100'> </div>

<div id="carouselExampleCaptions" class="carousel slide" id= "carousel" data-bs-ride="carousel">
  <div class="carousel-indicators">
		<?php
		  $controle_ativo = 2;	
			$controle_num_slide = 1;
			$result_carousel = "SELECT * FROM aves ORDER BY id";
			$resultado_carousel = mysqli_query($con, $result_carousel);
			while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
				if($controle_ativo == 2){ ?>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"></button><?php
					$controle_ativo = 1;
		    }else{ ?>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $controle_num_slide; ?>"></button> <?php
					$controle_num_slide++;
				}
			}
		?>						
	</div>

  <div class="carousel-inner" role="listbox">
  	<?php
		  $controle_ativo = 2;						
			$result_carousel = "SELECT * FROM aves ORDER BY id ASC";
			$resultado_carousel = mysqli_query($con, $result_carousel);
			while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){ 
				if($controle_ativo == 2){ ?>
          <div class='carousel-item active'>
            <img src="<?php echo $row_carousel['imagem']; ?>" class='d-block w-100'>
            <div class="carousel-caption d-none d-md-block">
              <h5> <?php echo $row_carousel['nome']; ?> (<?php echo $row_carousel['especie']; ?>)</h5>
              <a href="ave.php?idAve=<?php echo $row_carousel['id']?>"> <button class="btn btn-success">Veja Mais</button> </a>
            </div>
          </div> <?php
					$controle_ativo = 1;
				}else{ ?>
          <div class='carousel-item'>
            <img src="<?php echo $row_carousel['imagem']; ?>" class='d-block w-100'>
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $row_carousel['nome']; ?> (<?php echo $row_carousel['especie']; ?>)</h5>
              <a href="ave.php?idAve=<?php echo $row_carousel['id']?>"> <button class="btn btn-success">Veja Mais</button> </a>
            </div>
          </div> <?php
				}
			}
	  ?>					
	</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>

  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>