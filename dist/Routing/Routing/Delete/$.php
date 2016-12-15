<?php

$wynik = mysql_query("SELECT * FROM projekt where id='$_GET[value]' ");

if(mysql_num_rows($wynik) > 0) {
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik)) {

		$name =$r['name'];
}}
		?>

		<h2 style="
    text-align: center;
"> Czy napewno usunąć projekt : <?php echo $name;?> </h2>

		<div style="
    text-align: center;
">
<form role="form" method="post" action="/Project/<?php echo $_SESSION['id']; ?>">
  <input  class="form-control" name="DeleteNameID" id="DeleteNameID" value="<?php echo $_GET[value];?>">
  <button type="submit" class="btn btn-default">Tak	</button>
   <a href="/Project/<?php echo $_SESSION['id']; ?>" class="btn btn-info" role="button">Nie</a>
</form>
<div>
