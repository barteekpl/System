<?php
session_start();
ob_start();
?><?php  $_GET[category]; ?>
<?php  $_GET[value]; ?> 

<?php
 if($_GET[category] == '')
{	
include("login.php");
exit;
}

?>
