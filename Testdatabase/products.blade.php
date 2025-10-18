<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Products - KayaBoys</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kayanavigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kayacontact.css') }}">
</head>
<body>
    @include('layout.kayanavigation')

    <section class="kaya-hero">
        <div class="container">
        </div>
    </section>

    <section class="kaya-about">
        <div class="container">
            <h2 class="kaya-section-title">Our Products</h2>
            <p>KayaBoys adalah penyedia sandwich to-go yang menawarkan 27 variant rasa, terdiri dari 15 variant manis dan 12 variant asin. Setiap sandwich dibuat dengan roti panggang berkualitas tinggi yang lembut di dalam dan renyah di luar, diisi dengan berbagai pilihan isian yang lezat. Produk ini dikemas secara praktis dan higienis, memudahkan pelanggan untuk menikmatinya di mana saja dan kapan saja.</p>
        </div>
    </section>

    <!-- products-->
    <section class="kaya-products">
        <div class="container">
            <h2 class="kaya-section-title">Varian Rasa</h2>
            
            <!-- Sweet-->
            <div class="mb-5">
                <h3 class="kaya-category-title sweet-category">Sweet Variants</h3>
                <div class="kaya-scroll-container">
                    @foreach($sweetProducts as $product)
                    <div class="card kaya-product-card">
                        <div class="kaya-product-image" style="background-image: url('{{ $product->image_path }}');">
                        </div>
                        <div class="kaya-product-body">
                            <h5 class="kaya-product-name">{{ $product->name }}</h5>
                            <p class="kaya-product-desc">{{ $product->description }}</p>
                            <span class="kaya-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Savory-->
            <div class="mb-5">
                <h3 class="kaya-category-title savory-category">Savory Variants</h3>
                <div class="kaya-scroll-container">
                    @foreach($savoryProducts as $product)
                    <div class="card kaya-product-card">
                        <div class="kaya-product-image" style="background-image: url('{{ $product->image_path }}');">
                        </div>
                        <div class="kaya-product-body">
                            <h5 class="kaya-product-name">{{ $product->name }}</h5>
                            <p class="kaya-product-desc">{{ $product->description }}</p>
                            <span class="kaya-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--advantage-->
    <section class="kaya-advantages">
        <div class="container">
            <h2 class="kaya-section-title">Keunggulan KayaBoys</h2>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="kaya-advantage-item">
                        <div class="kaya-advantage-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h5>Bahan Berkualitas</h5>
                        <p>Menggunakan roti dan isian dengan bahan-bahan pilihan terbaik untuk memastikan rasa dan tekstur yang memuaskan.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kaya-advantage-item">
                        <div class="kaya-advantage-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h5>Variasi Rasa</h5>
                        <p>Pilihan rasa yang beragam memungkinkan pelanggan untuk mencoba berbagai kombinasi sesuai selera.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kaya-advantage-item">
                        <div class="kaya-advantage-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <h5>Kemasan Praktis</h5>
                        <p>Didesain untuk memudahkan pelanggan membawa dan mengonsumsi sandwich di mana saja.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kaya-advantage-item">
                        <div class="kaya-advantage-icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h5>Harga Terjangkau</h5>
                        <p>Menawarkan produk berkualitas dengan harga yang ramah di kantong.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layout.kayacontact')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>