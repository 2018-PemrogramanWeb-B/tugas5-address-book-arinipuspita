<?php
$db="adress book";
	$link=mysqli_connect("localhost","root","",$db) or die("Error".mysqli_error());
	mysqli_select_db($link,$db) or die("Database not found");






		if (isset($_GET['tambah'])) {
			$nama=$_GET['name'];
			$alamat=$_GET['address'];
			$telp=$_GET['telp'];
			$test = mysqli_query($link,"SELECT * FROM address book where name='$nama' and address='$alamat' and telephone='$telp'");


			if (!mysqli_fetch_array($test)) {
				mysqli_query($link,"INSERT INTO address book (name, address,telephone) VALUES ('$nama','$alamat','$telp')");
				echo '<script language="javascript">';
				echo 'alert("Data telah diinputkan!")';
				echo '</script>';
			}else{
				echo '<script language="javascript">';
				echo 'alert("Data gagal diinputkan!")';
				echo '</script>';
			}
			
		}
	?>



