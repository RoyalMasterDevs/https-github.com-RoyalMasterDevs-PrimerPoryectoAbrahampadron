<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
	?>
	<!DOCTYPE html>
	<html>
	<?php require_once("../MainHead/head.php"); ?>
	<title>Plataforma de Pagos y Servicio</title>
	</head>

	<body class="with-side-menu">

		<?php require_once("../MainHeader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<?php require_once("../MainNav/nav.php"); ?>

<<<<<<< HEAD
		<!-- Contenido -->
		<div class="page-content">
			<div class="container-fluid">

				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Nuevo Contrato</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="../Home">Incio</a></li>
									<li><a href="../Suficiencia/index.php">Suficiencia</a></li>
									<li><a href="../NuevoContrato/index.php">Contrato</a></li>
									<li><a href="../Nuevoproveedor/index.php">Proveedor</a></li>
									<li><a href="../ConsultaContrato/index.php">Consuta Contrator</a></li>
									<li><a href="../Factura/index.php">Factura</a></li>
								</ol>
							</div>
=======
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Contrato</h3>
							<ol class="breadcrumb breadcrumb-simple">
							<li><a href="../Home">Incio</a></li>
								<li><a href="../Suficiencia/index.php">Suficiencia</a></li>
								<li><a href="../NuevoContrato/index.php">Contrato</a></li>
								<li><a href="../Nuevoproveedor/index.php">Proveedor</a></li>
								<li><a href="../ConsultaContrato/index.php">Consuta Contrator</a></li>
								<li><a href="../Factura/index.php">Factura</a></li>
							</ol>
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
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

<<<<<<< HEAD
							<div class="col-md-4 col-sm-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="contrato">Numero de Contrato:</label>
									<input type="text" class="form-control" id="con_num" name="con_num" required
										placeholder="Numero de Contrato">
								</fieldset>
							</div>
							<div class="col-md-4 col-sm-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Proveedor:</label>
									<select id="prov_id" name="prov_id" class="form-control" required></select>
								</fieldset>
							</div>
							<div class="col-md-4 col-sm-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Tipo de Recurso:</label>
									<select id="rec_id" name="rec_id" class="form-control"required></select>
								</fieldset>
							</div>
=======
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="contrato">Numero de Contrato:</label>
								<input type="text" class="form-control" id="con_num" name="con_num" placeholder="Numero de Contrato">
							</fieldset>
						</div>
						
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Proveedor:</label>
								<select id="prov_id" name="prov_id" class="form-control">
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a

							<div class="col-md-4 col-sm-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Tipo de Procedimiento:</label>
									<select id="proc_id" name="proc_id" class="form-control"required></select>
								</fieldset>
							</div>
							<div class="col-md-4 col-sm-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Partida Presupuestal:</label>
									<select id="par_id" name="par_id" class="form-control"required></select>
								</fieldset>
							</div>

<<<<<<< HEAD
							<div class="col-md-4 col-sm-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_titulo">Importe:</label>
									<input type="number" class="form-control" step="0.01" id="con_imp" name="con_imp" min="1"
										max="2000000" placeholder="Importe del contrato"required>
								</fieldset>
							</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6">
=======
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Partida Presupuestal:</label>
								<select id="par_id" name="par_id" class="form-control"></select>
							</fieldset>
						</div> 
				
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Importe:</label>
								<input type="number" class="form-control" id="con_imp" name="con_imp" min="1" max="2000000" placeholder="Importe del contrato">
							</fieldset>
						</div>
					<div class="col-lg-4">
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Fecha de Inicio:</label>
								<input type="date" class="form-control" id="con_ini" name="con_ini" required>
									
							</fieldset>
						</div>

						<div class="col-md-4 col-sm-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Fecha de Fin:</label>
								<input type="date" class="form-control" id="con_fin" name="con_fin" required>
									
							</fieldset>
						</div>

						<div class="col-md-4 col-sm-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Documento:</label>
								<input type="file" name="con_doc" id="con_doc" class="form-control" multiple>
							</fieldset>
						</div>


						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="prov_dom">Descripción del Servicio y/o Bien</label>
								<div class="summernote-theme-1">
									<textarea id="con_des" name="con_des" class="summernote" required></textarea>

							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add"
								class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</div>
					</form>
				</div>
			</div>
			<?php require_once("../MainJs/js.php"); ?>

			<script type="text/javascript" src="contrato.js"></script>
			<script type="text/javascript" src="proveedor.js"></script>
			<script type="text/javascript" src="recurso.js"></script>
			<script type="text/javascript" src="partida.js"></script>
			<script type="text/javascript" src="procedimiento.js"></script>

	</body>


	<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>	</html>