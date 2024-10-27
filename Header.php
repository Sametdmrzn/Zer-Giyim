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
        <input id="aramaCubugu" class="form-control me-2" type="search" placeholder="Ürün Ara" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Ara</button>
    </form>
</div>
<!-- Sepet İkonu -->
<a class="nav-link d-flex align-items-center mt-2 mt-lg-0" href="card.php" id="cart-icon">
    <i class="bi bi-cart-fill fs-5 me-1"></i> 
    <span>Sepet</span> 
    <span id="cart-count" class="ms-1">(0)</span>
</a>

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

// Sayfa yüklendiğinde sepetteki ürünleri kontrol et
document.addEventListener('DOMContentLoaded', () => {
    updateCartCount();
});

  </script>
</body>
</html>
