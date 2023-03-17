<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>Plataforma de Pagos y Servicio</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Factura</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#"></a></li>
								<li><a href="#">Forms</a></li>
								<li class="active">Basic Inputs</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
				Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de …
				</p>

			
			<h5 class="m-t-lg with-border">Contrato Númer</h5>
			
			<form method="post" id="factura_form" >
					<div class="row">
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Numero de Factura</label>
								<input type="text" class="form-control" id="fac_num" name="fac_num" placeholder="">
							
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Importe</label>
								<input type="number" class="form-control" id="fac_imp" name="fac_imp" placeholder="">
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Oficio</label>
							<input type="text" class="form-control" id="fac_ofi" name="fac_ofi" placeholder="">
							</fieldset>
						</div>
					</div><!--.row-->

					<div class="row">
						<div class="col-md-4 col-sm-6">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Fecha</label>
							<input type="date" class="form-control" id="fac_fec" name="fac_fec" placeholder="">
							</fieldset>
						</div>
						<div class="col-md-4 col-sm-6">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Periodo</label>
							<input type="text" class="form-control" id="fac_per" name="fac_per" placeholder="">
							</fieldset>
						</div>
						<!-- <div class="col-md-4 col-sm-6">
							<fieldset class="form-group">
								<label class="form-label" for="exampleInputError">Error</label>
								<input type="text" class="form-control form-control-error" id="exampleInputError" placeholder="First Name" value="First Name">
							</fieldset>
						</div> -->
  </form>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>



					</div><!--.row-->


	<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>

	<script type="text/javascript" src="factura.js"></script> 
	

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>