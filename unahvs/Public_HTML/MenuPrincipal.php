<!-- Informatica Administativa UNAH-VS -->
<!-- Clase sistemas operativos 2 -->
<?php
include 'MenuBar.php';
MenuBar();
MenuPrincipal();
session_start();
ob_start();
function MenuPrincipal(){
	echo '
	<title>Menu principal</title>

<body style="background-image: url(images/fondo.png);">
				<div class="main"> 
					<div class="box">
                    	<center><font color="white"><h1>Cementos del Norte S.A.</h1></font></center>
                        <center><img id="imagen" src="images/bolsa1.png" alt="UNAHVS" width="200" height="340"/>
                        <img id="imagen" src="images/logo.bijao.png" alt="UNAHVS" width="600" height="340" border="5"/>
                        <img id="imagen" src="images/bolsa2.png" alt="UNAHVS" width="200" height="340"/></center>
                        <marquee><font color="white"><h2></h2></font></marquee>';
						?>
						<marquee><font color="silver"><h2>Bienvenido <?php echo $_SESSION['Nombre'];?></h2></font></marquee>
                        </div>
				 </div>
                        <?php
}
?>

<center><img id="imagen" src="images/Intro.gif" alt="UNAHVS" width="1500" height="600" border="0"></center>
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<font color="white"><h2>                      DEPARTAMENTOS</h2></font>
</center>
	
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<font color="white"><font size= 4>ADMINISTRACION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	COMPRA Y VENTA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    FINANZAS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	MARKETING &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	PRODUCCION</font></p>
	<center>
    <img src="images/Administracion.png" width="200" height="200"><font color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>       
	<img src="images/ComprayVenta.png" width="200" height="200"><font color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>  
	<img src="images/Finanzas.png" width="200" height="200"><font color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>  
	<img src="images/Marketing.png" width="200" height="200"><font color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>  
	<img src="images/Produccion.png" width="200" height="200">

</center>
<footer>
    <br>
    <br>
    <br>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black"><font size= 4>PROYECTO FINAL DE INVESTIGACION: </font> <font color = "white" ><font size= 4>Cementos del Norte S.A. </font></p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black"><font size= 4>UBICACION: </font> <font color = "white" ><font size= 4> KM. 20 carretera Puerto Cortes Rio Bijao, Choloma Cortes, Honduras, C.A</font></p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black"><font size= 4>INFORMACION DE CONTACTO: </font> <font color = "white" ><font size= 4> +(504) 2669-9292</font></p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black"><font size= 4>HORARIOS DE ATENCION:</font></p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white"><font size= 4>LUNES A JUEVES: 7:00 am - 5:00 pm</font></p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white"><font size= 4>VIERNES: 7:00 am - 4:00 pm</font></p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white"><font size= 4>SABADO: 8:00 am - 12:00 m</font></p>

  admin@sistemasoperativos.net</a>.</p>
</footer>
<!-- Informatica Administativa UNAH-VS -->
<!-- Clase sistemas operativos 2 -->
