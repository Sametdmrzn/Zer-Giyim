<?php
session_start();
?>

<?php include 'header.php'; ?>

<!-- Ana İçerik -->
<div class="container mt-5">

    <!-- Alt Navbar (Kategoriler) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid justify-content-center">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="urunler.php?category=Kategori1">Desenli Eşarp</a></li>
                <li class="nav-item"><a class="nav-link" href="urunler.php?category=Kategori2">Dijital Eşarp</a></li>
                <li class="nav-item"><a class="nav-link" href="urunler.php?category=Kategori3">El Yüz Havlusu</a></li>
                <li class="nav-item"><a class="nav-link" href="urunler.php?category=Kategori4">Bone Çeşitleri</a></li>
                <li class="nav-item"><a class="nav-link" href="urunler.php?category=Kategori5">Mutfak Havlusu</a></li>
                <li class="nav-item"><a class="nav-link" href="urunler.php?category=Kategori6">Ayak Havlusu</a></li>
                <li class="nav-item"><a class="nav-link" href="urunler.php?category=Kategori7">Kolluk</a></li>
            </ul>
        </div>
    </nav>





<h1>Sepetiniz</h1>

<?php if (!empty($_SESSION['sepet'])): ?>
    <ul>
        <?php foreach ($_SESSION['sepet'] as $urun): ?>
            <li><?php echo $urun['isim']; ?> - <?php echo $urun['fiyat']; ?> TL</li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Sepetinizde ürün bulunmamaktadır.</p>
<?php endif; ?>


    <!-- Sepet Bilgisi -->
    
    <ul id="cart-list" class="list-group mb-4"></ul>

    <!-- Sepeti WhatsApp ile Gönder Butonu -->
    <button id="checkout-btn" class="btn btn-success mt-4">Sepeti WhatsApp ile Gönder</button>
</div>

<?php include 'footer.php'; ?>

<!-- JavaScript Kısmı -->
<script>
    let cart = JSON.parse(localStorage.getItem('cart')) || []; // Sepet dizisi

    // Sepet görünümünü güncelleme fonksiyonu
    function updateCartDisplay() {
        const cartList = document.getElementById('cart-list');
        cartList.innerHTML = ''; // Önceki sepeti temizle

        // Sepetteki ürünleri listele
        cart.forEach(product => {
            const cartItem = `
                <li class="list-group-item">
                    <img src="${product.image}" alt="${product.name}" style="width: 50px; height: auto; margin-right: 10px;">
                    ${product.name} - ${product.price} TL
                </li>
            `;
            cartList.innerHTML += cartItem; // Sepet öğesini ekle
        });
    }

    // Sayfa yüklendiğinde sepeti güncelle
    window.onload = function() {
        updateCartDisplay();
    };

    // WhatsApp ile gönderme
    document.getElementById('checkout-btn').addEventListener('click', function() {
        if (cart.length === 0) {
            alert('Sepetinizde ürün yok!');
            return;
        }
        
        let message = 'Sepetim:\n';
        cart.forEach(product => {
            message += `${product.name} - ${product.price} TL\n`;
        });
        
        const whatsappLink = `https://api.whatsapp.com/send?text=${encodeURIComponent(message)}`;
        window.open(whatsappLink, '_blank');
    });
    window.onload = function() {
    updateCartDisplay(); // localStorage'dan cart'ı güncelle
};

</script>
