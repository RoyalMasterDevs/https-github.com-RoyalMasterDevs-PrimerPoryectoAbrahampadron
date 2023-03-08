<?php

  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>

<body class="with-side-menu">

	<?php require_once("../MainHead/head.php"); ?>
	
	<?php require_once("../MainJs/js.php"); ?>
	
	<div class="mobile-menu-left-overlay"></div>
	
	<?php require_once("../../config/conexion.php"); ?>

	<?php require_once("../MainHeader/header.php"); ?>

	<!--Contenido-->
	<?php require_once("../MainNav/nav.php"); ?>
	
	<div class="page-content">
		<header class="section-header">
			<div class="tbl">
				<div class="tbl-row">
					<div class="tbl-cell">
						<h3>Proveedor</h3>
						<ol class="breadcrumb breadcrumb-simple">
						<li><a href="../Home/">Inicio</a></li>
						<li><a href="../NuevoContrato/index.php">Contrato</a></li>
						</ol>
					</div>
				</div>
			</div>

		</header>
		<div class="box-typical box-typical-padding">
			<p>
				Desde esta ventana puede registrar un nuevo Proveedor.
			</p>

			<h5 class="m-t-lg with-border"></h5>
			
			<form method="post" id="proveedor_form"> 
						<div class="row">
							<div class="col-lg-4">
								<fieldset class="form-group">
									<label class="form-label semibold" for="proveedor_form">Nombre y/o Razón Social:</label>
									<input type="text" class="form-control" id="pro_nom" name="pro_nom" placeholder="Nombre y/o Razón Social">
								</fieldset>
						</div>
				<div class="col-lg-4">
								<fieldset class="form-group">
									<label class="form-label semibold" for="numero">Correo:</label>
									<input type="mail" class="form-control" id="pro_corr" name="pro_corr" placeholder="correo@gmail.com">
								</fieldset>
						</div>
						<div class="col-lg-4">
								<fieldset class="form-group">
									<label class="form-label semibold" for="numero">RFC:</label>
									<input type="text" class="form-control" id="pro_rfc" name="pro_rfc" placeholder="Registro Federal de Contribuyentes">
								</fieldset>
								</fieldset>
						</div>
						</div> 
						<div class="row">
						<div class="col-lg-4">
								<fieldset class="form-group">
									<label class="form-label semibold" for="numero">Telefono del proveedor:</label>
									<input type="text" class="form-control" id="pro_tel" name="pro_tel" placeholder="Telefono">
								</fieldset>
						</div>
						<div class="col-lg-4">
						<fieldset class="form-group">
						<label class="form-label semibold" for="numero">Deshabilitado:</label>
						<input type="mail" class="form-control" disabled class="form-control" id="correo" name="correo" placeholder="Deshabilitado">
						</fieldset>
						</div>
						<div class="col-lg-4">
						<fieldset class="form-group">
						<label class="form-label semibold" for="numero">Deshabilitado:</label>
						<input type="text" class="form-control" disabled class="form-control" id="rfc" name="rfc" placeholder="Deshabilitado">
						</fieldset>
						</div>

				</div> 

				<div class="row">
					<div class="col-lg-12">
						<label class="form-label semibold" for="importe">Dirección</label>
						<textarea rows="4" class="form-control"  id="pro_dir" name="pro_dir" placeholder="Dirección del Proveedor"></textarea>
						<br>
					</div>

					<div class="col-lg-12">
					<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					
			
						</div>
			</form>
		</div>
		</div>
		</div>
	</div>
	</div>
</div>

			<?php require_once("../MainJs/js.php");?>

<script type="text/javascript" src="nuevoproveedor.js"></script>



</body>
</html>

<?php
} else {
header("Location:".Conectar::ruta()."index.php");
}
?>
