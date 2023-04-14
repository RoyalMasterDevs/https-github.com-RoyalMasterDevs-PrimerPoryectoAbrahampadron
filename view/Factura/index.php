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
     <style>
 				#encabezado {
					 text-align: center;
					 width: 30%;
					 padding: 50px;
				}
				#Concepto{
					 text-align: center;
					 width: 30%;
					 padding: 20px;
				}
				#proveedor{
					 text-align: center;
					 width: 30%;
					 padding: 20px;
				}
				
				
	 </style>
	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Factura</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#"></a></li>
								<li><a href="#">Forms</a></li>
								<li class="active">Basic Inputs</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
			<h5 class="m-t-lg with-border">Contrato Número
			<div>Vigencia</div>
			</h5>
					
			</form>
			<div class="box-typical box-typical-padding" id="table">
			<table id="data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
						<thead>
								
						<tr>

						<th rowspan ="3" id="encabezado">Importes</th>

						<td>Importe Adjudicado</td><td>$15,000.00</td>
						</tr>	
						<tr>
						<td>Importe Facturado</td><td>$1,5000.00</td>
						</tr>
						<tr>
						<td>Importe por Factura</td><td>$13,000.00</td>
						</tr>
						<tr>
						<th id="proveedor">Proveedor</th></td><td>Nombre del Proveeor<br>
							rfc
						</td>
					
						<tr>
						<th id="Concepto">Concepto</th><td>Concepto</td>
						</tr>
				
						</thead>	
						</tr>	
						</tbody>
					</table>
				</div>
			<h5 class="m-t-lg with-border">Factura</h5>
					
			
			<form method="post" id="factura_form" >
					<div class="row">
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Numero de Factura</label>
								<input type="text" class="form-control" id="fac_num" name="fac_num" placeholder="No. de Factura">
							
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Importe</label>
								<input type="number" class="form-control" id="fac_imp" name="fac_imp" placeholder="Importe">
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Oficio</label>
							<input type="text" class="form-control" id="fac_ofi" name="fac_ofi" placeholder="No. de Oficio">
							</fieldset>
						</div>
					</div><!--.row-->

					<div class="row">
						<div class="col-md-4 col-sm-6">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Fecha</label>
							<input type="date" class="form-control" id="fac_fec" name="fac_fec" placeholder="Fecha">
							</fieldset>
						</div>
						<div class="col-md-4 col-sm-6">
							<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Periodo</label>
							<input type="text" class="form-control" id="fac_per" name="fac_per" placeholder="">
							</fieldset>
						</div>
						<!-- <div class="col-md-4 col-sm-6">
							<fieldset class="form-group">
								<label class="form-label" for="exampleInputError">Error</label>
								<input type="text" class="form-control form-control-error" id="exampleInputError" placeholder="First Name" value="First Name">
							</fieldset>
						</div> -->
  					</form>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</div><!--.row-->

					<h5 class="m-t-lg with-border"></h5>
					<br><br>
					
				<div class="box-typical box-typical-padding" id="table">
					<table id="data1" class="table table-bordered table-striped table-vcenter js-dataTable-full">
						<thead>
							<tr>
								<th style="width: 5%; text-align: center">No.</th>
								<th style="width: 10%;">Número de Factura</th>
								<th class="d-none d-sm-table-cell" style="width: 15%;">Importe</th>
								<th class="d-none d-sm-table-cell" style="width: 20%;">Oficio</th>
								<th class="d-none d-sm-table-cell" style="width: 10%; text-align: center">Fecha</th>
								<th class="d-none d-sm-table-cell" style="width: 10%; text-align: center">Periodo</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>



		</div>
	</div>

				<?php require_once("../MainJs/js.php");?>
				<script type="text/javascript" src="factura.js"></script>
				<script type="text/javascript" src="consultafactura.js"></script>
	</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>
	

