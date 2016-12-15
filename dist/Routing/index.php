<?php session_start();
ob_start();
include("conn.php");


 if ($_SESSION['login'] ) {

 }
 else{
	 if($_GET[category]){
	 header("Location: /"); }

 }

 if($_GET[value]=='logaut'){

session_unset();
session_destroy();
header("Location: /");

 }



$dana=$_SESSION["login"];


$wynik = mysql_query("SELECT * FROM user where login='$dana'");

if(mysql_num_rows($wynik) > 0) {

    while($r = mysql_fetch_assoc($wynik)) {

		$userid= $_SESSION["id"]=$r['id'];
		 $_SESSION["name"]=$r['name'];
		 $_SESSION["surname"]=$r['surname'];
		 $_SESSION["email"]=$r['email'];
		 $_SESSION["register_date"]=$r['register_date'];
		$_SESSION["id"]=$r['id'];

}}

$wynika = mysql_query("SELECT * FROM projekt where userid='$userid' and type=1");
$wynikt = mysql_query("SELECT * FROM projekt where userid='$userid' and type=2");
$wynikp = mysql_query("SELECT * FROM projekt where userid='$userid' and type=3");
$wynikall = mysql_query("SELECT * FROM projekt where userid='$userid'");
$ankiety=mysql_num_rows($wynika);
$testy=mysql_num_rows($wynikt);
$pytania=mysql_num_rows($wynikp);
$wynikall=mysql_num_rows($wynikall);

?>

<?php include("routing.php");?>

<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>System Ankietowy</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="/assets/css/main.min.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv/html5shiv.js"></script>
      <script src="assets/lib/respond/respond.min.js"></script>
      <![endif]-->


    <link rel="stylesheet" href="/assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="/assets/less/theme.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.2.0/less.min.js"></script>

    <!--Modernizr-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  </head>

  <?php

  if( $_GET[category] == 'Url' )
{
include ("Routing/Url/$.php");

exit;
}


   if( $_GET[category] == 'LP' )
{
include ("Routing/LP/index.php");

exit;
}


  ?>
  <body class="" style="
    background-color: #3a3a3a !important;
">
    <div class="bg-dark dk" id="wrap">
      <div id="top">

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </header>
            <div class="topnav">

              <div class="btn-group">

                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                  <i class="fa fa-question"></i>
                </a>
              </div>
              <div class="btn-group">
                <a href="logaut" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                  <i class="fa fa-power-off"></i>
                </a>
              </div>

            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav -->
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="/user/Dashboard">Dashboard</a>
                </li>

              </ul><!-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        <header class="head">

          <div class="main-bar">
            <h3>
              <i class="fa fa-tasks "></i> Witaj <?php echo $_SESSION['name']; ?> w sytemie </h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->


      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media bg-dark dker">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span>
          </div>
          <div class="user-wrapper bg-dark">
            <a class="user-link" href="../User/Profile">
              <img class="media-object img-thumbnail user-img" walt="User Picture" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" style="
    width: 100px;
">
              <span class="label label-danger user-label">User</span>
            </a>
            <div class="media-body">
              <h5 class="media-heading"><?php echo $_SESSION['name']; ?></h5>
              <ul class="list-unstyled user-info">
                <li> <a href="">User</a>  </li>
                <li>Data :
                  <br>
                  <small>
                    <i class="fa fa-calendar"></i><?php echo $dzisiaj = date("j M Y");   ?></small>
                </li>
              </ul>
            </div>
          </div>
        </div>

    <br><br>
        <ul id="menu" class="bg- dker">
          <li class="nav-header">Menu</li>
          <li class="nav-divider"></li>

          <li class="active">
            <a href="/user/Dashboard">
              <i class="fa fa-dashboard"></i><span class="link-title">Dashboard</span>
            </a>
          </li>



          <li>
            <a href="/User/Profile">
              <i class="fa fa-table"></i>
              <span class="link-title">User</span>
            </a>
          </li>
		     <li>
            <a href="/Raport/Project">
              <i class="fa fa-table"></i>
              <span class="link-title">Raport</span>
            </a>
          </li>
		     <li>
            <a href="/Raport/Analityka">
              <i class="fa fa-table"></i>
              <span class="link-title">Analityka</span>
            </a>
          </li>
          <li>
            <a href="/Mail/Home">
              <i class="fa fa-table"></i>
              <span class="link-title">Mailing</span>
            </a>
          </li>
          <li>
            <a href="/Mail/Base">
              <i class="fa fa-file"></i>
              <span class="link-title">
     Baza Adresów
          </span> </a>
          </li>




		 <style>
