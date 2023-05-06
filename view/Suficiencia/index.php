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
							<h3>Suficiencias</h3>
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
			<h5 class="m-t-lg with-border">Suficiencia</h5>
			<form method="post" id="suficiencia_form" >
					<div class="row">
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">No. de Oficio:</label>
<<<<<<< HEAD
								<input type="text" class="form-control" id="suf_num" name="suf_num" placeholder="No. de Suficiencia" required>
=======
								<input type="text" class="form-control" id="suf_num" name="suf_num" placeholder="No. de Suficiencia">
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
							</fieldset>
						</div>
						<div class="col-md-4 col-sm-4">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Fecha:</label>
<<<<<<< HEAD
							<input type="date" class="form-control" id="suf_fec" name="suf_fec" required>
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group"> 
							<label class="form-label semibold" for="exampleInput">Importe:</label>
								<input type="number" class="form-control" id="suf_imp" name="suf_imp" step="0.01" min="1"  mx="2000000000.50" placeholder="Importe Max" required>
=======
							<input type="date" class="form-control" id="suf_fec" name="suf_fec">
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Importe:</label>
								<input type="number" class="form-control" id="suf_imp" name="suf_imp" min="1" mx="2000000000.00" placeholder="Importe Max">
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="suf_des">Justificación:</label>
								<div class="summernote-theme-1">
<<<<<<< HEAD
									<textarea id="suf_des" name="suf_des" class="summernote" required></textarea>
=======
									<textarea id="suf_des" name="suf_des" class="summernote"></textarea>
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
							</fieldset>
							</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Partida Presupuestal:</label>
<<<<<<< HEAD
								<select id="par_id" name="par_id" class="form-control" required></select>
=======
								<select id="par_id" name="par_id" class="form-control"></select>
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
							</fieldset>
  						</div>
						  <div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Solicitud</label>
<<<<<<< HEAD
								<input type="file" name="fileElem" id="fileElem" class="form-control"required multiple>
=======
								<input type="file" name="fileElem" id="fileElem" class="form-control" multiple>
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
							</fieldset>
						</div>
						
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Autorización</label>
<<<<<<< HEAD
								<input type="file" name="fileElem" id="fileElem" class="form-control"required multiple>
=======
								<input type="file" name="fileElem" id="fileElem" class="form-control" multiple>
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
							</fieldset>
						</div>		

						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</div><!--.row-->

					<h5 class="m-t-lg with-border"></h5>
					</form>
					<table id="data1" class="table table-bordered table-striped table-vcenter js-dataTable-full hover">
						<thead>
							<tr>
								<th class="d-none d-sm-table-cell" style="width: 3%; text-align: center">No.</th>
								<th class="d-none d-sm-table-cell" style="width: 3%; text-align: center">Núm. de Of.</th>
								<th class="d-none d-sm-table-cell" style="width: 30%;">Descipción</th>
								<th class="d-none d-sm-table-cell" style="width: 10%;text-align: center">Importe</th>
								<th class="d-none d-sm-table-cell" style="width: 10%;text-align: center">Partida</th>
								<th class="d-none d-sm-table-cell" style="width: 10%;text-align: center">Fecha</th>
						
							</tr>
						</thead>
						<tbody>

						
						</tbody>
					</table>
				</div>
				
		</div>
	</div>

				<?php require_once("../MainJs/js.php");?>
				<script type="text/javascript" src="suficiencia.js"></script>
				<script type="text/javascript" src="jsuficiencia.js"></script>
				<script type="text/javascript" src="partida.js"></script>
				
				
	</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>
	

