<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Telephone</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td>01</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
                    <td>+62878555169</td>
					<td>Depok</td>
				</tr>
				<tr>
                    <td>02</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
                    <td>+62856555635</td>
					<td>Bogor</td>
				</tr>
                
					<td>03</td>
				<?php
                
                if (isset($_POST['submit'])) {
                    
                    
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $telephone = $_POST['telephone'];
                    $alamat = $_POST['alamat'];
    
                   
                    echo '<td/>  ' . $nama_lengkap;
                    echo '<td/> ' . $email;
                    echo '<td/> ' . $telephone;
                    echo '<td/> ' . $alamat;
                    
                }

                ?>

			</tbody>
		</table>
	</div>
</body>
</html>