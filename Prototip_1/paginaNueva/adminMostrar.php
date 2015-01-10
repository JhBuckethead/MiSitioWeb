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

$currentPage = $_SERVER["PHP_SELF"];

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

$maxRows_atractivosTuristicos = 5;
$pageNum_atractivosTuristicos = 0;
if (isset($_GET['pageNum_atractivosTuristicos'])) {
  $pageNum_atractivosTuristicos = $_GET['pageNum_atractivosTuristicos'];
}
$startRow_atractivosTuristicos = $pageNum_atractivosTuristicos * $maxRows_atractivosTuristicos;

mysql_select_db($database_conexion, $conexion);
$query_atractivosTuristicos = "SELECT * FROM atractivosturisticos";
$query_limit_atractivosTuristicos = sprintf("%s LIMIT %d, %d", $query_atractivosTuristicos, $startRow_atractivosTuristicos, $maxRows_atractivosTuristicos);
$atractivosTuristicos = mysql_query($query_limit_atractivosTuristicos, $conexion) or die(mysql_error());
$row_atractivosTuristicos = mysql_fetch_assoc($atractivosTuristicos);

if (isset($_GET['totalRows_atractivosTuristicos'])) {
  $totalRows_atractivosTuristicos = $_GET['totalRows_atractivosTuristicos'];
} else {
  $all_atractivosTuristicos = mysql_query($query_atractivosTuristicos);
  $totalRows_atractivosTuristicos = mysql_num_rows($all_atractivosTuristicos);
}
$totalPages_atractivosTuristicos = ceil($totalRows_atractivosTuristicos/$maxRows_atractivosTuristicos)-1;

$maxRows_transporte = 5;
$pageNum_transporte = 0;
if (isset($_GET['pageNum_transporte'])) {
  $pageNum_transporte = $_GET['pageNum_transporte'];
}
$startRow_transporte = $pageNum_transporte * $maxRows_transporte;

mysql_select_db($database_conexion, $conexion);
$query_transporte = "SELECT * FROM transportes";
$query_limit_transporte = sprintf("%s LIMIT %d, %d", $query_transporte, $startRow_transporte, $maxRows_transporte);
$transporte = mysql_query($query_limit_transporte, $conexion) or die(mysql_error());
$row_transporte = mysql_fetch_assoc($transporte);

if (isset($_GET['totalRows_transporte'])) {
  $totalRows_transporte = $_GET['totalRows_transporte'];
} else {
  $all_transporte = mysql_query($query_transporte);
  $totalRows_transporte = mysql_num_rows($all_transporte);
}
$totalPages_transporte = ceil($totalRows_transporte/$maxRows_transporte)-1;

$maxRows_ciudades = 5;
$pageNum_ciudades = 0;
if (isset($_GET['pageNum_ciudades'])) {
  $pageNum_ciudades = $_GET['pageNum_ciudades'];
}
$startRow_ciudades = $pageNum_ciudades * $maxRows_ciudades;

mysql_select_db($database_conexion, $conexion);
$query_ciudades = "SELECT * FROM ciudades";
$query_limit_ciudades = sprintf("%s LIMIT %d, %d", $query_ciudades, $startRow_ciudades, $maxRows_ciudades);
$ciudades = mysql_query($query_limit_ciudades, $conexion) or die(mysql_error());
$row_ciudades = mysql_fetch_assoc($ciudades);

if (isset($_GET['totalRows_ciudades'])) {
  $totalRows_ciudades = $_GET['totalRows_ciudades'];
} else {
  $all_ciudades = mysql_query($query_ciudades);
  $totalRows_ciudades = mysql_num_rows($all_ciudades);
}
$totalPages_ciudades = ceil($totalRows_ciudades/$maxRows_ciudades)-1;

$queryString_atractivosTuristicos = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_atractivosTuristicos") == false && 
        stristr($param, "totalRows_atractivosTuristicos") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_atractivosTuristicos = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_atractivosTuristicos = sprintf("&totalRows_atractivosTuristicos=%d%s", $totalRows_atractivosTuristicos, $queryString_atractivosTuristicos);
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
						<li><a href="adminMostrar.php">Sitios</a></li>
						<li><a href="adminMostrar.php">Acerca de</a></li>
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
                            <form method="get" action="admin.php">
                            <input type="submit" value="Insertar Datos" />
                            </form>
                            </div>               
                        
                      </section>
					</div>
					
		    </div>
              <h2>Atractivos Turísticos</h2>
              <p>&nbsp;</p>
            <table border="5">
              <tr>
                <td>idAtractivosTuristicos</td>
                <td>Ciudad</td>
                <td>Provincia</td>
                <td>Region</td>
                <td>TipoAtractivo</td>
                <td>idPadre</td>
                <td>Descripcion</td>
                <td>Superficie</td>
                <td>Extencion</td>
                <td>Altitud</td>
                <td>Fundacion</td>
                <td>Coordenadas</td>
                <td>Nombre</td>
                <td>idCiudades</td>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_atractivosTuristicos['idAtractivosTuristicos']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Ciudad']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Provincia']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Region']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['TipoAtractivo']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['idPadre']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Descripcion']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Superficie']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Extencion']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Altitud']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Fundacion']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Coordenadas']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['Nombre']; ?></td>
                  <td><?php echo $row_atractivosTuristicos['idCiudades']; ?></td>
                </tr>
                <?php } while ($row_atractivosTuristicos = mysql_fetch_assoc($atractivosTuristicos)); ?>
            </table>
            
            <table width="609" border="1">
  <tr>
    <td width="53"><a href="<?php printf("%s?pageNum_atractivosTuristicos=%d%s", $currentPage, max(0, $pageNum_atractivosTuristicos - 1), $queryString_atractivosTuristicos); ?>">Anterior</a></td>
    <td width="251">&nbsp;
