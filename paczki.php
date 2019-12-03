	<html>
	<head>
	<head>
	<body>
	<?
	
	
	$cena1="2.14";
	
	$cena2="2.50";
	
	$B=$_GET['B'];
	$P=$_GET['P'];
	
	$BC=$B*$cena1;
	$PC=$P*$cena2;
	$PC+$BC=$suma;
	echo $PC ,$BC;
	echo "suma :"$suma; 
	
	
	?>
	</body>
	</html>