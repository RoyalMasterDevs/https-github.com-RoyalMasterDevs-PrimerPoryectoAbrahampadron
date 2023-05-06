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
							<h3>Nuevo Contrato</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Contrato</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podra registrar nuevos Contratos.
				</p>

				<h5 class="m-t-lg with-border">Ingresar Información</h5>

				<div class="row">
					<form method="post" id="contrato_form">

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Numero de Contrato:</label>
								<input type="text" class="form-control" id="con_num" name="con_num" placeholder="Numero de Contrato">
							</fieldset>
						</div>
						
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Proveedor:</label>
								<select id="prov_id" name="prov_id" class="form-control">

								</select>
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Tipo de Recurso:</label>
								<select id="rec_id" name="rec_id" class="form-control"></select>
							</fieldset>
						</div> 
					
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Tipo de Procedimiento:</label>
								<select id="proc_id" name="proc_id" class="form-control"></select>
							</fieldset>
						</div> 

						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Partida Presupuestal:</label>
								<select id="par_id" name="par_id" class="form-control"></select>
							</fieldset>
						</div> 
				
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Importe:</label>
								<input type="number" class="form-control" id="con_imp" name="con_imp" placeholder="Importe del contrato">
							</fieldset>
						</div>
					<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Fecha de Inicio:</label>
								<input type="date" class="form-control" id="con_ini" name="con_ini" placeholder="Ingrese Titulo">
							</fieldset>
						</div>

						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Fecha de Fin:</label>
								<input type="date" class="form-control" id="con_fin" name="con_fin" placeholder="Ingrese Titulo">
							</fieldset>
						</div>

						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="prov_dom">Descripción del Servicio y/o Bien</label>
								<div class="summernote-theme-1">
									<textarea id="con_des" name="con_des" class="summernote"></textarea>
							
							</fieldset>
							</div>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</form>
				</div>

	<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>

	<script type="text/javascript" src="contrato.js"></script> 
	<script type="text/javascript" src="proveedor.js"></script>
	<script type="text/javascript" src="recurso.js"></script>
	<script type="text/javascript" src="partida.js"></script>
	<script type="text/javascript" src="procedimiento.js"></script>

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>