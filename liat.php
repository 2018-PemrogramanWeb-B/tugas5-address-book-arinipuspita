<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data</title>
	<style>
		body{
			background-image: url("tugas.jpg");
		}
		th,tr,td{
			border:1px solid black;
			border-collapse: collapse;
		}
		.nengah{
			align-content: center;
		}
		
	</style>
</head>
<body>
<?php
include "koneksi.php";
?>

<form>
	<div class="nengah">
		<table class="nengah">
			<tr>
				<th>Nama</th>
				<th>NRP</th>
				<th>Alamat</th>
				<th>No Telpon</th>
				<th colspan="2">DML</th>
			</tr>

			<?php
			$data= mysqli_query($link,"SELECT * FROM address book");
				while ($row=mysqli_fetch_array($data)) {
							echo "<tr><td>".$row['NRP'] . "</td>";
							echo "<td>".$row['name'] . "</td>";  
							echo "<td>".$row['address'] . "</td>"; 
							echo "<td>".$row['telephone'] . "</td>";
							echo "<td> 
							<form action = 'hapus.php' method = 'POST'>
							<input type = 'hidden' NRP='NRP' name = 'NRP' value = '".$row['NRP']."'>
  							<input type = 'submit' name = 'delete' value ='hapus'>
  							</form>
							</td>";

							echo "<td> 
							<form method = 'POST' action = 'update.php?name=$row[name]'>
							<input type = 'hidden' NRP='nama' name = 'nama' value = '".$row['name']."'>
							<input type = 'hidden' NRP='alamat' name = 'address' value = '".$row['address']."'>
							<input type = 'hidden' NRP='telp' name = 'telp' value = '".$row['telephone']."'>
  							<input type = 'submit' name = 'update' value ='update'>

  							</form>

							</td></tr>"; 

				}

			?>


		</table>
	</div>
</form>
</body>
</html>





