<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		<h1>Form Pendaftaran</h1>
		<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="hasil.php">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
			<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="telephone">Telephone</label>
				<textarea class="form-control" id="telephone" name="telephone"></textarea>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="tel" class="form-control" id="alamat" name="alamat">
			</div>
			<button class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
</body>
</html>