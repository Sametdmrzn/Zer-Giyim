<?php
session_start();
?>

<?php include 'header.php'; ?>

<!-- Ana İçerik -->
<div class="container mt-5">



    <h1>Sepetiniz</h1>

    <!-- Sepet Bilgisi -->
    <ul id="cart-list" class="list-group mb-4"></ul>

    <?php if (!empty($_SESSION['sepet'])): ?>
        <ul>
            <?php foreach ($_SESSION['sepet'] as $urun): ?>
                <li><?php echo $urun['isim']; ?> - <?php echo $urun['fiyat']; ?> TL</li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Sepetinizde ürün bulunmamaktadır.</p>
    <?php endif; ?>

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
        cart.forEach((product, index) => {
            const cartItem = `
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <img src="${product.image}" alt="${product.name}" style="width: 50px; height: auto; margin-right: 10px;">
                        ${product.name} - ${product.price} TL
                    </div>
                    <button class="remove-btn btn btn-danger btn-sm" data-index="${index}">Sil</button>
                </li>
            `;
            cartList.innerHTML += cartItem; // Sepet öğesini ekle
        });
    }

    // Sayfa yüklendiğinde sepeti güncelle
    window.onload = function() {
        updateCartDisplay();
    };

    // Silme butonu için olay dinleyici
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-btn')) {
            const index = event.target.getAttribute('data-index');

            // Sepetten ürünü sil
            cart.splice(index, 1); // Ürünü sil
            localStorage.setItem('cart', JSON.stringify(cart)); // Güncellenmiş sepeti kaydet

            updateCartDisplay(); // Sepeti güncelle
        }
    });

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
</script>
