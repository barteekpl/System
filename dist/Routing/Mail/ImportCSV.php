<!DOCTYPE html>
<html>
<body>

<form action="../Mail/ImportCSV" method="post" enctype="multipart/form-data">
    Wybierz plik CSV:
    <input type="file" name="fileToUpload" id="fileToUpload">
	 <input type="text" value="a" name="status" id="fileToUpload" hidden>
    <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>
<?php
$target_dir = "file/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $uploadOk = 0;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Plik ". basename( $_FILES["fileToUpload"]["name"]). " dodany poprawnie. <br><br>";
    } 
}
?>
<?php


// Name of your CSV file
$csv_file = "http://system.ebond.pl/file/base_email.csv"; 

if ($_POST['status'])
{

if (($handle = fopen($csv_file, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $col[$c] = $data[$c];
        }

 $col1 = $col[0];

   
// SQL Query to insert data into DataBase
$query = "INSERT INTO `bleizer_system`.`base_mail` (`e-mail`, `userid`) VALUES ('$col1 ', '$userid');";
$s     = mysql_query($query, $connect );
 }
    fclose($handle);
}


echo "Baza uaktualniona!!";
mysql_close($connect);}
?>