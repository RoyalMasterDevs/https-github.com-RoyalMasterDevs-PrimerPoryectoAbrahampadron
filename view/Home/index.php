<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
	<?php require_once("../MainHead/head.php"); ?>
	 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<title>Registro de Contratos y Pagos: Home</title>
</head>
<body class="with-side-menu">
	
	<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php");?>
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-sm-4">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number" id="lbltotal"></div>
	                                <div class="caption"><div>Adjudicación Directa</div></div>
									<div class="caption"><div>10</div></div>
									<div class="caption"><div>$2,582,1515.00</div><br/></div>
									<br>
								
	                            </div>
	                        </article>
	                    </div>
						<div class="col-sm-4">
	                        <article class="statistic-box orange" style="background-color:#2989d8;">
	                            <div>
	                                <div class="number" id="lbltotalabierto"></div>
	                                <div class="caption"><div><h2>Invitación Restringida</h2></div></div>
									<div class="caption"><div><h2>20</h2></div></div>
									<div class="caption"><div><h2>2,020.500.5</h2></div>
	                            </div>
	                        </article>
	                    </div>
						<div class="col-sm-4">
	                        <article class="statistic-box red">
	                            <div>
	                                <div class="number" id="lbltotalcerrado"></div>
	                                <div class="caption"><div>Licitación Publica Nacional</div></div>
									<div class="caption"><div>30</div></div>
									<div class="caption"><div>$2,0000.00</div></div>
	                            </div>
	                        </article>
	                    </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-sm-4">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number" id="lbltotal"></div>
	                                <div class="caption"><div>Autogenerados</div></div>
					<div class="caption"><div>$2,582,1515.00</div><br/></div>
									<br>
									<article class="statistic-box orange">
	                            </div>
	                        </article>
	                    </div>
						<div class="col-sm-4">
						<article class="statistic-box orange" style="background-color:#ffa102;">
	                            <div>
	                                <div class="number" id="lbltotalabierto"></div>
	                                <div class="caption"><div>Fiscal</div></div>
							<div class="caption"><div>$2,125,2151.22</div></div>
	                            </div>
	                        </article>
	                    </div>
						<div class="col-sm-4">
	                        <article class="statistic-box purple">
	                            <div>
	                                <div class="number" id="lbltotalcerrado"></div>
	                                <div class="caption"><div>Federal</div></div>

									<div class="caption"><div>$2,0000.00</div></div>
	                            </div>
	                        </article>
	                    </div>
					</div>
				</div>
			</div>





			<section class="card">
				<header class="card-header">
					Grafico Estadístico
				</header>
				<div class="card-block">
					<div id="divgrafico" style="height: 250px;"></div>
				</div>
			</section>

		</div>
	</div>
		<!--Contenido-->	
    	<?php require_once("../MainJs/js.php");?>
	
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
		<script type="text/javascript" src="home.js"></script>

	</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>

