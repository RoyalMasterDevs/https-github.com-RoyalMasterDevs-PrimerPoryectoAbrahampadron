
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
						<h3>Registrar Nuevo Proveedor</h3>
						<ol class="breadcrumb breadcrumb-simple">
						<li><a href="../Home/">Inicio</a></li>
								<li class="active">Contrato</li>
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
			
			<form action="index.php" method="POST" id="prov_form"> 
						<div class="row">
							<div class="col-lg-4">
								<fieldset class="form-group">
									<label class="form-label semibold" for="numero">Nombre y/o Razón Social:</label>
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
						</div><!--.row-->
						<div class="row">
						<div class="col-lg-4">
								<fieldset class="form-group">
									<label class="form-label semibold" for="numero">Telefono del proveedor:</label>
									<input type="text" class="form-control" id="pro_tel" name="pro_tel" placeholder="Telefono">
								</fieldset>
						</div><!--.row-->
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

				</div><!--.row-->

				<div class="row">
					<div class="col-lg-12">
						<label class="form-label semibold" for="importe">Dirección</label>
						<textarea rows="4" class="form-control"  id="pro_dir" name="pro_dir" placeholder="Dirección del Proveedor"></textarea>
						<br>
					</div>

					<div class="col-lg-12">
						<fieldset class="form-group">
							<input type="hidden" name=act value="run">
							<button type="submit" type="submit" class="btn btn-success">Guardar</button>
						</fieldset>

					</div>
					
					<?php 
					
					if(isset ($_POST['act']))
					{
						$pro_nom=$_POST['pro_nom'];
						$pro_corr=$_POST['pro_corr'];
						$pro_rfc=$_POST['pro_rfc'];
						$pro_tel=$_POST['pro_tel'];
						$pro_dir=$_POST['pro_dir'];

						$sql="INSERT INTO tb_proveedor (id_prov,pro_nom,pro_corr,pro_rfc,pro_tel,pro_dir) VALUES ('$pro_nom','$pro_corr','$pro_rfc','$pro_tel','$pro_dir')";
						$conectar($conexion,-$sql);
					}
					
									
					?>

				</div><!--.row-->
			</form>

			<?php require_once("../MainJs/js.php"); ?>

		
		</div>
</body>

</html>