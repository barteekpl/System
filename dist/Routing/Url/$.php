
<?php


$pid=$_GET[value];
$wynik = mysql_query("SELECT * FROM projekt where id='$_GET[value]' "); 	

if(mysql_num_rows($wynik) > 0) { 
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik)) { 

		$name =$r['name'];
}}
		?>
		
		<h2 style="
    text-align: center;
"> Ankieta : <?php echo $name;?> </h2>
		
		<div style="
    text-align: center;
"> 

<div>
<div class="container">
  <div class="row">
<?php

mysql_query("SET NAMES 'utf8'");
$pytania = mysql_query("SELECT * FROM Pytanie where idprojekt= $_GET[value]"); 
echo "<br>";
echo "Liczba Pytań  : ";

echo $pytaniaa=mysql_num_rows($pytania);

echo "<br>";echo "<br>";echo "<br>";
 echo'<form role="form" method="post" action="/LP/'.$_GET[value].'">';
 
if(mysql_num_rows($pytania) > 0) { 
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($pytania)) { 
	
		
		echo $r['Pytanie'];
echo "<br>";echo "<br>";
	echo ' <textarea class="form-control" rows="5" name="pytanie['.$r["id"].']" placeholder="Podaj swoją odpowiedź" id="comment" required></textarea>';
echo "<br>";echo "<br>";



}}
$ip= $_SERVER['REMOTE_ADDR'];
$register_date=date("m.d.Y H:i:s");
?>    



<input type="text" value="<?php echo $pid?>" name="pid" hidden >
<input type="text" value="<?php echo $ip?>" name="ip" hidden >
<input type="text" value="<?php echo $register_date?>" name="date" hidden>
  <button type="submit" class="btn btn-default">Submit</button>
  
</form>