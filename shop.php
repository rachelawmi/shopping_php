    <?php include('connection.php') ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fashion / Center</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-icons.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
 <!-- Header -->
   
    <!-- Hero Section -->
    <section class="hero">
        <h2>Welcome to Fashion Shop</h2>
        <p>Find your favorite clothes at the best prices.</p>
        <a href="contact.php" class="btn">Shop Now</a>
    </section>

    <body class="bg-light">

        <?php include('navbar.php') ?>

<style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #f5f5f5;
    color: #333;
}

header {
    background: #111;
    color: white;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 {
    font-size: 28px;
}

nav a {
    color: white;
    text-decoration: none;
    margin-left: 25px;
}

nav a:hover {
    color: gray;
}

.hero {
    text-align: center;
    padding: 100px 20px;
    background: white;
}

.hero h2 {
    font-size: 40px;
    margin-bottom: 15px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 25px;
}

.button {
    display: inline-block;
    background: pink;
    color: white;
    padding: 12px 25px;
    text-decoration: none;
    border-radius: 5px;
}

.brands {
    padding: 50px;
    text-align: center;
}

.brands h2 {
    font-size: 32px;
    margin-bottom: 30px;
}

.brand-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    max-width: 1000px;
    margin: auto;
}

.brand-card {
    background: white;
    padding: 35px 20px;
    border-radius: 10px;
    box-shadow: 0 3px 10p pink;
}

.brand-card h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.brand-card p {
    color: #777;
    margin-bottom: 20px;
}

.brand-card button {
    background: pink;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 5px;
    cursor: pointer;
}

.brand-card button:hover {
    background: gray;
}

footer {
    background: pink;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
}

