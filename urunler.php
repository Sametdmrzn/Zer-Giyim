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
                        <a class="nav-link" href="urunler.php?category=Kategori3">El Yüz Havlusu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="urunler.php?category=Kategori4">Bone Çeşitleri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="urunler.php?category=Kategori5">Mutfak Havlusu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="urunler.php?category=Kategori6">Ayak Havlusu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="urunler.php?category=Kategori7">Kolluk</a>
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
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0473.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0371.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0370.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0315.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0313.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0262.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0256.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0252.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0258.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0147.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0472.jpg" }, // Dosya yolunu güncelle
            { name: "Desenli Eşarp", price: 60, image: "assets/images/A-0422.jpg" }, // Dosya yolunu güncelle

        ],
        Kategori2: [
            { name: "Dijital Fresh Eşarp", price: 175, image: "assets/images/A-0617.jpg" }, // Dosya yolunu güncelle
            { name: "P-125 Polo Craft Dijital Soft Eşarp", price: 175, image: "assets/images/P-116.jpg" }, // Dosya yolunu güncelle
            { name: "Dijital Eşarp", price: 175, image: "assets/images/P-129.jpg" }, // Dosya yolunu güncelle
            { name: "Dijital Eşarp", price: 175, image: "assets/images/N-011.jpg" }, // Dosya yolunu güncelle
            { name: "Dijital Eşarp", price: 175, image: "assets/images/N-405.jpg" }, // Dosya yolunu güncelle
            { name: "Dijital Eşarp", price: 175, image: "assets/images/N-303.jpg" }, // Dosya yolunu güncelle
            { name: "Dijital Eşarp", price: 175, image: "assets/images/N-403.jpg" }, // Dosya yolunu güncelle
            { name: "Dijital Eşarp", price: 175, image: "assets/images/N-295.jpg" }, // Dosya yolunu güncelle
            { name: "Dijital Eşarp", price: 175, image: "assets/images/N-127.jpg" }, // Dosya yolunu güncelle
            { name: "Dijital Eşarp", price: 175, image: "assets/images/N-119.jpg" }, // Dosya yolunu güncelle
    
        ],
        Kategori3: [
            { name: "El Yüz Havlusu", price: 175, image: "assets/images/O-155.jpg" }, // Dosya yolunu güncelle
            { name: "El Yüz Havlusu", price: 175, image: "assets/images/O-081.jpg" }, // Dosya yolunu güncelle
            { name: "El Yüz Havlusu", price: 175, image: "assets/images/O-043.jpg" }, // Dosya yolunu güncelle
            { name: "El Yüz Havlusu", price: 175, image: "assets/images/O-105.jpg" }, // Dosya yolunu güncelle
            { name: "El Yüz Havlusu", price: 175, image: "assets/images/O-032.jpg" }, // Dosya yolunu güncelle
            { name: "El Yüz Havlusu", price: 175, image: "assets/images/O-022.jpg" }, // Dosya yolunu güncelle

        ],
        Kategori4: [
            { name: "Bone", price: 175, image: "assets/images/ZZ-012.jpg" }, // Dosya yolunu güncelle
            { name: "Bone", price: 175, image: "assets/images/ZZ-011.jpg" }, // Dosya yolunu güncelle


        ],


        Kategori5: [
            { name: "Mutfak Havlusu", price: 175, image: "assets/images/O-029.jpg" }, // Dosya yolunu güncelle
            { name: "Mutfak Havlusu", price: 175, image: "assets/images/O-007.jpg" }, // Dosya yolunu güncelle
            { name: "Mutfak Havlusu", price: 175, image: "assets/images/O-001.jpg" }, // Dosya yolunu güncelle
            { name: "Mutfak Havlusu", price: 175, image: "assets/images/B-537.jpg" }, // Dosya yolunu güncelle
            { name: "Mutfak Havlusu", price: 175, image: "assets/images/B-535.jpg" }, // Dosya yolunu güncelle
            { name: "Mutfak Havlusu", price: 175, image: "assets/images/B-541.jpg" }, // Dosya yolunu güncelle
            { name: "B-531 40*60 Baskılı Mutfak Havlusu", price: 175, image: "assets/images/B-531.jpg" }, // Dosya yolunu güncelle
            { name: "B-322 30*50 Merve Nakışlı Mutfak Havlusu", price: 100  , image: "assets/images/B-322.jpg" }, // Dosya yolunu güncelle
            { name: "B-314 30*50 Merve Nakışlı Mutfak Havlusu", price: 100  , image: "assets/images/B-314.jpg" }, // Dosya yolunu güncelle
            { name: "O-125 40*70 Ucuz Araba Havlusu", price: 100  , image: "assets/images/O-125.jpg" }, // Dosya yolunu güncelle

            
        ],
        Kategori6: [
            { name: "B-555 50*70 Mine Ayak Havlusu (Paspası)", price: 100  , image: "assets/images/B-555.jpg" }, // Dosya yolunu güncelle
            { name: "B-553 50*70 Mine Ayak Havlusu (Paspası)", price: 100  , image: "assets/images/B-553.jpg" }, // Dosya yolunu güncelle
            { name: "B-545 50*70 Mine Ayak Havlusu (Paspası)", price: 100  , image: "assets/images/B-545.jpg" }, // Dosya yolunu güncelle
            { name: "B-543 50*70 Mine Ayak Havlusu (Paspası)", price: 100  , image: "assets/images/B-543.jpg" }, // Dosya yolunu güncelle

        
        ],
        Kategori7: [
            { name: " ZZ-013 Kolluk", price: 100  , image: "assets/images/ZZ-013.jpg" }, // Dosya yolunu güncelle

        ],
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
