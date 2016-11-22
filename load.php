<?php
$str="<!DOCTYPE HTML>
<!-- Visualize by TEMPLATED	templated.co @templatedco Released for free under the Creative Commons Attribution 3.0 license (templated.co/license) -->
<html>
	<head>
		<title>RibaFS - Conhecimentos Básicos</title>
		<meta charset=\"utf-8\" />
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

		<link rel=\"stylesheet\" href=\"/assets/css/main.css\" />
		<link rel=\"stylesheet\" href=\"/assets/css/menu.css\" />				
	</head>
<body>
<br>
<script src=\"/assets/js/jquery.min.js\"></script>
<script>
   $(function(){
       $('#cabecalho').load(\"./cabecalho_basicos.html\");
   });
</script>
<div id=\"cabecalho\"></div>";

$dir = dir('./');

$cont=1;
while($file = $dir -> read()){
	if($file==='.'||$file==='..' || $file==='index.php'){continue;}

		$fp = fopen($file, "r");
		$texto = fread($fp, filesize($file));
		fclose($fp);

		$cont ++;
		$texto = $str.'<br>'.$texto;

		if($cont===2){		
			$fp = fopen($file, "w");
			fwrite($fp, $texto);
			fclose($fp);
			continue;
		}		
	}
}
$file -> close();