@media (max-width: 768px) {
    .brand-container {
        grid-template-columns: 1fr;
    }

    header {
        flex-direction: column;
        gap: 15px;
    }
}
</style>       

        <header class="py-5 bg-white border-bottom mt-5">
            <div class="container pt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{% url 'index' %}">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ol>
                </nav>
            </div>
        </header>

        <main class="container py-5">
            <div class="row">
                <aside class="col-lg-3 d-none d-lg-block">
                    <div class="filter-section mb-4">
                        <h5 class="fw-bold mb-3">Categories</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/product.php/" class="text-decoration-none text-secondary">payment</a>
                            </li>
                            <li class="mb-2"><a href="/product.php/" class="text-decoration-none text-secondary">keypay</a></li>
                            <li class="mb-2"><a href="/product.php/" class="text-decoration-none text-secondary">credit card</a>
                            </li>
                            <li class="mb-2"><a href="/product.php/" class="text-decoration-none text-secondary">delivery</a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-section mb-4">
                        <h5 class="fw-bold mb-3">Price Range</h5>
                        <input type="range" class="form-range" min="0" max="1000" id="priceRange">
                        <div class="d-flex justify-content-between text-secondary mt-2">
                            <span>1000mmk</span>
                            <span>10,0000mmk</span>
                        </div>
                    </div>

                    <div class="filter-section">
                        <h5 class="fw-bold mb-3">Rating (8/10)</h5>
                        <div class="fbaseorm-check mb-2">
                            <input class="form-check-input" type="checkbox" id="star4">
                            <label class="form-check-label text-secondary" for="star4">4 Stars & Up</label>
                        </div>
                    </div>
                </aside>

                <div class="col-lg-9">
                    <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded-3 shadow-sm">
                        <p class="mb-0 text-secondary">Showing 1-9 of 24 results</p>
                        <form method="GET">
                            <select class="form-select w-auto border-0 bg-light" name="order" onchange="this.form.submit()">
                                <option selected>Connected Brands </option>
                                <option>Dior</option>
                                <option>Chanel</option>
                                <option>Louis vuitton</option>
                                <option>Nike</option>
                                <option>Zara</option>
                                <option>Gucci</option>
                            <option>Calvin Klevin</option>
                            <option>Apple</option>
                           <option>Adidas</option>
                               <option>Prada</option>
                               <option>More...<option>

                            </select>
                        </form>
                    </div>

    <style>
        body {
            font-family: Arial;
            background-color: #f5f5f5;
            margin: 0;
        }

        header {
            background-color: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .products {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 40px;
        }

        .product {
            background-color: white;
            width: 200px;
            padding: 20px;
            text-align: center;
        }

        .product img {
            width: 180px;
            height: 180px;
            object-fit: cover;
        }

        button {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<!-- <body>

<header>
    <h1>My Clothing Shop</h1>
    <p>Enjoy our services</p>
</header>

<div class="products">

    <div class="product">
        <img src="images.box/Clothing shop logo to _ I_D FASHION STORE_.jpg">
        <h2>T-Shirt</h2>
        <p>$15</p>
        <button>Buy Now</button>
    </div>

    <div class="product">
        <img src="images.box/shopping profile.jpg">
        <h2>Shoes</h2>
        <p>$40</p>
        <button>Buy Now</button>
    </div>

    <div class="product">
        <img src="images.box/Logo design for a bag and accessories brand.jpg">
        <h2>Bag</h2>
        <p>$25</p>
        <button>Buy Now</button>
    </div>
 <div class="product">
        <img src="images.box/Accessories brand logo.jpg">
        <h2>Accessories</h2>
        <p>$15</p>
        <button>Buy Now</button>
    </div>

</div>
 -->

                    <!-- <div class="row g-4">
                        <div class="col-md-6 col-xl-4">
                            <div class="card h-100 border-0 shadow-sm product-card">
                                <div class="position-relative overflow-hidden">
                                    <span class="badge bg-primary position-absolute m-3 top-0 start-0 z-1">New Shopping</span>
                                    <img src="images.box/Grupo VIP de Achadinhos do Lar.jpg" class="card-img-top p-2 rounded-4" alt="Product">
                                    <div class="product-actions d-flex flex-column gap-2">
                                        <a href="" class="btn btn-white shadow-sm"><i class="bi bi-cart"></i></a>
                                        <a class="btn btn-white shadow-sm"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div> -->
                             
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        /* header {
            background-color: #222;
            color: white;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            color: #ff69b4;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
        }

        nav a:hover {
            color: #ff69b4;
        } */

        .hero {
            text-align: center;
            padding: 80px 20px;
            background-color: #ffe4ef;
        }

        .hero h2 {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .btn {
            background-color: #ff69b4;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
        }

        
    </style>
    <section class="hero">
        <h2>Best Seller Fashion Brands 2026</h2>
        <p>Discover the latest fashion from popular brands.</p>
        <a href="shop.html" class="button">Shop Now</a>
    </section>

    <section class="brands">
        <h2>Best-Selling Brands</h2>

        <div class="brand-container">

            <div class="brand-card">
                <h3>Chanel</h3>
                <p>Luxury Fashion</p>
                <button>View Collection</button>
            </div>

            <div class="brand-card">
                <h3>Louis Vuitton</h3>
                <p>Luxury Fashion</p>
                <button>View Collection</button>
            </div>

            <div class="brand-card">
                <h3>Nike</h3>
                <p>Sportswear</p>
                <button>View Collection</button>
            </div>

            <div class="brand-card">
                <h3>UNIQLO</h3>
                <p>Casual Fashion</p>
                <button>View Collection</button>
            </div>

            <div class="brand-card">
                <h3>Zara</h3>
                <p>Fast Fashion</p>
                <button>View Collection</button>
            </div>

            <div class="brand-card">
                <h3>Gucci</h3>
                <p>Luxury Fashion</p>
                <button>View Collection</button>
            </div>

        </div>
    </section>

    <footer>
        <p>© 2026 Fashion Store. All Rights Reserved.</p>
    </footer>

    
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

    </html>