Registros <?php echo ($startRow_atractivosTuristicos + 1) ?> a <?php echo min($startRow_atractivosTuristicos + $maxRows_atractivosTuristicos, $totalRows_atractivosTuristicos) ?> de <?php echo $totalRows_atractivosTuristicos ?></td>
    <td width="728"><a href="<?php printf("%s?pageNum_atractivosTuristicos=%d%s", $currentPage, min($totalPages_atractivosTuristicos, $pageNum_atractivosTuristicos + 1), $queryString_atractivosTuristicos); ?>">Siguiente</a></td>
  </tr>
</table>
            <p>&nbsp;</p>
<h2>Tranporte</h2>
            <p>&nbsp;</p>
            <table border="1">
              <tr>
                <td>idTrasnporte</td>
                <td>TipoTransporte</td>
                <td>idPadre</td>
                <td>Descripcion</td>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_transporte['idTrasnporte']; ?></td>
                  <td><?php echo $row_transporte['TipoTransporte']; ?></td>
                  <td><?php echo $row_transporte['idPadre']; ?></td>
                  <td><?php echo $row_transporte['Descripcion']; ?></td>
                </tr>
                <?php } while ($row_transporte = mysql_fetch_assoc($transporte)); ?>
            </table>
            
            <table width="360" border="1">
  <tr>
    <td width="42"><a href="<?php printf("%s?pageNum_atractivosTuristicos=%d%s", $currentPage, max(0, $pageNum_atractivosTuristicos - 1), $queryString_atractivosTuristicos); ?>">Anterior</a></td>
    <td width="203">&nbsp;
Registros <?php echo ($startRow_atractivosTuristicos + 1) ?> a <?php echo min($startRow_atractivosTuristicos + $maxRows_atractivosTuristicos, $totalRows_atractivosTuristicos) ?> de <?php echo $totalRows_atractivosTuristicos ?></td>
    <td width="208"><a href="<?php printf("%s?pageNum_atractivosTuristicos=%d%s", $currentPage, min($totalPages_atractivosTuristicos, $pageNum_atractivosTuristicos + 1), $queryString_atractivosTuristicos); ?>">Siguiente</a></td>
  </tr>
</table>
                        <p>&nbsp;</p>
            <h2>Ciudades</h2>
            <p>&nbsp;</p>
            
            
            <table border="1">
              <tr>
                <td>idCiudad</td>
                <td>Nombre</td>
                <td>Provincia</td>
                <td>Extencion</td>
                <td>Poblacion</td>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_ciudades['idCiudad']; ?></td>
                  <td><?php echo $row_ciudades['Nombre']; ?></td>
                  <td><?php echo $row_ciudades['Provincia']; ?></td>
                  <td><?php echo $row_ciudades['Extencion']; ?></td>
                  <td><?php echo $row_ciudades['Poblacion']; ?></td>
                </tr>
                <?php } while ($row_ciudades = mysql_fetch_assoc($ciudades)); ?>
            </table>
            
            
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
					  <blockquote>
						  <h2 align="center">Lagunas de Mojanda</h2>
						  <p><a href="http://www.ecuador-turistico.com/2014/01/10-atracciones-turisticas-de-ecuador.html" class="image full"><img src="images/mojanda.jpg" alt="" /></a>
					    </p>
						  <p align="justify">Estos tres grandes lagos volcánicos fueron creados por el volcán Mojanda. Este volcán ha estado inactivo durante más de 200.000 años, pero sus hermosos lagos son un testimonio del poder que alguna vez tuvo. La zona es muy desolada y ofrece al visitante una belleza natural para explorar.</p>
				    </blockquote>
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
<?php
mysql_free_result($atractivosTuristicos);

mysql_free_result($transporte);

mysql_free_result($ciudades);
?>
