<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
	<title>Registro de Contratos y Pagos: Home</title>
</head>
<body class="with-side-menu">
	
	<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php");?>

	<div class="page-content">
	<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Contrato</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/index.php">Inicio</a></li>
								<li><a href="../NuevoProveedor/index.php">Proveedor</a></li>
							</ol>
						</div>
					</div>
				</div>
	
	</header>
			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana puede registrar un nuevo contrato.
				</p>

				<h5 class="m-t-lg with-border"></h5>
				<div class="row">
					<form method="post" id="ticket_form">

						<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">

						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="con_numero">No. de Contato</label>
								<input type="text" class="form-control" id="con_numero" name="con_numero" placeholder="Ingrese Titulo">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Proveedor</label>
								<select id="prov_id" name="prov_id" class="form-control">

								</select>
							</fieldset>
						</div>
						<!-- 
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Tipo de Recurso:</label>
								<select id="prov_id" name="prov_id" class="form-control">
	
								</select>
							</fieldset>
						</div> 
	
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Tipo de Procedimiento:</label>
								<select id="prio_id" name="prio_id" class="form-control">
	
								</select>
							</fieldset>
						</div>  -->


						<!-- <div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Documentos </label>
								<input type="file" name="fileElem" id="fileElem" class="form-control" multiple>
							</fieldset>
						</div> -->

						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="con_descrip">Descripción</label>
								<div class="summernote-theme-1">
									<textarea id="con_descrip" name="con_descrip" class="summernote" name="name"></textarea>
								</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<!-- Contenido -->
				






    <?php require_once("../MainJs/js.php");?>

	<script type="text/javascript" src="nuevocontrato.js"></script>
	
	

	</body>
</html>

<?php
} else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>

