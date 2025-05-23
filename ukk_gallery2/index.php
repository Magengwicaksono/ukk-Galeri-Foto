<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeri Foto</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(to right, #f0f4f8, #d9e4f5);
      font-family: 'Segoe UI', sans-serif;
    }

    .navbar {
      background: linear-gradient(to right, #1e3c72, #2a5298);
    }

    .navbar-brand {
      color: #fff !important;
    }

    .navbar .btn {
      border-color: #fff;
      color: #fff;
    }

    .navbar .btn:hover {
      background-color: #fff;
      color: #2a5298;
    }

    .card {
      border: none;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
      height: 16rem;
      object-fit: cover;
    }

    .card-body {
      background: linear-gradient(135deg, #ffffff, #f0f4f8);
    }

    .card-footer {
      background-color: #fff;
      border-top: none;
    }

    .card-title {
      font-weight: 600;
      color: #2a2a2a;
    }

    .card-footer a {
      font-weight: 500;
    }

    footer {
      background: #fff;
      border-top: 1px solid #dee2e6;
    }

    footer small {
      color: #6c757d;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <a href="register.php" class="btn btn-outline-light me-2">Daftar</a>
      <a href="login.php" class="btn btn-outline-light me-2">Login</a>
    </div>
  </div>
</nav>

<!-- Galeri -->
<div class="container py-5">
  <div class="row justify-content-center g-4">
    
    <!-- BMW -->
    <div class="col-md-4 col-sm-6">
      <div class="card h-100">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmST5HlmifRo-aUVWaimWgSCMdIdfgX2OVGg&s" class="card-img-top" alt="BMW M4">
        <div class="card-body text-center">
          <h5 class="card-title">Tayo Merah Spek Ngarit</h5>
        </div>
        <div class="card-footer text-center">
          <a href="#" class="me-3 text-decoration-none text-muted">💙 100K suka</a>
          <a href="#" class="text-decoration-none text-muted">💬 150k komentar</a>
        </div>
      </div>
    </div>

    <!-- Mercedes -->
    <div class="col-md-4 col-sm-6">
      <div class="card h-100">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2VV8rX9jXr7zQ84DpbxkSY-o-AzE3X_RjIw&s" class="card-img-top" alt="Mercedes AMG GT63">
        <div class="card-body text-center">
          <h5 class="card-title">Tayo Biru Spek Balap</h5>
        </div>
        <div class="card-footer text-center">
          <a href="#" class="me-3 text-decoration-none text-muted">💙 121K suka</a>
          <a href="#" class="text-decoration-none text-muted">💬 82K komentar</a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<footer class="text-center py-3">
  <small>&copy; UKK RPL 2025 | Ageng Wicaksono</small>
</footer>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
