<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php"); ?>
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
								<li><a href="#">Inicio</a></li>
								<li><a href="../NuevoProveedor/index.php">Proveedor</a></li>
							</ol>
						</div>
					</div>
				</div>
	
			</header>
			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana puede registrar un nuevo contato.
				</p>

				<h5 class="m-t-lg with-border"></h5>

				<form method="POST" id="form_contrato">
					<div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="con_numero">Número de Contrato:</label>
							<input type="text" class="form-control" id="con_numero" name="con_numero" placeholder="No. de Contrato">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="prov_id">Proveedor:</label>
							<select id="exampleSelect" class="form-control">
							<select id="prov_id" name="prov_id"class="form-control">
							


							</select>
						</fieldset>
					</div>
					
								
		

				<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
								<div class="summernote-theme-1">
									<textarea id="con_des" name="con_des" class="summernote" name="name"></textarea>
								</div>
							</fieldset>
				</div><!--.row-->
				


						</fieldset>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					
					</div><!--.row-->
			</form>

    
    <?php require_once("../MainJs/js.php");?>

	<script type="text/javascript" src="nuevocontrato.js"></script>
	
	

	</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>

