<body class="with-side-menu">

<?php require_once("../MainHead/head.php"); ?>

<div class="mobile-menu-left-overlay"></div>

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
								<li><a href="#">Inicio</a></li>
								<li class="active">Proveedor</li>
							</ol>
						</div>
					</div>
				</div>
	
			</header>
			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana puede registrar un nuevo Proveedor.
				</p>

				<h5 class="m-t-lg with-border">Registro de Proveedor</h5>

				<form>
					<div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="numero">Nombre:</label>
							<input type="text" class="form-control" id="numero" name="numero" placeholder="Nombre y/o Razón Social">
						</fieldset>
					</div>
					
									
					<div class="col-lg-4">
					<fieldset class="form-group">
							<label class="form-label semibold" for="numero">Correo:</label>
							<input type="mail" class="form-control" id="correo" name="correo" placeholder="correo@gmail.com">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="numero">RFC:</label>
							<input type="text" class="form-control" id="rfc" name="rfc" placeholder="Registro Federal de Contribuyentes">
						</fieldset>
						</fieldset>
					</div>
												
				</div><!--.row-->
				<div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="numero">Telefono del proveedor:</label>
							<input type="text" class="form-control" id="numero" name="numero" placeholder="Telefono">
						</fieldset>
						</div><!--.row-->
				
				
					<div class="col-lg-4">
					<fieldset class="form-group">
							<label class="form-label semibold" for="numero">deshabilitado:</label>
							<input type="mail" class="form-control" disabled class="form-control" id="correo" name="correo" placeholder="deshabilitado">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="numero">deshabilitado:</label>
							<input type="text" class="form-control" disabled class="form-control" id="rfc" name="rfc" placeholder="deshabilitado">
						</fieldset>
						</fieldset>
					</div>
												
				</div><!--.row-->

					<div class="row">
					<div class="col-xs-12">
						<label class="form-label semibold" for="importe">Dirección</label>
						<textarea rows="4" class="form-control" placeholder="Dirección del Proveedor"></textarea>
					</div>
					
				</div><!--.row-->


    <?php require_once("../MainJs/js.php"); ?>
</div>
</body>
</html>
