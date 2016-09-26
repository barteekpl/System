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
    </thead>
      <tr>
            <th> Liczba  testów</th>
            <th><?php echo $data1['total'];?></th>

        </tr>
	  <tr>
            <th> Liczba rozwiązanych testów</th>
            <th><?php echo $data['total'];?></th>

        </tr>
		
		 <tr>
            <th> Liczba unikalnych osób</th>
            <th><?php echo $data2['total'];?></th>

        </tr>
		 <tr>
            <th> Suma zadanych pytań</th>
            <th><?php echo $data3['total'];?></th>

        </tr>
		
			 <tr>
            <th> Liczba pytań na użytkownika </th>
            <th><?php echo $data['total'];?></th>
        </tr>
		
			 <tr>
            <th> Liczba pytań na test </th>
            <th><?php echo $data['total'];?></th>
        </tr>
		
		
		 <tr>
            <th> Suma wszytkich odpowiedzi </th>
            <th><?php echo $data['total'];?></th>

        </tr>
	
	 <tr>
            <th> Liczba odpowiedzi na użytkownika </th>
            <th><?php echo $data['total'];?></th>
        </tr>
		
		 <tr>
            <th> Liczba odpowiedzi na użytkownika </th>
            <th><?php echo $data['total'];?></th>
        </tr>
		
		
          
    </table>
    </div>
</div>
	
