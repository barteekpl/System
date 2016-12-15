<?php

$wynik = mysql_query("SELECT Pytanie.an1 as an1 ,Pytanie.an2 as an2 ,Pytanie.Odpowiedz as Odpowiedz , projekt.type as type , projekt.type as type , Pytanie.Pytanie as Pytanie ,answers.odp as odp FROM answers
LEFT JOIN Pytanie ON Pytanie.id=answers.numer
LEFT JOIN projekt ON projekt.id=Pytanie.idprojekt where pid='$_GET[value]'

;");
echo '<table class="table table-striped table-bordered table-hover>"';

echo '<tr>';
echo '<th>Pytanie</th>';
echo '<th>Pytanie</th>';
echo '<th>Odpowedź</th>';
echo '<th>Poprawna Odpowedź</th>';
echo '</tr>';
if(mysql_num_rows($wynik) > 0) {
   mysql_query("SET NAMES 'utf8'");

    while($r = mysql_fetch_assoc($wynik)) {
      echo '<tr>';

        echo '<td>';
      If($r['an1'])
    {

      echo '<button type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-tasks"></span> Pytanie Ankietowe
            </button>';
    }

      If($r['Odpowiedz'])
    {

      echo '<button type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-list-alt"></span> Pytanie Testowe
            </button>';
    }

      If(!$r['an1'] and !$r['Odpowiedz'])
    {

      echo '<button type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-comment"></span> Pytanie Otwarte
            </button>';
    }
    echo '</td>';

      echo '<td>';
      echo $id =$r['Pytanie'];
      echo '</td>';
    	echo '<td>';
      echo $odp =$r['odp'];
      echo '</td>';
      echo '<td>';
      echo $odp =$r['Odpowiedz'];
      if(!$odp3)
      {
        echo '<button type="button" class="btn btn-default btn-sm">
                <span></span> Nie dotyczy
              </button>';
      }
      echo '</td>';

      echo '</tr>';
}}  echo '</table>';
		?>
