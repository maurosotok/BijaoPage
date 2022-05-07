<!-- Informatica Administativa UNAH-VS -->
<!-- Clase sistemas operativos 2 -->
<?php
session_start();
ob_start();

function MenuBar(){
if (!isset($_SESSION['Usuario'])) {
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://181.199.183.21:10072/index.php">';
echo '<script language="javascript">alert("¡Debe iniciar sesión!");</script>';
}
echo'
<title></title>
<link rel="stylesheet" type="text/css" href="Menus/02/jqueryslidemenu.css" />
<script type="text/javascript" src="Menus/02/jquery.min.js"></script>
<script type="text/javascript" src="Menus/02/jqueryslidemenu.js"></script>
		<div id="myslidemenu" class="jqueryslidemenu">
		<ul>
        	<li><a href="http://181.199.183.21:10072/MenuPrincipal.php">Inicio</a>
            <li><a href="http://181.199.183.21:10079/MenuPrincipal.php">Informacion</a>
            <li><a href="#">Departamentos</a>
            	<ul>
                	<li><a href="http://181.199.183.21:10074/MenuPrincipal.php">Marketing</a>
            		<li><a href="http://181.199.183.21:10076/MenuPrincipal.php">Compras y Ventas</a>
                    <li><a href="http://181.199.183.21:10075/MenuPrincipal.php">Produccion y Calidad</a>
                    <li><a href="http://181.199.183.21:10077/MenuPrincipal.php">Administracion</a>
                    <li><a href="http://181.199.183.21:10078/MenuPrincipal.php">Finanzas</a>
                </ul>
            <li><a href="http://181.199.183.21:10072/index.php">Finalizar sesión</a>
		</ul>
		<br style="clear: left" />
		</div>';
}
?>
<!-- Informatica Administativa UNAH-VS -->
<!-- Clase sistemas operativos 2 -->
