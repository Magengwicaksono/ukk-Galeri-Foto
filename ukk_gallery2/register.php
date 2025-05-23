<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galeri Foto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container">
    <a class="navbar-brand" href="index.php">Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
    <div class="navbarNav me-auto">


    </div>
    <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
    <a href="login.php" class="btn btn-outline-primary me-1">Login</a>
</div>
</nav>

<div class="countaner py-5">
	<div class="row justify-content-center">
		<div class="col-md-4">
    <div class="card">
        <h class="card-body bg-light">
        <div class="text-center">
            <h5>daftar</h5>
        </div>
        <form action="config/aksi_register.php" method="POST">
            <label class="form-label">Username</label>
            <input type="text" name="Username" class="form-control" required>
            <label class="form-label">Password</label>
            <input type="password" name="Password" class="form-control" required>
            <label class="form-label">Email</label>
            <input type="email" name="Email" class="form-control" required>
            <label class="form-label">NamaLengkap</label>
            <input type="text" name="NamaLengkap" class="form-control" required>
            <label class="form-label">Adress</label>
            <input type="text" name="Alamat" class="form-control" required>
            <div class="d-grid mt-2">
            <button class="btn btn-primary" type="submit" name="kirim">Daftar</button>
            </div>
        </form>
        <hr>
        <p>Belum punya akun ?<a href="login.php">Login disini!</a></p>
        </div>
    </div>
			
		</div>
	</div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
	<p>&copy ; UKK RPL 2025 | Ibnu Ubaidillah</p>
</footer>


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>