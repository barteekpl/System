	<?php
	$wynik = mysql_query("SELECT * FROM projekt where userid='$userid'");


	$liczba=mysql_query("SELECT count(*) as total FROM  `projekt`  group by '$userid' ;");
	$data1=mysql_fetch_assoc($liczba);

	$liczba1=mysql_query("SELECT count(*) as total FROM  `answers`  ;");
	$data=mysql_fetch_assoc($liczba1);

	$liczba2=mysql_query("SELECT count(*) as total FROM  `answers`  group by numer ;");
	$data2=mysql_fetch_assoc($liczba2);

		$liczba3=mysql_query("SELECT count(*) as total FROM  `answers`  group by numer ;");
	$data3=mysql_fetch_assoc($liczba3);

	?>



<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
      </tr>
			<th>Nazwa Ankiety</th>
      <th>Liczba pytań</th>
		  <th>Liczba wypełnień ankiety</th>
		  <th>Data ostaniego wypełnienia </th>
        </tr>
    </thead><?php
	if(mysql_num_rows($wynik) > 0) {
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik)) {
	$idpytania=$r['id'];
	$idpytania1=$r['pid'];
	$pytania = mysql_query("SELECT * FROM Pytanie where idprojekt= $idpytania");

 $pytaniaa=mysql_num_rows($pytania);


 	$liczba=mysql_query("SELECT count(*) as total FROM  `answers` where pid='$idpytania' group by `odp` ");
	$data=mysql_fetch_assoc($liczba);

	$answers = mysql_query("SELECT date FROM  `answers` where pid='$idpytania' order by id desc");
	$answers1 =mysql_fetch_assoc($answers);

	?>
      			<tr>
            <th><?php echo $r['name'];?> </th>
            <th><?php echo $pytaniaa?></th>
						<th><?php echo $data['total'];?></th>
						<th><?php echo $answers1['date'];?></th>
        		</tr>
	<?php
	}}
			?>

    </table>
    </div>
</div>
