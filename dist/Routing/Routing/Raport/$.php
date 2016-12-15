	<?php
	$wynik = mysql_query("SELECT * FROM projekt where userid='$userid'");

	$liczba=mysql_query("SELECT count(*) as total FROM  `projekt`  where userid='$userid' group by '$userid'  ;");
	$data1=mysql_fetch_assoc($liczba);



	$userid=$_SESSION["id"];

	$liczba1=mysql_query("SELECT count(*) as total FROM projekt INNER JOIN answers
ON projekt .id=answers.pid where projekt.`userid`='$userid' ;");
	$data=mysql_fetch_assoc($liczba1);

	$liczba2=mysql_query("SELECT count(*) as total FROM  `answers`  group by `ip` ;");
	$data2=mysql_fetch_assoc($liczba2);

	$liczba3=mysql_query("SELECT count(*) as total FROM  `answers`  group by numer ;");
	$data3=mysql_fetch_assoc($liczba3);

	$liczba4=mysql_query("SELECT count(*) as total FROM  `answers`  ;");
	$data4=mysql_fetch_assoc($liczba4);

	$liczba5=mysql_query("SELECT count(*) as total FROM  `Pytanie` where  `userid`='$userid' ;");
	$data5=mysql_fetch_assoc($liczba5);
	?>

<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>


        </tr>
    </thead>
      <tr>
            <th> Liczba dostępnych testów</th>
            <th><?php echo $data1['total'];?></th>

        </tr>
	  <tr>
            <th> Liczba rozwiązanych testów przez użytkowników</th>
            <th><?php echo $data['total'];?></th>

        </tr>

		 <tr>
            <th> Liczba unikalnych osób rozwiązujących testy</th>
            <th><?php echo $data2['total'];?></th>

        </tr>
		 <tr>
            <th> Suma zadanych pytań</th>
            <th><?php echo $data4['total'];?></th>

        </tr>
		<?php $uniquser=$data4['total']/$data2['total'];?>
			 <tr>
            <th> Liczba pytań na użytkownika </th>
            <th><?php echo $s=number_format($uniquser, 1, ',', '.');?></th>
        </tr>
		<?php $uniqanswer=$data4['total']/$data1['total'];?>
			 <tr>
            <th> Liczba pytań na test </th>
            <th><?php echo $s=number_format($uniqanswer, 1, ',', '.');?></th>
        </tr>


		 <tr>
            <th> Suma wszytkich odpowiedzi </th>
            <th><?php echo $data5['total'];?></th>

        </tr>

	 <tr>
		 <?php $uniqansweruser=$data5['total']/$data3['total'];?>
            <th> Liczba odpowiedzi na użytkownika </th>
          <th><?php echo $s=number_format($uniqansweruser, 1, ',', '.');?></th>
        </tr>

		 <tr>
			 <?php $uniqanswertest=$data5['total']/$data1['total'];?>
            <th> Liczba odpowiedzi na test </th>
            <th><?php echo $s=number_format($uniqanswertest, 1, ',', '.');?></th>
        </tr>



    </table>
    </div>
</div>
