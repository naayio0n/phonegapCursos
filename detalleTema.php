<?php
	include ('conex.php');
	$myIdT = $_GET['codT'];
	$sql = mysql_query("SELECT * FROM cursos WHERE id = '$myIdT'")
?>
<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Aplic. Web de jQuery Mobile</title>
<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>Cursos Asociados <br/>al Tema</h1>
	</div>
	<div data-role="content" align="center">	
    <?php
		while ($fila = mysql_fetch_array($sql))
		{
	?>
		------------------------------------------------------------- <br/>
        <h2>Curso: <?php echo $fila ['nombre_curso']?></h2>
        <h4>Descripcion del Curso</h4>
        <?php echo $fila ['ds_curso']?>
        </br></br>
        Creditos <?php echo $fila ['valor']?>
        </br>
        -------------------------------------------------------------		
     <?php
		}
	 ?>   
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>

</body>
</html>
