<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products | Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="bg-light">

    <?php include('navbar.php') ?>
<style>
   
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


        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-white">
                        <tr>
                            <th class="ps-4 py-3 text-secondary">Product</th>
                            <th class="py-3 text-secondary">Category</th>
                            <th class="py-3 text-secondary">Price</th>
                            <th class="py-3 text-secondary text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                
                        <!-- Start your loop -->
                          <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
                         .products {
            padding: 50px;
            text-align: center;
        }

        .products h2 {
            margin-bottom: 30px;
        }

        .product-container {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .product {
            background-color: white;
            width: 250px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px #ccc;
        }

        .product img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product h3 {
            margin: 15px 0 10px;
        }

        .price {
            color: #ff69b4;
            font-weight: bold;
            margin-bottom: 15px;
        }
        </style>
        
        <section class="products">
        <h2>Our Products</h2>

        <div class="product-container">

            <div class="product">
                <img src="images.box/249386898112392602.jpg" alt="T-Shirt">
                <h3>Men Shop</h3>
                <p class="price">25,000 MMK</p>
                <a href="#" class="btn">Add to get</a>
            </div>

            <div class="product">
                <img src="images.box/Women S Clothing Logo Design Template Download on Pngtree.jpg" alt="Dress">
                <h3>Women Shop</h3>
                <p class="price">45,000 MMK</p>
                <a href="#" class="btn">Add to get</a>
            </div>

            <div class="product">
                <img src="images.box/409546159886577742.jpg" alt="Bag">
                <h3>Baby Shop</h3>
                <p class="price">5,000 MMK</p>
                <a href="#" class="btn">Add to get</a>
            </div>

        </div>
    </section>


                      <!-- <a href = "https://www.youtube.com/"  > <li><h1>Best Seller</h1></a>
                                    <ul>
                                    <li>Electronics & Tech Accessories</li>
                                    <li>Beauty & Skincare</li>
                                     <li>Health & Wellness</li>
                                    <li>Home & Lifestyle</li>
                                    <li>Everyday Essentials</li>
                                </ul></li>
                                </ul> -->
                                <a href="product_update.php" class="btn btn-light btn-sm rounded-3 me-1"><i class="bi bi-pencil text-primary"></i></a>
                                <a href="product_delete.php" class="btn btn-light btn-sm rounded-3"><i class="bi bi-trash text-danger"></i></a>
                            </td>
                        </tr>
                         <button class="btn btn-primary-custom px-4 py-2" data-bs-toggle="modal" data-bs-target="#addProductModal">
                <i class="bi bi-plus-lg me-2"></i> Add New Product
            </button>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-12">
                <div class="p-3 bg-white rounded-4 shadow-sm border-0">
                    <small class="text-secondary text-uppercase fw-bold">Total Products</small>
                    <h3 class="fw-bold mb-0">Feedback</h3>
                </div>
            </div>
        </div>
         <div class="col-3">
                            <textarea class="form-control bg-transparent text-white" rows="4" placeholder="Message..."></textarea>
                        </div>
         </tbody>
                </table>
            </div>
        </div>
    </div>

   

                        <!-- End loop -->
                    
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 rounded-4 shadow">
                <div class="modal-header border-0 px-4 pt-4">
                    <h5 class="fw-bold">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4">
                    <!-- Start Form add method and input names -->
                    <form>
                        <div class="row g-3">
                            <div class="col-md-8">
                                <label class="form-label small fw-bold">online shopping</label>
                                <input type="text" class="form-control rounded-3 color-primary" placeholder="shopping" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small fw-bold">1000mmk</label>
                                <input type="number" class="form-control rounded-3" placeholder="0.00" step="0.01" require>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label small fw-bold">quality of us</label>
                                <input type="number" class="form-control rounded-3" placeholder="0">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold">prenium view</label>
                                <textarea class="form-control rounded-3" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold">Product Image</label>
                                <input type="file" name="image" class="form-control rounded-3">
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary-custom w-100 py-3">Save Product</button>
                            </div>
                            <img src = "images.box/329185054035084169 - Copy (2).jpg width = 50% display-flex pad-20%">
                        </div>
                    
                    </form>
                    <!-- End form -->
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>