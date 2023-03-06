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
					Desde esta ventana puede registrar un nuevo contrato.
				</p>

				<h5 class="m-t-lg with-border"></h5>

				<form>
					<div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="numero">Número de Contrato:</label>
							<input type="text" class="form-control" id="numero" name="numero" placeholder="No. de Contrato">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="proveedor">Proveedor:</label>
							<select id="prov_id" class="form-control"></select>
							</select>
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
						<label class="form-label semibold" for="proveedor">Tipo de Procedimiento:</label>
								<select id="exampleSelect" class="form-control">
								<select id="prov_id" class="form-control"></select>
							
							</select>
						</fieldset>
					</div>
				
								
				</div><!--.row-->


				<div class="row">
					<div class="col-md-4 col-sm-6">
					<fieldset class="form-group">
						<label class="form-label semibold" for="proveedor">Tipo de Recurso:</label>
								<select id="exampleSelect" class="form-control">
								<option>--Seleccione--</option>
								<option>Recursos Propios </option>
								<option>Recursos Fiscales </option>
								<option>Recurso Federal</option>
								<option>Recurso Local</option>
							</select>
						</fieldset>
					</div>
				
					<div class="col-md-4 col-sm-6">
					<label class="form-label semibold" for="proveedor">Partida Presupuestal:</label>
								<select id="exampleSelect" class="form-control">
								<option>--Seleccione--</option>
								<option>2000</option>
								<option>3000</option>
								<option>4000</option>
								<option>5000</option>
							</select>
						</fieldset>
					</div>
					<div class="col-md-4 col-sm-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="importe">Importe Adjuducado:</label>
							<input type="number" class="form-control" id="importe" name="importe" placeholder="Importe Adjudicado">
						</fieldset>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-xs-12">
						<label class="form-label semibold" for="importe">Concepto</label>
						<textarea id="descrip" name="descrip" class="summernote" name="name"></textarea>
					</div>
				</div><!--.row-->
				<br>
				<div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="inicio">Fecha de Inicio:</label>
							<input type="date" class="form-control" id="inicio" name="inicio">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="proveedor">Fecha de Termino:</label>
							<input type="date" class="form-control" id="termino" name="termino">
					</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
						<label class="formfile" for="archivo">Documento:</label>
						<input type="file" class="form-control" id="archivo" name="archivo">
						</fieldset>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</form>
					
					</div><!--.row-->


    
    <?php require_once("../MainJs/js.php");?>

	<script type="text/javascript" src="nuevocontrato.js"></script>
	
	

	</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>

