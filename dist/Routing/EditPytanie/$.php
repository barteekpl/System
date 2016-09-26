<?php

$wynik = mysql_query("SELECT * FROM Pytanie where id='$_GET[value]' "); 	

if(mysql_num_rows($wynik) > 0) { 
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik)) { 

		$name =$r['Pytanie'];
		$idprojekt=$r['idprojekt'];
}}
		?>
		
		
<form role="form" method="post" action="/Pytania/<?php echo $idprojekt; ?>">
  <div class="form-group">
    <label for="text">Stare Pytanie</label>
    <input type="text" class="form-control" name="" id="email" value="<?php echo $name;?>" disabled>
	 <input type="hidden" class="form-control" name="UptadePytanieID" id="email" value="<?php echo $_GET[value];?>">
  </div>
  <div class="form-group">
    <label for="pwd">Nowe Pytanie</label>
    <input type="text" name="UptadePytanie" value="<?php echo $name;?>" class="form-control" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-default">Changes</button>
</form>