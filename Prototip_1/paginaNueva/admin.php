<?php require_once('Connections/conexion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO atractivosturisticos (Ciudad, Provincia, Region, TipoAtractivo, idPadre, Descripcion, Superficie, Extencion, Altitud, Fundacion, Coordenadas, Nombre, idCiudades) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Ciudad'], "text"),
                       GetSQLValueString($_POST['Provincia'], "text"),
                       GetSQLValueString($_POST['Region'], "text"),
                       GetSQLValueString($_POST['TipoAtractivo'], "text"),
                       GetSQLValueString($_POST['idPadre'], "text"),
                       GetSQLValueString($_POST['Descripcion'], "text"),
                       GetSQLValueString($_POST['Superficie'], "text"),
                       GetSQLValueString($_POST['Extencion'], "text"),
                       GetSQLValueString($_POST['Altitud'], "text"),
                       GetSQLValueString($_POST['Fundacion'], "text"),
                       GetSQLValueString($_POST['Coordenadas'], "text"),
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['idCiudades'], "int"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

  $insertGoTo = "index.html";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO transportes (TipoTransporte, idPadre, Descripcion) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['TipoTransporte'], "text"),
                       GetSQLValueString($_POST['idPadre'], "int"),
                       GetSQLValueString($_POST['Descripcion'], "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

  $insertGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form3")) {
  $insertSQL = sprintf("INSERT INTO ciudades (Nombre, Provincia, Extencion, Poblacion) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Provincia'], "text"),
                       GetSQLValueString($_POST['Extencion'], "text"),
                       GetSQLValueString($_POST['Poblacion'], "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

  $insertGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form4")) {
  $insertSQL = sprintf("INSERT INTO hoteles (Nombre, idCiudad, Precio, Fundacion, Categoria) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['idCiudad'], "text"),
                       GetSQLValueString($_POST['Precio'], "int"),
                       GetSQLValueString($_POST['Fundacion'], "text"),
                       GetSQLValueString($_POST['Categoria'], "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

  $insertGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO atractivosturisticos (Ciudad, Provincia, Region, TipoAtractivo, idPadre, Descripcion, Superficie, Extencion, Altitud, Fundacion, Coordenadas, Nombre, idCiudades) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Ciudad'], "text"),
                       GetSQLValueString($_POST['Provincia'], "text"),
                       GetSQLValueString($_POST['Region'], "text"),
                       GetSQLValueString($_POST['TipoAtractivo'], "text"),
                       GetSQLValueString($_POST['idPadre'], "text"),
                       GetSQLValueString($_POST['Descripcion'], "text"),
                       GetSQLValueString($_POST['Superficie'], "text"),
                       GetSQLValueString($_POST['Extencion'], "text"),
                       GetSQLValueString($_POST['Altitud'], "text"),
                       GetSQLValueString($_POST['Fundacion'], "text"),
                       GetSQLValueString($_POST['Coordenadas'], "text"),
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['idCiudades'], "int"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

  $insertGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE HTML>
<html>
<head>
		<title>Administrador</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		
	</head>
<body>

		<!-- Header -->
		<div id="header">
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">ADMINISTRADOR</a></h1>
					<span>De Sitios</span>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="admin.php">Administrador</a></li>
						<li><a href="admin.php">Sitios</a></li>
						<li><a href="admin.php">Acerca de</a></li>
						<li><a href="index.html">Cerrar Sesión</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 

					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Top Turismo Ecuador</h2>
							</header>
							<ul class="style">
								<li>
									<p class="posted">Islas Galápagos</p>
<a href="http://es.wikipedia.org/wiki/Islas_Gal%C3%A1pagos"><img src="images/galapagos.jpg" alt="" /></a>
									<p class="text" align="justify">Las islas Galápagos constituyen un archipiélago del océano Pacífico ubicado a 972 km de la costa de Ecuador.</p>
								</li>
								<li>
									<p class="posted">Malecón 2000</p>
<a href="http://es.wikipedia.org/wiki/Malec%C3%B3n_2000"><img src="images/malecon.jpg" alt="" /></a>
									<p class="text" align="justify">Malecón 2000, ubicado en la ciudad de Guayaquil, junto al río Guayas, es un proyecto de regeneración urbana del antiguo Malecón Simón Bolívar.</p>
								</li>
								<li>
									<p class="posted">Parque Nacional Cotopaxi</p>
<a href="http://es.wikipedia.org/wiki/Parque_nacional_Cotopaxi"><img src="images/cotopaxi.jpg" alt="" /></a>	
									<p class="text" align="justify">El Parque Nacional Cotopaxi es un área protegida de Ecuadorque incluye en su espacio al nevado Volcán Cotopaxi.</p>
								</li>
                                <li>
									<p class="posted">Baños</p>
<a href="http://es.wikipedia.org/wiki/Ba%C3%B1os_%28Ecuador%29"><img src="images/baños.jpg" alt="" /></a>
									<p class="text" align="justify">Baños pertenece a Tungurahua. Es un centro turístico de importancia del país, se encuentra a unos 45 minutos de Ambato.</p>
								</li>
							</ul>
						</section>
					</div>
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
					  <section>
						<header>
								<h2>Atractivos Turisticos</h2>
								<span class="byline">Del Ecuador</span>
                          <h3 align="center">Mindo</h3>
						  </header>
							<a href="#" class="image full"><img src="images/mindo.jpg" alt="" /></a>
                            <div align="center">
                            <form method="get" action="adminMostrar.php">
                            <input type="submit" value="Mostrar Registros" />
                            </form>
                            </div>

                                                    <p>&nbsp;</p>
                        <h2>Insertar un Lugar Turístico</h2>
                        <p>&nbsp;</p>
                        <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
                          <table align="center">
                            <tr valign="baseline">
                              <td nowrap align="right">Ciudad:</td>
                              <td><input type="text" name="Ciudad" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Provincia:</td>
                              <td><input type="text" name="Provincia" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Region:</td>
                              <td><input type="text" name="Region" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">TipoAtractivo:</td>
                              <td><input type="text" name="TipoAtractivo" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">IdPadre:</td>
                              <td><input type="text" name="idPadre" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Descripcion:</td>
                              <td><input type="text" name="Descripcion" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Superficie:</td>
                              <td><input type="text" name="Superficie" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Extencion:</td>
                              <td><input type="text" name="Extencion" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Altitud:</td>
                              <td><input type="text" name="Altitud" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Fundacion:</td>
                              <td><input type="text" name="Fundacion" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Coordenadas:</td>
                              <td><input type="text" name="Coordenadas" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Nombre:</td>
                              <td><input type="text" name="Nombre" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">IdCiudades:</td>
                              <td><input type="text" name="idCiudades" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">&nbsp;</td>
                              <td><input type="submit" value="Insertar registro"></td>
                            </tr>
                          </table>
                          <input type="hidden" name="MM_insert" value="form1">
                        </form>
                        <p>&nbsp;</p>
<h2>Insertar Transporte</h2>
						<p>&nbsp;</p>
                        <form method="post" name="form2" action="<?php echo $editFormAction; ?>">
                          <table align="center">
                            <tr valign="baseline">
                              <td nowrap align="right">TipoTransporte:</td>
                              <td><input type="text" name="TipoTransporte" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">IdPadre:</td>
                              <td><input type="text" name="idPadre" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Descripcion:</td>
                              <td><input type="text" name="Descripcion" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">&nbsp;</td>
                              <td><input type="submit" value="Insertar registro"></td>
                            </tr>
                          </table>
                          <input type="hidden" name="MM_insert" value="form2">
                        </form>
                        <p>&nbsp;</p>
                        <h2>Insertar Ciudad</h2>
						<p>&nbsp;</p>
                        <form method="post" name="form3" action="<?php echo $editFormAction; ?>">
                          <table align="center">
                            <tr valign="baseline">
                              <td nowrap align="right">Nombre:</td>
                              <td><input type="text" name="Nombre" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Provincia:</td>
                              <td><input type="text" name="Provincia" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Extencion:</td>
                              <td><input type="text" name="Extencion" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Poblacion:</td>
                              <td><input type="text" name="Poblacion" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">&nbsp;</td>
                              <td><input type="submit" value="Insertar registro"></td>
                            </tr>
                          </table>
                          <input type="hidden" name="MM_insert" value="form3">
                        </form>
                        <p>&nbsp;</p>
						<h2>Insertar Hotel</h2>
						<p>&nbsp;</p>
                        <form method="post" name="form4" action="<?php echo $editFormAction; ?>">
                          <table align="center">
                            <tr valign="baseline">
                              <td nowrap align="right">Nombre:</td>
                              <td><input type="text" name="Nombre" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">IdCiudad:</td>
                              <td><input type="text" name="idCiudad" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Precio:</td>
                              <td><input type="text" name="Precio" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Fundacion:</td>
                              <td><input type="text" name="Fundacion" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">Categoria:</td>
                              <td><input type="text" name="Categoria" value="" size="32"></td>
                            </tr>
                            <tr valign="baseline">
                              <td nowrap align="right">&nbsp;</td>
                              <td><input type="submit" value="Insertar registro"></td>
                            </tr>
                          </table>
                          <input type="hidden" name="MM_insert" value="form4">
                        </form>
                        <p>&nbsp;</p>
                      </section>
					</div>
					
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div id="featured">
	        <h2 align="center"><strong>ATRACCIONES TURÍSTICAS ECUATORIANAS</strong></h2>
			<div class="container">
            <p></p>
				<div class="row">
					<div class="4u">
						<h2 align="center">Quilotoa</h2>
						<a href="http://www.ecuador-turistico.com/2014/01/10-atracciones-turisticas-de-ecuador.html" class="image full"><img src="images/quilotoa.jpg" alt="" /></a>
						<p align="justify">Este hermoso lago de cráter está en lo alto de los Andes, se formó cuando un volcán explotó su parte superior, hace más de 800 años, se encuentra a más de 250 metros de profundidad. El color se mueve entre la mayoría de los azules y verdes llamativos como el sol cambia los ángulos a lo largo de su superficie.
</p>
						<p><a href="http://es.wikipedia.org/wiki/Quilotoa" class="button">Más Información</a></p>
					</div>
					<div class="4u">
						<h2 align="center">Parque Nacional Cajas</h2>
						<a href="http://www.ecuador-turistico.com/2014/01/10-atracciones-turisticas-de-ecuador.html" class="image full"><img src="images/cajas.jpg" alt="" /></a>
						<p align="justify">El Parque Nacional Cajas es un lugar increíblemente hermoso que cuenta con más de 250 lagos para que los visitantes lo puedan explorar. También es el hogar de muchas variedades de plantas y animales, incluyendo una de las colecciones de mayor biodiversidad de plantas de especias en el planeta.</p>
						<p><a href="http://es.wikipedia.org/wiki/Parque_nacional_El_Cajas" class="button">Más Información</a></p>
					</div>
					<div class="4u">
						<h2 align="center">Lagunas de Mojanda</h2>
						<a href="http://www.ecuador-turistico.com/2014/01/10-atracciones-turisticas-de-ecuador.html" class="image full"><img src="images/mojanda.jpg" alt="" /></a>
						<p align="justify">Estos tres grandes lagos volcánicos fueron creados por el volcán Mojanda. Este volcán ha estado inactivo durante más de 200.000 años, pero sus hermosos lagos son un testimonio del poder que alguna vez tuvo. La zona es muy desolada y ofrece al visitante una belleza natural para explorar.</p>
						<p><a href="http://en.wikipedia.org/wiki/Mojanda" class="button">Más Información</a></p>
					</div>
				</div>
			</div>
		</div>


		<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					
                    <div class="3u">
						<section>
							<h2>Costa</h2>
							<ul class="default">
								<li><a href="http://es.wikipedia.org/wiki/Salinas_%28Ecuador%29">Salinas</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Archipi%C3%A9lago_de_Jambel%C3%AD">Archipiélago de Jambelí</a></li>
								<li><a href="http://www.ecostravel.com/ecuador/hoteles/esmeraldas/playa-tonsupa.php">Playa de Tonsupa</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Ruta_del_Sol">La Ruta del Sol</a></li>
								<li><a href="http://es.wikipedia.org/wiki/General_Villamil">General Villamil</a></li>
							</ul>
						</section>
					</div>
					
                    <div class="3u">
						<section>
							<h2>Sierra</h2>
							<ul class="default">
								<li><a href="http://es.wikipedia.org/wiki/Cuicocha">Laguna de Cuicocha</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Ingapirca">Complejo de Ingapirca</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Volc%C3%A1n_Cotopaxi">Volcan Cotopaxi</a></li>
								<li><a href="http://www.banios.com/">Baños</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Volc%C3%A1n_Chimborazo">Volcán Chimborazon</a></li>
							</ul>
						</section>
					</div>
                    
                    <div class="3u">
						<section>
							<h2>Oriente</h2>
							<ul class="default">
								<li><a href="http://es.wikipedia.org/wiki/Parque_nacional_Podocarpus">Parque Nacional Podocarpus</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Reserva_de_producci%C3%B3n_faun%C3%ADstica_Cuyabeno">Reserva de Cuyabeno</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Cueva_de_los_Tayos">La cueva de los Tayos</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Parque_nacional_Yasun%C3%AD">Parque Nacional Yasuní</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Puyo">Puyo</a></li>
							</ul>
						</section>
					</div>
					
                    <div class="3u">
						<section>
							<h2>Amazonía</h2>
							<ul class="default">
								<li><a href="http://es.wikipedia.org/wiki/Parque_nacional_Gal%C3%A1pagos">Parque Nacional Galápagos</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Parque_nacional_Gal%C3%A1pagos">Isla Floreana</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Isla_Fernandina">Isla Fernandina</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Bah%C3%ADa_Tortuga">Bahía Tortuga</a></li>
								<li><a href="http://es.wikipedia.org/wiki/Canal_de_Itabaca">Canal de  Itabaca</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<h5>Derechos reservados del Autor</h5>
			</div>
		</div>
		
	</body>
</html>