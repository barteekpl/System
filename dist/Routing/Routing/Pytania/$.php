<?php

if ($_POST['PytanieID'] and $_POST['Pytanie'])

{

mysql_query("SET NAMES 'utf8'");

$nazwa=$_POST['Pytanie'];
$idnazwa=$_POST['PytanieID'];
$userid=$_SESSION["id"];
$wynikp = mysql_query("INSERT INTO  `bleizer_system`.`Pytanie` (

`Pytanie` ,
`Odpowiedz` ,
`Trudnosc` ,
`idprojekt`,
`userid`
)
VALUES (
  '$nazwa',  '',  '0',  '$idnazwa',  '$userid'
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
echo '</td>';
echo '</tr>';

}}
echo '</table>';
?>

<div class="container"><br>
<center>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pytanie Otwarte</button>
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Pytanie Wyboru</button>
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
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">


         <form role="form" method="post" action="/Pytania/<?php echo $_GET[value]; ?>">
  <div class="form-group">
    <label for="text">Pytanie Otwarte</label>

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
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">


         <form role="form" method="post" action="/Pytania/<?php echo $_GET[value]; ?>">
  <div class="form-group">
    <label for="text">Pytanie Wyboru</label>

 <textarea class="form-control" rows="3" name="Pytanie"></textarea>
 <input type="hidden" class="form-control" name="PytanieID"  value="<?php echo $_GET[value];?>">
  </div>

  Liczba Odpowiedzi :



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
