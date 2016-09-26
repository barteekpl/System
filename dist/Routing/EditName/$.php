<?php

$wynik = mysql_query("SELECT * FROM projekt where id='$_GET[value]' "); 	

if(mysql_num_rows($wynik) > 0) { 
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik)) { 

		$name =$r['name'];
}}
		?>
		
		
<form role="form" method="post" action="/Project/<?php echo $_SESSION['id']; ?>">
  <div class="form-group">
    <label for="text">Stary Temat</label>
    <input type="text" class="form-control" name="" id="email" value="<?php echo $name;?>" disabled>
	 <input type="hidden" class="form-control" name="UptadeNameID" id="email" value="<?php echo $_GET[value];?>">
  </div>
  <div class="form-group">
    <label for="pwd">Nowy Temat</label>
    <input type="text" name="UptadeName" value="<?php echo $name;?>" class="form-control" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-default">Change</button>
</form>