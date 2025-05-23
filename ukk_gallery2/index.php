<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galeri Foto</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style>
		body {
			background-color: #f8f9fa;
		}
		.card {
			transition: transform 0.3s ease, box-shadow 0.3s ease;
			border-radius: 12px;
			overflow: hidden;
		}
		.card:hover {
			transform: scale(1.03);
			box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
		}
		.card-img-top {
			object-fit: cover;
		}
	</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="index.php">Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <a href="register.php" class="btn btn-outline-primary me-2">Daftar</a>
      <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
    </div>
  </div>
</nav>

<!-- Gallery -->
<div class="container py-5">
	<div class="row justify-content-center g-4">
		<!-- BMW -->
		<div class="col-md-4 col-sm-6">
			<div class="card h-100 shadow-sm">
				<img src="photo gallery/BMW.png" class="card-img-top" alt="BMW M4" style="height: 16rem;">
				<div class="card-body text-center">
					<h5 class="card-title">BMW M4</h5>
				</div>
				<div class="card-footer text-center bg-white border-top-0">
					<a href="#" class="me-3 text-decoration-none text-muted">💙 100 suka</a>
					<a href="#" class="text-decoration-none text-muted">💬 1 komentar</a>
				</div>
			</div>
		</div>

		<!-- Mercedes -->
		<div class="col-md-4 col-sm-6">
			<div class="card h-100 shadow-sm">
				<img src="https://vehicle-images.dealerinspire.com/9eee-11000871/W1K7X7KB8RV000206/286e57c128fc964f0783bfba23dbda7f.jpg" class="card-img-top" alt="Mercedes AMG GT63" style="height: 16rem;">
				<div class="card-body text-center">
					<h5 class="card-title">Mercedes AMG GT63</h5>
				</div>
				<div class="card-footer text-center bg-white border-top-0">
					<a href="#" class="me-3 text-decoration-none text-muted">💙 100k suka</a>
					<a href="#" class="text-decoration-none text-muted">💬 8k komentar</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<footer class="text-center py-3 bg-white border-top">
	<small>&copy; UKK RPL 2025 | Ibnu Ubaidillah</small>
</footer>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>