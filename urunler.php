<?php include 'header.php'; ?>

<!-- Ana İçerik -->
<div class="container mt-5">

       <!-- Alt Navbar (Kategoriler) -->
       <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid justify-content-center"> <!-- Centering the nav links -->
            <ul class="navbar-nav mx-auto"> <!-- mx-auto ile merkezle -->
                <li class="nav-item">
                    <a class="nav-link" href="urunler.php?category=Kategori1">Desenli Eşarp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="urunler.php?category=Kategori2">Dijital Eşarp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="urunler.php?category=Kategori3">Bone Çeşitleri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="urunler.php?category=Kategori3">El Yüz Havlusu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="urunler.php?category=Kategori3">Mutfak Havlusu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="urunler.php?category=Kategori3">Ayak Havlusu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="urunler.php?category=Kategori3">Kolluk</a>
                </li>
                <!-- Diğer kategorileri buraya ekleyin -->
            </ul>
        </div>
    </nav>
    
    
    <!-- Ürünler Listesi -->
    <div id="product-list" class="row"></div>

    <!-- Sepeti WhatsApp ile Gönder Butonu -->
    <button id="checkout-btn" class="btn btn-success mt-4">Sepeti WhatsApp ile Gönder</button>
</div>

<?php include 'footer.php'; ?>

<!-- JavaScript Kısmı -->
<script>
    // Ürünleri ve kategorileri tanımlama
    const products = {
    Kategori1: [
        { name: "Ürün 1", price: 100, image: "assets/deneme.jpg" }, // Dosya yolunu güncelle
        { name: "Ürün 2", price: 150, image: "C:/wamp64/www/Zer-Giyim/assets/product2.jpg" }
    ],
    Kategori2: [
        { name: "Ürün 3", price: 200, image: "C:/wamp64/www/Zer-Giyim/assets/product3.jpg" },
        { name: "Ürün 4", price: 250, image: "C:/wamp64/www/Zer-Giyim/assets/product4.jpg" }
    ],
    Kategori3: [
        { name: "Ürün 5", price: 300, image: "C:/wamp64/www/Zer-Giyim/assets/product5.jpg" },
        { name: "Ürün 6", price: 350, image: "C:/wamp64/www/Zer-Giyim/assets/product6.jpg" }
    ]
};

    let cart = []; // Sepet dizisi

    // Sayfa yüklendiğinde kategori parametresini kontrol et
    const urlParams = new URLSearchParams(window.location.search);
    const category = urlParams.get('category');
    if (category && products[category]) {
        displayProducts(category); // Kategoriye ait ürünleri görüntüle
    } else {
        // İlk kategori varsayılan olarak gösterilebilir
        displayProducts('Kategori1'); // Varsayılan kategori
    }

    // Ürünleri görüntüleme fonksiyonu
    function displayProducts(category) {
        const productList = document.getElementById('product-list');
        productList.innerHTML = ''; // Önceki ürünleri temizle

        // Kategorinin ürünlerini listele
        products[category].forEach(product => {
            const productCard = `
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="${product.image}" class="card-img-top" alt="${product.name}">
                        <div class="card-body">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text">${product.price} TL</p>
                            <button class="btn btn-primary add-to-cart" data-name="${product.name}" data-price="${product.price}" data-image="${product.image}">Sepete Ekle</button>
                        </div>
                    </div>
                </div>
            `;
            productList.innerHTML += productCard; // Ürün kartını ekle
        });

        // Sepete ekleme fonksiyonu
        attachAddToCartListeners();
    }

    // Sepete ekleme fonksiyonu
    function attachAddToCartListeners() {
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const product = {
                    name: this.getAttribute('data-name'),
                    price: this.getAttribute('data-price'),
                    image: this.getAttribute('data-image')
                };
                cart.push(product); // Ürünü sepete ekle
                alert(`${product.name} sepete eklendi!`);
            });
        });
    }

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
        window.open(whatsappLink, '_blank'); // WhatsApp bağlantısını aç
    });
</script>

<!-- CSS Kısmı -->
<style>
    .navbar-nav {
        flex-direction: row; /* Navbar öğelerini yatay olarak hizala */
        justify-content: center; /* Öğeleri merkezle */
    }
    .nav-item {
        margin: 0 15px; /* Her bir nav-item arasına boşluk ekle */
    }
</style>
