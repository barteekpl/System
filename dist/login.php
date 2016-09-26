<?php
session_start();
ob_start();

if ($_POST['passwd'] and $_POST['e-mail']) {
	include("conn.php");
	
$password = md5($_POST['passwd']);

 $email = mysql_real_escape_string(trim($_POST['e-mail']));

   

        echo $password ;

        $zapytanie = "SELECT id FROM user WHERE email='$email' and password ='$password'";

        $temp = mysql_query($zapytanie) or die("Brak");

        $ile = mysql_num_rows($temp);

        $temp = mysql_fetch_array($temp);

        $userid = $temp['id'];



        if ($ile == 1) {

           echo $userid=$_SESSION['id']  ;

            $_SESSION['login'] = $email;	
	$a=3;
	

}
else
	
	{
		$a=2;
		
	}
}

if ($_POST['email'] and $_POST['password']) //rejestracja

{

include("conn.php");
		

        $password = md5($_POST['password']);
		$register_date=date("m.d.Y H:i:s"); 

        $email = mysql_real_escape_string(trim($_POST['email']));
        $name = mysql_real_escape_string(trim($_POST['name']));
		$surname = mysql_real_escape_string(trim($_POST['surname']));
		
        $ile = mysql_query("SELECT * FROM `user` WHERE login = '$email'");

        $ile = mysql_num_rows($ile);

        if ($ile == 0) {

          
echo $zapytanie = "INSERT INTO `bleizer_system`.`user` ( `login`, `name`, `surname`, `email`, `primary`, `last_login`, `password`,`register_date`) VALUES ( '$email', '$name', '$surname', '$email', '1', 'a', '$password','$register_date')";



            mysql_query($zapytanie) or die("Brak danych");

           $a=1;

			
}
else
	
	{
		$a=4;
	}

}






?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="/assets/css/main.min.css">
  </head>
  <body class="login">
    <div class="form-signin">
      <div class="text-center">
     
      </div>
      <hr>
      <div class="tab-content">
        <div id="login" class="tab-pane active">
         <form role="form" method="post" action="index.php">
            <?php
			
			if($a==1)
			{
			echo '<div class="alert alert-success">
			<strong>Konto Utworzone</strong> Zaloguj się
			</div>';
			} 
			
			if($a==2)
			{
			echo '<div class="alert alert-danger">
  <strong>Dane Nie poprawne</strong> 
</div>';
			} 
			
			if($a==3)
			{
				echo $userid;
			 header("Location: user/Dashboard");
			} 
			
			if($a==4)
			{
			echo '<div class="alert alert-danger">
  <strong>Podany adres e-Mail jest zajęty</strong> <br>rejestracja nieudana
</div>';
			} 
			
			?>
			
			
			
			<p class="text-muted text-center">
             Podaj dane do Logowania
            </p>
			
			
			
			
            <div class="form-group ">
      <label class="control-label " for="name">
       E-Mail
      </label>
      <input class="form-control" id="name" name="e-mail" type="text"/>
     </div>
	  <div class="form-group ">
      <label class="control-label " for="name">
       Hasło
      </label>
      <input class="form-control" id="name" name="passwd" type="password"/>
     </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Loguj</button>
          </form>
        </div>
        <div id="forgot" class="tab-pane">
        <form role="form" method="post" action="index.php">
            <p class="text-muted text-center">Enter your valid e-mail</p>
            <input type="email" placeholder="mail@domain.com" class="form-control">
            <br>
            <button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
          </form>
        </div>
        <div id="signup" class="tab-pane">
          <form role="form" method="post" action="index.php">
            <div class="form-group ">
      <label class="control-label " for="name">
       Imię
      </label>
      <input class="form-control" id="name" name="name" type="text"/ required>
     </div>
	       <div class="form-group ">
      <label class="control-label " for="name">
       Nazwisko
      </label>
      <input class="form-control" id="name" name="surname" type="text"/ required>
     </div>
	       <div class="form-group ">
      <label class="control-label " for="name">
       Adres-Email
      </label>
      <input class="form-control" id="name" name="email" type="email"/ required>
     </div>
	       <div class="form-group ">
      <label class="control-label " for="name">
       Hasło
      </label>
      <input class="form-control" id="name" name="password" type="password"/ required>
     </div>

           
            <button class="btn btn-lg btn-success btn-block" type="submit">Rejestruj</button>
          </form>
        </div>
      </div>
      <hr>
      <div class="text-center">
        <ul class="list-inline">
          <li> <a class="text-muted" href="#login" data-toggle="tab">Logowanie</a>  </li>
         
          <li> <a class="text-muted" href="#signup" data-toggle="tab">Rejestracja</a>  </li>
        </ul>
      </div>
    </div>

    <!--jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--Bootstrap -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($) {
        $(document).ready(function() {
          $('.list-inline li > a').click(function() {
            var activeForm = $(this).attr('href') + ' > form';
            //console.log(activeForm);
            $(activeForm).addClass('animated fadeIn');
            //set timer to 1 seconds, after that, unload the animate animation
            setTimeout(function() {
              $(activeForm).removeClass('animated fadeIn');
            }, 1000);
          });
        });
      })(jQuery);
    </script>
  </body>
</html>