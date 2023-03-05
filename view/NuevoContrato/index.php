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
							<h3>Registrar Nuevo Contrato</h3>
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
					Desde esta ventana puede registrar un nuevo contato.
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
							<select id="id_prov" class="form-control">
				</select>
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
						<label class="form-label semibold" for="procedimiento">Tipo de Procedimiento:</label>
								<select id="exampleSelect" class="form-control">
								<option>--Seleccione--</option>
								<option>Adjudicacion Directa</option>
								<option>Invitación Restringida</option>
								<option>Licitción Publica Nacional</option>
								<option>Licitción Publica Internacional</option>
							</select>
						</fieldset>
					</div>
				
								
				</div><!--.row-->


				<div class="row">
					<div class="col-md-4 col-sm-6">
					<fieldset class="form-group">
						<label class="form-label semibold" for="recurso">Tipo de Recurso:</label>
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
					<label class="form-label semibold" for="partida">Partida Presupuestal:</label>
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
			
				
				<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
								<div class="summernote-theme-1">
									<textarea id="tick_descrip" name="tick_descrip" class="summernote" name="name"></textarea>
								</div>
							</fieldset>
				
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
						<button type="button" class="btn btn-danger"a href="../home/index.php">Cancelar</button>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
					
					</div><!--.row-->


    <?php require_once("../MainJs/js.php"); ?>
</div>

<script type="text/javascript" src="nuevoproveedor.js"></script>
</body>
</html>
