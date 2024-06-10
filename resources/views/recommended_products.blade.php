<!-- resources/views/recommended_products.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SkinRec: Skincare Recommendation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link rel="apple-touch-icon" href="../assets/img/favicon.png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <style>
        .product {
            display: flex;
            align-items: center;
            padding: 2%;
            /* Changed from px to % */
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            margin-bottom: 1%;
            /* Changed from px to % */
            /* margin-left: 5%; */
            /* Changed from px to % */
            background-color: #f7f9fc;
        }

        .product-details {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            padding-right: 5%;
            /* Changed from px to % */
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #dcdcdc;
            padding-bottom: 1%;
            /* Changed from px to % */
            margin-bottom: 1%;
            /* Changed from px to % */
        }

        .product-header div {
            flex: 1;
            text-align: center;
        }

        .product-header div:first-child {
            text-align: left;
        }

        .product-header div:last-child {
            text-align: right;
        }

        .product-header .rating {
            color: #ffcc00;
        }

        .product-details p {
            text-align: justify;
            margin: 0;
            padding-top: 1%;
            /* Changed from px to % */
        }

        .price {
            font-size: 1.2em;
            color: #ff9900;
            font-weight: bold;
            text-align: center;
            border-left: 1px solid #dcdcdc;
            padding-left: 2%;
            /* Changed from px to % */
        }

        .product img {
            width: 10%;
            /* Changed from px to % */
            height: auto;
            /* Keep aspect ratio */
            object-fit: cover;
            border-radius: 5px;
            margin-left: 2%;
            /* Changed from px to % */
        }
    </style>

<body>

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="#hero" class="logo d-flex align-items-center me-auto">
                <img src="../assets/img/logo.png" alt="LOGO">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="">Home</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <section id="hero" class="hero section">
        <div class="hero-bg">
            <img src="../assets/img/hero-bg-light.webp" alt="">
        </div>
        <div class="container">
            
        @if(isset($recommendedProducts) && count($recommendedProducts) > 0)
                <div class="container">
                    <h3 class="mt-5">Recommended Products</h3>
                    @foreach($recommendedProducts as $product)
                        <div class="product">
                            <div class="product-details">
                                <div class="product-header">
                                    <div>Product Name: {{ $product['product_name'] }}</div>
                                    <div>Category: {{ $product['category_name'] }}</div>
                                    <div>Rating: {{ $product['rating'] }}</div>
                                </div>
                                <p>Deskripsi: {{ $product['description'] }}</p>
                            </div>
                            <div class="price">Rp. {{ $product['price'] }}</div>
                            <img src="{{ $product['picture_src'] }}" alt="Image Product" style="width: 200px; height: auto">
                        </div>
                    @endforeach
                </div>
        @else
            <h3 class="mt-5">No products found.</h3>
        @endif

    </section>
</body>

</html>