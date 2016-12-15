<?php

$wynik = mysql_query("SELECT * FROM Pytanie where id='$_GET[value]' ");

if(mysql_num_rows($wynik) > 0) {
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik)) {

		$name =$r['Pytanie'];
		$idprojekt=$r['idprojekt'];
    $an1=$r['an1'];
    $an2=$r['an2'];
    $an3=$r['an3'];
    $an4=$r['an4'];
    $Odpowiedz=$r['Odpowiedz'];
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
  <br><br><br><br><br><br>
<?php
  if($Odpowiedz)
  {
   ?>
  <div class="form-group">
   <label for="text">Stara poprawna odpowiedź </label>
   <input type="text" class="form-control" name="" id="email" value="<?php echo $Odpowiedz;?>" disabled>
  <input type="hidden" class="form-control" name="UptadePytanieID" id="email" value="<?php echo $_GET[value];?>">
  </div>
  <div class="form-group">
   <label for="pwd">Nowa poprawna odpowiedź  </label>
   <input type="text" name="correctodp" value="<?php echo $Odpowiedz;?>" class="form-control" id="pwd">
  </div>
  <?php
  }
   ?>

<?php
if($an1)
{
 ?>
<div class="form-group">
 <label for="text">Stara odpowiedź 1</label>
 <input type="text" class="form-control" name="" id="email" value="<?php echo $an1;?>" disabled>
<input type="hidden" class="form-control" name="UptadePytanieID" id="email" value="<?php echo $_GET[value];?>">
</div>
<div class="form-group">
 <label for="pwd">Nowa odpowiedź 1 </label>
 <input type="text" name="an1" value="<?php echo $an1;?>" class="form-control" id="pwd">
</div>
<?php
}
 ?>
 <?php
 if($an2)
 {
  ?>
 <div class="form-group">
  <label for="text">Stara odpowiedź 2</label>
  <input type="text" class="form-control" name="" id="email" value="<?php echo $an2;?>" disabled>
 <input type="hidden" class="form-control" name="UptadePytanieID" id="email" value="<?php echo $_GET[value];?>">
 </div>
 <div class="form-group">
  <label for="pwd">Nowa odpowiedź 2 </label>
  <input type="text" name="an2" value="<?php echo $an2;?>" class="form-control" id="pwd">
 </div>
 <?php
 }
  ?>
  <?php
  if($an3)
  {
   ?>
  <div class="form-group">
   <label for="text">Stara odpowiedź 3</label>
   <input type="text" class="form-control" name="" id="email" value="<?php echo $an3;?>" disabled>
  <input type="hidden" class="form-control" name="UptadePytanieID" id="email" value="<?php echo $_GET[value];?>">
  </div>
  <div class="form-group">
   <label for="pwd">Nowa odpowiedź 3 </label>
   <input type="text" name="an3" value="<?php echo $an3;?>" class="form-control" id="pwd">
  </div>
  <?php
  }
   ?>
   <?php
   if($an4)
   {
    ?>
   <div class="form-group">
    <label for="text">Stara odpowiedź 4</label>
    <input type="text" class="form-control" name="" id="email" value="<?php echo $an4;?>" disabled>
   <input type="hidden" class="form-control" name="UptadePytanieID" id="email" value="<?php echo $_GET[value];?>">
   </div>
   <div class="form-group">
    <label for="pwd">Nowa odpowiedź 4 </label>
    <input type="text" name="an4" value="<?php echo $an4;?>" class="form-control" id="pwd">
   </div>
   <?php
   }
    ?>
  <button type="submit" class="btn btn-default">Changes</button>
</form>
