<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>

<body class="with-side-menu">

	<?php require_once("../MainHead/head.php"); ?>
	
	<?php require_once("../MainJs/js.php"); ?>
	
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
								<li><a href="../Home">Incio</a></li>
								<li><a href="../Suficiencia/index.php">Suficiencia</a></li>
								<li><a href="../NuevoContrato/index.php">Contrato</a></li>
								<li><a href="../Nuevoproveedor/index.php">Proveedor</a></li>
								<li><a href="../ConsultaContrato/index.php">Consuta Contrator</a></li>
								<li><a href="../Factura/index.php">Factura</a></li>
							</ol>
					</div>
				</div>
			</div>
		</header>
		<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podra registrar un Nuevo Proveedor.
				</p>

				<h5 class="m-t-lg with-border">Ingresar Información</h5>
				
				<div class="row">
					<form method="post" id="proveedor_form">

				
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="prov_nom">Nombre:</label>
<<<<<<< HEAD
								<input type="text" class="form-control" id="prov_nom" name="prov_nom" placeholder="Nombre y/o Razón Social" required>
=======
								<input type="text" class="form-control" id="prov_nom" name="prov_nom" placeholder="Nombre y/o Razón Social">
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="rfc">RFC:</label>
								<input type="text" class="form-control" id="rfc" name="rfc" placeholder="Ingrese el RFC">
							</fieldset>
						</div> 
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="prov_dom">Domicilio</label>
								<div class="summernote-theme-1">
									<textarea id="prov_dom" name="prov_dom" class="summernote" required></textarea>
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

			<?php require_once("../MainJs/js.php");?>

<script type="text/javascript" src="nproveedor.js"></script>
</body>
</html>

<?php
} else {
header("Location:".Conectar::ruta()."index.php");
}
?>
