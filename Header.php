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
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil Uyumlu Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Üst Navbar (Logo ve Sepet İkonu) -->
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a class="navbar-brand" href="urunler.php">
            <img src="assets/logo/zerafet.png" alt="ZERAFET" style="width: 100px; height: auto;">
        </a>

        <!-- Sepet İkonu -->
        <a class="nav-link d-flex align-items-center" href="card.php" id="cart-icon">
            <i class="bi bi-cart-fill fs-5 me-1"></i>
            <span>Sepet</span>
        </a>

        <!-- Menü simgesi (Mobil uyumlu) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Alt Navbar (Kategori Linkleri) -->
<div class="container mt-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-white mb-5">
        <div class="container-fluid justify-content-center">
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="urunler.php?category=Kategori1">Desenli Eşarp</a></li>
                    <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="urunler.php?category=Kategori2">Dijital Eşarp</a></li>
                    <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="urunler.php?category=Kategori3">El Yüz Havlusu</a></li>
                    <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="urunler.php?category=Kategori4">Bone Çeşitleri</a></li>
                    <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="urunler.php?category=Kategori5">Mutfak Havlusu</a></li>
                    <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="urunler.php?category=Kategori6">Ayak Havlusu</a></li>
                    <li class="nav-item"><a class="nav-link" href="urunler.php?category=Kategori7">Kolluk</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="product-list" class="row"></div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


</nav>


  <!-- Alt Navbar (Kategoriler) -->


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Sepete ürün ekleme fonksiyonu
function addToCart(product) {
    let cartItems = JSON.parse(sessionStorage.getItem('cart')) || [];
    cartItems.push(product);
    sessionStorage.setItem('cart', JSON.stringify(cartItems));
    updateCartCount();
}

// Sepet sayısını güncelle
function updateCartCount() {
    const cartItems = JSON.parse(sessionStorage.getItem('cart')) || [];
    document.getElementById("cart-count").textContent = `(${cartItems.length})`;
}

  
  </script>
</body>
</html>
