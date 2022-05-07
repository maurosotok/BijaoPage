<!-- Informatica Administativa UNAH-VS -->
<!-- Clase sistemas operativos 2 -->
<html>
<head>
<title>OS2 - Iniciar Sesion</title>
<link rel="stylesheet" href="css/login.css" />

<?php
session_start();
ob_start();
unset($_SESSION['Usuario']);
if(strlen($_POST['txt_us']) > 0 && strlen($_POST['txt_psw']) > 0) {
	
	$mysqli=get_db_conn();
	$us = $_POST['txt_us'];
	$psw = $_POST['txt_psw'];
	$sql = "SELECT * FROM TB_Usuarios WHERE Usuario = '$us'";
	
	if (!$resultado = $mysqli->query($sql)) {
    	echo '<script language="javascript">alert("Error consulta:'. $sql .', arrojo el siguiente error'. $mysqli->errno .'");</script>';
    }
	
	$Userweb=$resultado->fetch_assoc();

	if($_POST['txt_us'] == $Userweb['Usuario'] && $_POST['txt_psw'] == $Userweb['Password']) {
    	$_SESSION['Usuario']=$Userweb['Usuario'];
		$_SESSION['Nombre']=$Userweb['Nombre'];
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://181.199.183.21:10072/MenuPrincipal.php">';
		echo '<script language="javascript">alert("Bienvenido:'.$Userweb['Nombre'].'");</script>';
    	
    }else{
    	echo '<script language="javascript">alert("¡Nombre de usuario o contraseña incorrectos!");</script>';
    }
    
}


function get_db_conn() {
       	$mysqli = new mysqli('localhost', 'unahvs', 'SistemasO.2', 'OSDB');
		if ($mysqli->connect_errno){
			echo '<script language="javascript">alert("Error de conexion a la Base de Datos: '.$mysqli->connect_errno.'");</script>';
		}
       	return $mysqli;
}

?>
</head>
<body style="background-image: url(images/fondo.png);">
	<div class="main">
		<!-- -->
        <div class="box">
        	<center><h2>CEMENTOS DEL NORTE S.A.</h2></center>
			<center><img id="imagen" src="images/logoinicio.jfif" alt="UNAHVS" width="200" height="200" border="4"/></center>
			<center><h2>Iniciar Sesion</h2></center>
	    <form class="form" action="index.php" method="post">
		<fieldset>
			<div class="row">
                      		<input name="txt_us" type="text" class="login" value="" placeholder="Usuario">
                  	</div>
			<div class="row">
				<input type="password" class="password" name="txt_psw" placeholder="Password"/>
			</div>
                    	<div class="row">
				<input type="submit" value="Iniciar Sesion" name="Ingresar"/>
			</div>
		</fieldset>
	    </form>
	</div>

    </div>
</body>
</html>
<!-- Informatica Administativa UNAH-VS -->
<!-- Clase sistemas operativos 2 -->
