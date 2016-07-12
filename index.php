<?php
	include('conex.php');
	$query = mysql_query("SELECT * FROM temas ORDER BY nombre_tema");
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

<div data-role="page" id="page" data-theme="b">
	<div data-role="header">
		<h1>Phonegap <br/>Taller computo movil</h1>
	</div>
	<div data-role="content" >	
		<ul data-role="listview">
        <?php
			while ($fila = mysql_fetch_array ($query) )
			{
		?>
			<li><a href="detalleTema.php?codT=<?php echo $fila['id']; ?>"><?php echo $fila['nombre_tema']?></a></li>
            <?php } ?> 
		</ul>		
	</div>
	<div data-role="footer">
		<h4>ITCH</h4>
	</div>
</div>

<div data-role="page" id="page2">
	<div data-role="header">
		<h1>Página dos</h1>
	</div>
	<div data-role="content">	
		Contenido		
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>


</body>
</html>
