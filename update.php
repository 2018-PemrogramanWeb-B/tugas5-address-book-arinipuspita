
<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>
	<style>
		.pencet{border: none;
    color: white;
    padding: 16px 28px;
    margin-left: 37px;
    font-size: 16px;
    background-color: #ff9800;
	border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;}

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

	</style>
</head>
<body style="background-image: url(tugas.jpg);">
<div style="text-align: center;">

 <h1>Update Your Data</h1>
<form style="text-align: center;" method="get" action="updatefix.php">
    <img src="user.png" width="30px" height="30px">          <input type="text" name="name" value="<?php echo $_POST['nama']?>"><br>
    <img src="home.png" width="30px" height="30px">          <input type="text" name="address" value="<?php echo $_POST['address']?>"><br>
    <img src="telephone.png" width="30px" height="30px">          <input type="text" name="telp" value="<?php echo $_POST['telp']?>"><br>
    <input type="submit" name="tambah" value="Update" style="background: black;color:white;">
</form>
</div>
<br>

<br>
</body>
</html>
