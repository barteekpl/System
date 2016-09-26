<?php
$wynik = mysql_query("SELECT * FROM projekt where userid='$userid'"); 	
echo '<table class= table table-striped table-bordered table-hover>';
 echo '<thead>';
  echo '<tr>';
 echo '<th>Id</th>';
echo '<th>Nazwa</th>';
 echo '<th>Typ</th>';
  echo '<th>Liczba Pytań</th>';
 echo '<th>Opcje</th>';
  echo '<th>Status</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
if(mysql_num_rows($wynik) > 0) { 
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik)) { 
	echo '<tr>';
	
		 echo '<td>'.$number.'</td>';
 $number=$number+1;
$idpytania=$r['id'];
	echo '<td>';
		echo $r['name'];
echo '</td>';
	echo '<td>';
		$r['type'];
		
	If($r['type']==1)
{
	
	echo '<button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-tasks"></span> Ankieta
        </button>';	
}	
		
	If($r['type']==2)
{
	
	echo '<button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-list-alt"></span> Testy ABCD
        </button>';	
}

	If($r['type']==3)
{
	
	echo '<button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-comment"></span> Pytanie
        </button>';	
}		
		
		
		
		
echo '</td>';

echo '<td>';
$pytania = mysql_query("SELECT * FROM Pytanie where idprojekt= $idpytania"); 

echo $pytaniaa=mysql_num_rows($pytania);

echo '</td>';

echo '<td>';
		echo '<a href="/EditName/'.$idpytania.'" ><button type="button" class="btn btn-info">Edytuj Nazwę	</button> </a>';
		echo '<a href="/Configure/'.$idpytania.'" ><button type="button" class="btn btn-info">Konfiguruj</button> </a>';
		echo '<a href="/Url/'.$idpytania.'" ><button type="button" class="btn btn-primary">Podgląd</button> </a>';
		echo '<a href="/Pytania/'.$idpytania.'" ><button type="button" class="btn btn-primary">Pytania</button></a> ';
		echo '<a href="/Url/'.$idpytania.'" ><button type="button" class="btn btn-success">Udostępnij</button></a> ';
		echo '<a href="/Delete/'.$idpytania.'" ><button type="button" class="btn btn-warning">Delete</button></a> ';
echo '</td>';
echo '<td>';
$progres=40;

if($pytaniaa > 0)
{
$progres=$progres+50;	
	
}
if($pytaniaa > 1)
{
	$progres=$progres+10;
	
}
if ( $progres > 100)

{
	
	$progres=100;
}

if($progres<40)
{
		echo '<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="'.$progres.'"
  aria-valuemin="0" aria-valuemax="100" style="width:'.$progres.'%">
    '.$progres.'% 
  </div>
</div>	';
	}

if($progres>39 and $progres<91)
{
		echo '<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="'.$progres.'"
  aria-valuemin="0" aria-valuemax="100" style="width:'.$progres.'%">
    '.$progres.'% 
  </div>
</div>	';
	}
	
	if($progres>90 and $progres<100)
{
		echo '<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$progres.'"
  aria-valuemin="0" aria-valuemax="100" style="width:'.$progres.'%">
    '.$progres.'% 
  </div>
</div>	';
	}
	if($progres>99)
	{
		echo '<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$progres.'"
  aria-valuemin="0" aria-valuemax="100" style="width:'.$progres.'%">
    COMPLETED
  </div>
</div>	';
		
	}
	
	
	

echo '</td>';
echo '</tr>';
	
}}
echo '</table>';

?>