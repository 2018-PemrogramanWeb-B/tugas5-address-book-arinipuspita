<!DOCTYPE html>
<html>
<head>
	<title>Addres Book</title>
	<style>
		body{
			background-image: url("tugas.jpg");
		}
	</style>
</head>
<body>
<header style="text-align:center;">
	<h1> Your truly Address Book!</h1>
</header>
<div>
<form style="text-align: center;" method="get" action="liat.php">
	<img src="user.png" width="30px" height="30px">          <input type="text" name="name" placeholder="name"><br>
	<img src="home.png" width="30px" height="30px">          <input type="text" name="address" placeholder="address"><br>
	<img src="telephone.png" width="30px" height="30px">          <input type="text" name="telp" placeholder="telephone"><br>
	<input type="submit" name="tambah" value="Tambahkan" style="background: black;color:white;"><br><br>

	<input type="submit" name="liat" value="Lihat data yang telah ada" style="background: black;color:white;">

</form>
</div>


</body>
</html>

<?php
	include "koneksi.php";
?>