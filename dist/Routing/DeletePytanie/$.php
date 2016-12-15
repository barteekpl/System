<?php

$wynik = mysql_query("SELECT * FROM Pytanie where id='$_GET[value]' ");

if(mysql_num_rows($wynik) > 0) {
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik)) {

		$Pytanie =$r['Pytanie'];
    $idprojekt =$r['idprojekt'];
}}
		?>

		<h2 style="
    text-align: center;
"> Czy napewno usunąć Pytanie : <?php echo $Pytanie;?> </h2>

		<div style="
    text-align: center;
">
<form role="form" method="post" action="/Pytania/<?php echo $idprojekt; ?>">
  <input type="hidden" class="form-control" name="DeleteNameID" id="DeleteNameID" value="<?php echo $_GET[value];?>">
  <button type="submit" class="btn btn-default">Tak	</button>
   <a href="/Pytania/<?php echo $idprojekt; ?>" class="btn btn-info" role="button">Nie</a>
</form>
<div>
