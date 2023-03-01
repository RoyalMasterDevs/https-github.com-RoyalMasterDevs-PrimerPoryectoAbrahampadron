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
							<h3>Contrato</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Inicio</a></li>
								<li class="active">Contrato</li>
							</ol>
						</div>
					</div>
				</div>
	
			</header>
			<div class="box-typical box-typical-padding">
				<p>
					Desde esta Ventana puede registrar un nuevo Contato.
				</p>

				<h5 class="m-t-lg with-border">Registro de Contrato</h5>

				<form>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Número de Contrato</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="numero" name="numero" placeholder="No. de Contrato"></p>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Proveedor</label>
						<div class="col-sm-10">
							<select id="exampleSelect" class="form-control">
								<option>--Seleccione--</option>	
								<option>Juan </option>
								<option>Perenganito</option>
								<option>Julanito</option>
								<option>etc..</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Tipo de Procedimiento</label>
						<div class="col-sm-10">
							<select id="exampleSelect" class="form-control">
								<option>--Seleccione--</option>	
								<option>Adjudicación Directa</option>
								<option>Invitación Restringida</option>
								<option>Licitación Publica Nacional</option>
								<option>Licitación Publica Internacional</option>
								</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Tipo de Recurso</label>
						<div class="col-sm-10">
							<select id="exampleSelect" class="form-control">
								<option>--Seleccione--</option>	
								<option>Recursos Propios</option>
								<option>Fiscales</option>
								<option>Federal</option>
						</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Tipo de Contrato</label>
						<div class="col-sm-10">
							<select id="exampleSelect" class="form-control">
								<option>--Seleccione--</option>	
								<option>Abierto</option>
								<option>Cerrado</option>
						</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Importe </label>
						<div class="col-sm-10">
							<select id="exampleSelect" class="form-control">
								<option>--Seleccione--</option>	
								<option>Recursos Propios</option>
								<option>Fiscales</option>
								<option>Federal</option>
						</select>
						</div>
					</div>


					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Número de Contrato</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="number" class="form-control" id="importe" name="importe" placeholder="importe Adjudicado"></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Concepto</label>
						<div class="col-sm-10">
							<textarea rows="4" class="form-control" placeholder="Concepto"></textarea>
						</div>
					</div>
				</form>
	</div>

	
    <?php require_once("../MainJs/js.php"); ?>
</div>
</body>
</html>
