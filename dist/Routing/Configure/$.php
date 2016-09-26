     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Turn checkboxes and radio buttons into toggle switches.">
    <meta name="author" content="Mattia Larentis, Emanuele Marchi and Peter Stein">

    <link href="/docs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/docs/css/highlight.css" rel="stylesheet">
   
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap2-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap2-toggle.min.js"></script>
	





			
			<?php
mysql_query("SET NAMES 'utf8'");
$pytania = mysql_query("SELECT * FROM Pytanie where idprojekt= $_GET[value]"); 


echo "a";