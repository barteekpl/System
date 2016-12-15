<?php

if ($_POST['DeleteNameID']  )
{
$DeleteNameID=$_POST['DeleteNameID'];
$wynik = mysql_query("DELETE FROM `Pytanie` WHERE id='$DeleteNameID'");
}

if ($_POST['PytanieID'] and $_POST['Pytanie'])

{

mysql_query("SET NAMES 'utf8'");
$correctAnswer=$_POST['correctAnswer'];
$nazwa=$_POST['Pytanie'];
$idnazwa=$_POST['PytanieID'];
$userid=$_SESSION["id"];
$an1=$_POST["an1"];
$an2=$_POST["an2"];
$an3=$_POST["an3"];
$an4=$_POST["an4"];

$wynikp = mysql_query("INSERT INTO  `bleizer_system`.`Pytanie` (

`Pytanie` ,
`Odpowiedz` ,
`Trudnosc` ,
`idprojekt`,
`userid`,
`an1`,
`an2`,
`an3`,
`an4`
)
VALUES (
  '$nazwa',  '$correctAnswer',  '0',  '$idnazwa',  '$userid','$an1','$an2','$an3','$an4'
);
;");
}
$pytania = mysql_query("SELECT * FROM Pytanie where idprojekt= $_GET[value]");
echo "Liczba Pytań  : ";
echo $pytaniaa=mysql_num_rows($pytania);
echo '<table class="table table-striped table-bordered table-hover>"';

    echo '<tr>';
   echo '<th>Id</th>';
   echo '<th>Nazwa</th>';
    echo '<th>#</th>';
  echo '</tr>';
if(mysql_num_rows($pytania) > 0) {
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($pytania)) {
	echo '<tr>';
	echo '<td>';
		echo $r['id'];
echo '</td>';
	echo '<td>';
		echo $r['Pytanie'];
echo '</td>';
echo '<td>';
	echo '<a href="/EditPytanie/'.$r['id'].'" ><button type="button" class="btn btn-info">Edytuj Pytanie</button> </a>';
  echo '<a href="/DeletePytanie/'.$r['id'].'" ><button type="button" class="btn btn-warning">Delete Pytanie</button> </a>';
echo '</td>';
echo '</tr>';

}}
echo '</table>';

$liczba2=mysql_query("SELECT type as type FROM  `projekt`  where id= $_GET[value] ;");

if(mysql_num_rows($liczba2) > 0) {
  while($r = mysql_fetch_assoc($liczba2)) {
  $type= $r['type'];
}
}
?>

<div class="container"><br>
<center>
  <?php
if($type ==1)
{?>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pytanie Otwarte</button>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Pytanie Wyboru</button>
<?php
}?>

<?php
if($type ==2)
{?>
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Pytanie Test</button>
<?php
}?>

<?php
if($type ==3)
{?>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pytanie Otwarte</button><?php
}?>


<a href="http://system.ebond.pl/user/Dashboard" class="btn btn-info" role="button">Back</a>
</center>
  <br><br>
 </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pytanie Otwarte</h4>
        </div>
        <div class="modal-body">


         <form role="form" method="post" action="/Pytania/<?php echo $_GET[value]; ?>">
  <div class="form-group">
    <label for="text">Pytanie:</label>

 <textarea class="form-control" rows="5" name="Pytanie"></textarea>
 <input type="hidden" class="form-control" name="PytanieID"  value="<?php echo $_GET[value];?>">
  </div>


  <button type="submit" class="btn btn-default">Dodaj</button>
</form>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal Pytanie Wyboru-->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pytanie Wyboru</h4>
        </div>
        <div class="modal-body">


         <form role="form" method="post" action="/Pytania/<?php echo $_GET[value]; ?>">
  <div class="form-group">
    <label for="text">Pytanie:</label>

 <textarea class="form-control" rows="3" name="Pytanie"></textarea>
 <input type="hidden" class="form-control" name="PytanieID"  value="<?php echo $_GET[value];?>">
  </div>


    Odpowiedz : <input type="text" class="form-control"  name="an1"><br>
    Odpowiedz <input type="text" class="form-control"  name="an2"><br>
        Odpowiedz: <input type="text" class="form-control"  name="an3"><br>
          Odpowiedz: <input type="text" class="form-control"  name="an4"><br>



<br><br><br>

  <button type="submit" class="btn btn-default">Dodaj</button>
</form>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal Pytanie Test-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pytanie Wyboru</h4>
        </div>
        <div class="modal-body">


         <form role="form" method="post" action="/Pytania/<?php echo $_GET[value]; ?>">
  <div class="form-group">
    <label for="text">Pytanie:</label>

 <textarea class="form-control" rows="3" name="Pytanie"></textarea>
 <input type="hidden" class="form-control" name="PytanieID"  value="<?php echo $_GET[value];?>">
  </div>


    Poprawna Odpowiedz : <input type="text" class="form-control"  name="correctAnswer" required><br>
    Odpowiedz <input type="text" class="form-control"  name="an2" required><br>
    Odpowiedz: <input type="text" class="form-control"  name="an3"><br>
    Odpowiedz: <input type="text" class="form-control"  name="an4"><br>



<br><br><br>

  <button type="submit" class="btn btn-default">Dodaj</button>
</form>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