html {
		 background-color: #3a3a3a !important;
}


		 </style>

        </ul><!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
          <!--

		  <div class="text-center">
              <ul class="stats_box">
                <li>
                  <div class="sparkline bar_week"></div>
                  <div class="stat_text">
                    <strong>2.345</strong> Weekly Visit
                    <span class="percent down"> <i class="fa fa-caret-down"></i> -16%</span>
                  </div>
                </li>
                <li>
                  <div class="sparkline line_day"></div>
                  <div class="stat_text">
                    <strong>165</strong> Daily Visit
                    <span class="percent up"> <i class="fa fa-caret-up"></i> +23%</span>
                  </div>
                </li>
                <li>
                  <div class="sparkline pie_week"></div>
                  <div class="stat_text">
                    <strong>$2 345.00</strong> Weekly Sale
                    <span class="percent"> 0%</span>
                  </div>
                </li>
                <li>
                  <div class="sparkline stacked_month"></div>
                  <div class="stat_text">
                    <strong>$678.00</strong> Monthly Sale
                    <span class="percent down"> <i class="fa fa-caret-down"></i> -10%</span>
                  </div>
                </li>
              </ul>
            </div>
            <hr>

		 -->



<?php

if ($_POST['nameTestABCD'])

{

mysql_query("SET NAMES 'utf8'");

$name=$_POST['nameTestABCD'];
$wynikp = mysql_query("INSERT INTO `bleizer_system`.`projekt` ( `name`, `userid`, `type`) VALUES ( '$name', '$userid', '2');");

}


if ($_POST['UptadePytanieID'] and $_POST['UptadePytanie'] )
{
 $UptadePytanieID=$_POST['UptadePytanieID'];
 $UptadePytanie=$_POST['UptadePytanie'];
echo $wynikp = mysql_query("UPDATE  `bleizer_system`.`Pytanie` SET  `Pytanie` =  '$UptadePytanie' WHERE  `id` ='$UptadePytanieID';");
}

if ($_POST['UptadeNameID'] and $_POST['UptadeName'] )
{
$UptadeNameID=$_POST['UptadeNameID'];
$UptadeName=$_POST['UptadeName'];
$wynikp = mysql_query("UPDATE  `bleizer_system`.`projekt` SET  `name` =  '$UptadeName' WHERE  `projekt`.`id` ='$UptadeNameID';");
}


if ($_POST['namePytanie'])

{

mysql_query("SET NAMES 'utf8'");

$name=$_POST['namePytanie'];
$wynikp = mysql_query("INSERT INTO `bleizer_system`.`projekt` ( `name`, `userid`, `type`) VALUES ( '$name', '$userid', '3');");
}

if ($_POST['nameAnkieta'])

{
mysql_query("SET NAMES 'utf8'");
$name=$_POST['nameAnkieta'];
$wynikp = mysql_query("INSERT INTO `bleizer_system`.`projekt` ( `name`, `userid`, `type`) VALUES ( '$name', '$userid', '1');");
}
$wynika = mysql_query("SELECT * FROM projekt where userid='$userid' and type=1");
$wynikt = mysql_query("SELECT * FROM projekt where userid='$userid' and type=2");
$wynikp = mysql_query("SELECT * FROM projekt where userid='$userid' and type=3");
$ankiety=mysql_num_rows($wynika);
$testy=mysql_num_rows($wynikt);
$pytania=mysql_num_rows($wynikp);


if($_GET[value] == 'Dashboard' and $_GET[category] == 'user' )
{
include ("Routing/User/Dashboard.php");
}
if($_GET[value] == 'Base' and $_GET[category] == 'Mail' )
{
include ("Routing/Mail/Base.php");
}

if($_GET[value] == 'YourBase' and $_GET[category] == 'Mail' )
{
include ("Routing/Mail/YourBase.php");
}
if($_GET[value] == 'ImportCSV' and $_GET[category] == 'Mail' )
{
include ("Routing/Mail/ImportCSV.php");
}
if($_GET[value] == 'Home' and $_GET[category] == 'Mail' )
{
include ("Routing/Mail/Home.php");
}
if($_GET[value] == 'Add' and $_GET[category] == 'Mail' )
{
include ("Routing/Mail/Add.php");
}

if( $_GET[category] == 'Configure' )
{
include ("Routing/Configure/$.php");
}
if($_GET[category] == 'EditName' )
{
include ("Routing/EditName/$.php");
}

