<?php
if ($_POST['email'])
{
	$adres=$_POST['email'];
	mysql_query("INSERT INTO `bleizer_system`.`base_mail` (`e-mail`, `userid`) VALUES ('$adres', '$userid');");
}



if ($_POST['delete'])
{
	
	$deleteid=$_POST['delete'];
	mysql_query("DELETE FROM `base_mail` WHERE id='$deleteid'");
}

$wynik = mysql_query("SELECT * FROM base_mail where userid='$userid'"); 	
?>


<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="../Mail/Add" class="btn btn-primary btn-xs pull-right"><b>+</b> Dodaj nowego maila</a>
       
            <th>ID</th>
            <th>E-mail</th>
       
            <th class="text-center">Delete</th>
        </tr>
    </thead>
              <?php
	   $numer=1;
	   if(mysql_num_rows($wynik) > 0) { 
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik)) { 
	
	?>
            <th><?php echo $numer;$numer=$numer+1;?></th>
            <th><?php echo $r['e-mail'];?></th>
       
             <td class="text-center">
			 <form class="form-horizontal" method="post" action="../Mail/YourBase">
			 
			<button type="submit" name="delete" value="<?php echo $r['id'];?>" class="btn btn-danger">Del</button>
			 <form>
			 </td>
       
        </tr>
		
		<?php
	   }}
		?>
          
    </table>
    </div>
</div>