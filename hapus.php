<?php
include "liat.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(tugas.jpg);">

</body>
</html>

<?php
$id = $_POST['NRP'];
$link=mysqli_connect('localhost','root','','address book');
mysqli_query($link,"DELETE FROM addressbook where NRP = '$NRP'");
header ('location:liat.php');

?>