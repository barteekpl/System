
	<?php
	$liczba=mysql_query("SELECT count(*) as total FROM  `base_mail` where userid='$userid' group by '$userid' ;");
	$data=mysql_fetch_assoc($liczba);
	$data['total'];
	?>
	<div class="text-center">
           		  
	<?php
	
	if($data['total']<1)
	{
		echo "Dodaj kogoś do bazy";
		exit;
	}
	$wynik = mysql_query("SELECT * FROM base_mail where userid='$userid'"); 
	$wynik1 = mysql_query("SELECT * FROM projekt where userid='$userid'"); 	
	?>
	
	<div class="container">
	<div class="row col-md-6 ">
	
		<form class="form-horizontal" method="post" action="../Mail/Home">
    <div class="form-group">
      <label class="control-label col-sm-2"  for="email">Temat:</label>
      <div class="col-sm-6">
        <input type="text" name="temat" class="form-control" value="Nowa Ankieta" id="temat" placeholder=" ">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Treść:</label>
      <div class="col-sm-6">
        <input type="text" name="tresc" value="Zapraszamy do nowej ankiety " class="form-control" id="tresc" placeholder=" ">
      </div>
    </div>
	
 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Ankieta:</label>
      <div class="col-sm-6">
	  <div class="styled-select">
<select>
  <optgroup label="Ankiety">
  <?php
  if(mysql_num_rows($wynik1) > 0) { 
   mysql_query("SET NAMES 'utf8'");
    while($r = mysql_fetch_assoc($wynik1)) { 
	echo " <option name='ankieta'>";
	echo $r['name'];
	echo " </option>";
	
  }}
  ?>
  </optgroup>
</select>

      </div>

      </div>
    </div>
  
   

	 </div>
    <div class="row col-md-6 ">
    <table class="table table-striped custab">
    <thead>  
            <th>ID</th>
            <th>E-mail</th>
       
            <th class="text-center">Mail</th>
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
			
			<button type="submit" name="adres" value="<?php echo $r['e-mail'];?>" class="btn btn-info">Mail</button>
			   </form>
			 </td>
       
        </tr>
		
		<?php
	   }}
		?>
          
    </table>
    </div>
</div>



	<?php
	
if ($_POST['adres'])
{	
$to  = $_POST['adres'];
$subject = $_POST['temat'];

$message = $_POST['tresc'];

$message .=$_POST['ankieta'];

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$adress=$_SESSION["email"];
// More headers
$headers .= 'From: <'.$adress.'>' . "\r\n";


mail($to,$subject,$message,$headers);
echo "Mail wysłany do $to";
}
?>		  