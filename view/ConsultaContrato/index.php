<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>Consultar Contrato</title>
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
							<h3>Consultar Contrato</h3>
							<ol class="breadcrumb breadcrumb-simple">
							<ol class="breadcrumb breadcrumb-simple">
							<li><a href="../Home">Incio</a></li>
								<li><a href="../Suficiencia/index.php">Suficiencia</a></li>
								<li><a href="../NuevoContrato/index.php">Contrato</a></li>
								<li><a href="../Nuevoproveedor/index.php">Proveedor</a></li>
								<li><a href="../ConsultaContrato/index.php">Consuta Contrator</a></li>
								<li><a href="../Factura/index.php">Factura</a></li>
							</ol>
							</ol>
						</div>
					</div>
				</div>
			</header>
			<div class="box-typical box-typical-padding">
				
				<div class="row" id="viewuser">
					<div class="col-lg-3">
						<fieldset class="form-group">
							<label class="form-label" for="tick_titulo">Titulo</label>
							<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo" required>
						</fieldset>
					</div>

					<div class="col-lg-3">
						<fieldset class="form-group">
							<label class="form-label" for="cat_id">Categoria</label>
							<select class="select2" id="cat_id" name="cat_id" data-placeholder="Seleccionar">
								<option label="Seleccionar"></option>

							</select>
						</fieldset>
					</div>

					<div class="col-lg-2">
						<fieldset class="form-group">
							<label class="form-label" for="prio_id">Prioridad</label>
							<select class="select2" id="prio_id" name="prio_id" data-placeholder="Seleccionar">
								<option label="Seleccionar"></option>

							</select>
						</fieldset>
					</div>

					<div class="col-lg-2">
						<fieldset class="form-group">
							<label class="form-label" for="btnfiltrar">&nbsp;</label>
							<button type="submit" class="btn btn-rounded btn-primary btn-block" id="btnfiltrar">Filtrar</button>
						</fieldset>
					</div>

					<div class="col-lg-2">
						<fieldset class="form-group">
							<label class="form-label" for="btntodo">&nbsp;</label>
							<button class="btn btn-rounded btn-primary btn-block" id="btntodo">Ver Todo</button>
						</fieldset>
					</div>
				</div>

				<div class="box-typical box-typical-padding" id="table">
					<table id="data" class="table table-bordered table-striped table-vcenter js-dataTable-full hover">
						<thead>
							<tr>
								<th style="width: 5%; text-align: center">No.</th>
								<th style="width: 15%;">Número de Contrato</th>
								<th class="d-none d-sm-table-cell" style="width: 15%;">Nombre del Proveedor</th>
								<th class="d-none d-sm-table-cell" style="width: 30%;">Descripción del Bien y/o Servicio</th>
								<th class="d-none d-sm-table-cell" style="width: 5%; text-align: center">Importe</th>
<<<<<<< HEAD
								<th class="d-none d-sm-table-cell" style="width: 5%; text-align: center">documento</th>
=======
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
								<th class="d-none d-sm-table-cell" style="width: 5%; text-align: center">ver</th>
								
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>

			</div>

		</div>
	</div>

	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="consultacontrato.js"></script>

	

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>