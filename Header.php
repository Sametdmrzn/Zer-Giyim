<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive E-Ticaret Navbar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
</head>
<body>
  <!-- Üst Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#">İşletme Adı</a>

      <!-- Menü simgesi (Mobil uyumlu) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Arama çubuğu ve Sepet ikonu -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <form class="d-flex mx-lg-auto mt-2 mt-lg-0" style="width: 50%;">
          <input class="form-control me-2" type="search" placeholder="Ürün Ara" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Ara</button>
        </form>
        
        <!-- Sepet İkonu -->
        <a class="nav-link d-flex align-items-center mt-2 mt-lg-0" href="#">
          <i class="bi bi-cart-fill fs-5 me-1"></i> <span>Sepet</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Alt Navbar (Kategoriler) -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categoryNavbar" aria-controls="categoryNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="categoryNavbar">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="#">Kategori 1</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kategori 2</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kategori 3</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kategori 4</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kategori 5</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