if($_GET[category] == 'EditPytanie' )
{
include ("Routing/EditPytanie/$.php");
}

if( $_GET[category] == 'Delete' )
{
include ("Routing/Delete/$.php");
}

if( $_GET[category] == 'Pytania' )
{
include ("Routing/Pytania/$.php");
}

if($_GET[value] == 'Profile'  and $_GET[category] == 'User' )
{
include ("Routing/User/Profile.php");
}
$number=1;
if($_GET[value] != 'Dashboard' and  $_GET[value] != 'Add' and$_GET[category] == 'Project' )
{
include ("Routing/Project/$.php");
}

if($_GET[value] == 'Project' and $_GET[category] == 'Raport' )
{
include ("Routing/Raport/$.php");
}

if($_GET[category] == 'Answers' )
{
include ("Routing/Answers/$.php");
}


if($_GET[value] == 'Analityka' and $_GET[category] == 'Raport' )
{
include ("Routing/Raport/Analityka.php");
}

if($_GET[value] == 'Add' and $_GET[category] == 'Project' )
{
include ("Routing/Project/Add.php");
}
?>

<div id="Ankieta" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title" style="color: black;">Ankieta</h4>
      </div>
      <div class="modal-body">
      <form role="form" method="post" action="/Project/<?php echo $_SESSION['id']; ?>">
  <div class="form-group">
    <label for="name">Temat Ankiety</label>
    <input type="text" name="nameAnkieta" class="form-control" id="text">
  </div>



      </div>
      <div class="modal-footer">
        <input id="submit" type="submit" value="Send" class="btn btn-primary">
		</form>

      </div>
    </div>

  </div>
</div>

<div id="TestABCD" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title" style="color: black;">Test ABCD</h4>
      </div>
     <div class="modal-body">
       <form role="form" method="post" action="/Project/<?php echo $_SESSION['id']; ?>">
  <div class="form-group">
    <label for="name">Nazwa testu</label>
    <input type="text" name="nameTestABCD" class="form-control" id="text">
  </div>
      </div>
      <div class="modal-footer">
       <input id="submit" type="submit" value="Send" class="btn btn-primary">

		</form>

      </div>
    </div>

  </div>
</div>


<div id="Pytanie" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title" style="color: black;">Pytanie</h4>
      </div>
        <div class="modal-body">
         <form role="form" method="post" action="/Project/<?php echo $_SESSION['id']; ?>">
  <div class="form-group">
    <label for="name">Nazwa Pytania</label>
    <input type="text" name="namePytanie" class="form-control" id="text">
  </div>



      </div>
      <div class="modal-footer">
      <input id="submit" type="submit" value="Send" class="btn btn-primary">
		</form>

      </div>
    </div>

  </div>
</div>





          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
        </div>

        <!-- .well well-small -->
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span> </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span> </li>
            <li>Popularity <span class="dynamicbar pull-right">Loading..</span> </li>
            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span> </li>
          </ul>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <button class="btn btn-block">Default</button>
          <button class="btn btn-primary btn-block">Primary</button>
          <button class="btn btn-info btn-block">Info</button>
          <button class="btn btn-success btn-block">Success</button>
          <button class="btn btn-danger btn-block">Danger</button>
          <button class="btn btn-warning btn-block">Warning</button>
          <button class="btn btn-inverse btn-block">Inverse</button>
          <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
          <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
          <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
          <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
          <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
          <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <span>Default</span> <span class="pull-right"><small>20%</small> </span>
          <div class="progress xs">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <span>Success</span> <span class="pull-right"><small>40%</small> </span>
          <div class="progress xs">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <span>warning</span> <span class="pull-right"><small>60%</small> </span>
          <div class="progress xs">
            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
          </div>
          <span>Danger</span> <span class="pull-right"><small>80%</small> </span>
          <div class="progress xs">
            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
          </div>
        </div>
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <footer class="Footer bg-dark dker">
      <p>2016 &copy; Bartek</p>
    </footer><!-- /#footer -->

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Pomoc</h4>
          </div>
          <div class="modal-body">
            <p>
Bartłomiej Wolski - Licencjat       </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->

    <!--jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

    <!--Bootstrap -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/screenfull.js/2.0.0/screenfull.min.js"></script>

    <!-- Metis core scripts -->
    <script src="/assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="/assets/js/app.js"></script>
    <script>
      $(function() {
        Metis.dashboard();
      });
    </script>

  </body>
