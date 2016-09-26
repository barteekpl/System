<?php
 $aa=$_POST[pytanie];
 $ip= $_POST[ip];	
 $date= $_POST[date];
 $pid= $_POST[pid];
foreach ($aa as $klucz => $wartosc)
mysql_query("INSERT INTO `bleizer_system`.`answers` ( `numer`, `odp`, `date`, `ip`,`pid`) VALUES ( '$klucz', '$wartosc', ' $date', ' $ip','$pid');");
		

		
		

?>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <h1 class="text-center">Dziękujemy za wypełnenie ankiety</h1>
</div>

<div class="container">

    <div class="well well-sm text-center">        
        
    
    Oceń Ankiete
    
        <div class="" data-toggle="buttons">
            <label class="btn btn-lg btn-default active">
            <input type="radio" name="options" id="option1" autocomplete="off" checked>
            <i class="fa fa-thumbs-o-up"></i>
        </label>
        <label class="btn btn-lg btn-default">
            <input type="radio" name="options" id="option2" autocomplete="off" checked>
            <i class="fa fa-thumbs-o-down"></i>
        </label>   
		</div>
      
      <br />
      
      <div class="" data-toggle="buttons">
	  <a href="http://system.ebond.pl" 
        <label class="btn btn-lg btn-block btn-success text-success active">
            <input type="radio" name="options" id="option1" autocomplete="off" checked>
            <i class="fa fa-check-circle-o fa-3x animated fadeIn"></i>
            <br />
            Strona głowna
        </label></a>
      </div>
    
    </div>
</div>
    
</div>