<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php"); ?>
	<title>Registro de Contratos y Pagos: Home</title>
</head>
<body class="with-side-menu">
	
	<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php");?>

	<div class="page-content">
		<div class="container-fluid">
			<h1>Inicio</h1>
		</div>
	</div>
    
    <?php require_once("../MainJs/js.php");?>

	<script type="text/javascript" src="home.js"></script>

	</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>

