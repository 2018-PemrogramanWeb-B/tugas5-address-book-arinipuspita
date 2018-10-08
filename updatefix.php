
<?php
$link=mysqli_connect('localhost','root','','address book');

if (isset($_GET['tambah'])) {
			$nama=$_GET['name'];
			$alamat=$_GET['address'];
			$telp=$_GET['telp'];
			$test = mysqli_query($link,"UPDATE address book SET address='$alamat',telephone='$telp' where name='$nama'			
				");


				echo '<script language="javascript">';
				echo 'alert("Data telah diupdate!")';
				echo '</script>';
			
header('location:liat.php');
}
?>