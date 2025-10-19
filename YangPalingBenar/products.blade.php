<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Products - KayaBoys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- link CSS-->
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>

<body>


    <section class="kaya-hero">
        <div class="container">
        </div>
    </section>

    <section class="kaya-about">
        <div class="container">
            <h2 class="kaya-section-title">Our Products</h2>
            <p>KayaBoys adalah penyedia sandwich to-go yang menawarkan 27 variant rasa, terdiri dari 15 variant manis
                dan 12 variant asin. Setiap sandwich dibuat dengan roti panggang berkualitas tinggi yang lembut di dalam
                dan renyah di luar, diisi dengan berbagai pilihan isian yang lezat. Produk ini dikemas secara praktis
                dan higienis, memudahkan pelanggan untuk menikmatinya di mana saja dan kapan saja.</p>
        </div>
    </section>
    <!-- list produk -->
    <section class="kaya-products">
        <div class="container">
            <h2 class="kaya-section-title">Varian Rasa</h2>

            <!-- Sweet-->
            <div class="mb-5">
                <h3 class="kaya-category-title sweet-category">Sweet Variants</h3>
                <div class="kaya-scroll-container">
                    @foreach ($sweetProducts as $product)
                        <div class="card kaya-product-card">
                            <div class="kaya-product-image"
                                style="background-image: url('{{ $product->image_path }}');">
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
                    @foreach ($savoryProducts as $product)
                        <div class="card kaya-product-card">
                            <div class="kaya-product-image"
                                style="background-image: url('{{ $product->image_path }}');">
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

    <!--unggulan-->
    <section class="kaya-advantages">
        <div class="container">
            <h2 class="kaya-section-title">KayaBoys Advantages</h2>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="kaya-advantage-item">
                        <h5>Quakity Ingredietns</h5>
                        <p>Using bread and fillings with the best selected ingredients to ensure satisfying taste and
                            texture.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kaya-advantage-item">
                        <h5>Varying Tastes</h5>
                        <p>The wide selection of flavors allows customers to try various combinations to suit their
                            tastes.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kaya-advantage-item">
                        <h5>Practical Packaging</h5>
                        <p>Designed to make it easy for customers to carry and consume sandwiches anywhere.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kaya-advantage-item">
                        <h5>Affordable Prices</h5>
                        <p>Offering quality products at Affordable prices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
