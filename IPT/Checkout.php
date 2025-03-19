<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="styles/check.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include 'navbar.php';?>
<?php include 'modal.php';?>


    <div class="cart cart-wrapper">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-8">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0 text-light">Shopping Cart</h4>
                        <span class="text-light">3 items</span>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="product-card p-3 shadow-sm text-bg-light">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="styles/images/last.jpg" alt="Product" class="product-image">
                                </div>
                                <div class="col-md-4">
                                    <h6 class="mb-1">The Last of Us Part I</h6>
                                    <p class="text-muted mb-0">Pc | Console</p>
                                    <span class="discount-badge mt-2">20% OFF</span>
                                </div>
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-2">
                                    <span class="fw-bold">$49.99</span>
                                </div>
                                <div class="col-md-1">
                                    <i class="bi bi-trash remove-btn"></i>
                                </div>
                            </div>
                        </div>

        
                        <div class="product-card p-3 shadow-sm text-bg-light">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="styles/images/unc.jpg" alt="Product" class="product-image">
                                </div>
                                <div class="col-md-4">
                                    <h6 class="mb-1">Uncharted 4: A Thief's End</h6>
                                    <p class="text-muted mb-0">Pc | Console 7</p>
                                </div>
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-2">
                                    <span class="fw-bold">$49.99</span>
                                </div>
                                <div class="col-md-1">
                                    <i class="bi bi-trash remove-btn"></i>
                                </div>
                            </div>
                        </div>

        
                        <div class="product-card p-3 shadow-sm text-bg-light">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="styles/images/god.jpg" alt="Product" class="product-image">
                                </div>
                                <div class="col-md-4">
                                    <h6 class="mb-1">God of War Ragnarök</h6>
                                    <p class="text-muted mb-0">Console | Pc</p>
                                </div>
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-2">
                                    <span class="fw-bold">$59.99</span>
                                </div>
                                <div class="col-md-1">
                                    <i class="bi bi-trash remove-btn"></i>
                                </div>
                                
                            </div>
                        
                        </div>
                        
                    </div>
                    <div class="text-start mb-4 p-3">
                <a href="landingpage.php" class="btn btn-outline-danger">
                    <i class="bi bi-arrow-left me-2"></i>Continue Shopping
                </a>
                    </div>
                </div>
                

  
                <div class="col-lg-4">
                    <div class="summary-card p-4 shadow-sm">
                        <h5 class="mb-4">Order Summary</h5>
                        
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Subtotal</span>
                            <span class="text-dark">$133.97</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Discount</span>
                            <span class="text-success">-$26.00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Shipping</span>
                            <span class="text-dark">$5.00</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold text-dark">Total</span>
                            <span class="fw-bold text-dark">$138.97</span>
                        </div>
                        <div class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <button class="btn btn-outline-secondary" type="button">Apply</button>
                            </div>
                        </div>

                        <button class="btn btn-primary checkout-btn w-100 mb-3">
                            Proceed to Checkout
                        </button>
                        
                        <div class="d-flex justify-content-center gap-2">
                            <i class="bi bi-shield-check text-success"></i>
                            <small class="text-muted">Secure checkout</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <br><br><br><br><br><br>

</body>
<?php include 'footer.php';?>
</html>




















<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="styles/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container py-5">
    <h1 class="mb-5">Your Shopping Library</h1>
    <div class="row">
        <div class="col-lg-8 ">
            <div class="card mb-4">
                <div class="card-body ">
                    <div class="row cart-item mb-3">
                        <div class="col-md-3">
                            <img src="styles/images/god.jpg" alt="Product 1" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5">
                            <h5 class="card-title">God of War Ragnarok</h5>
                            <p class="text-muted">Category: Console/Pc</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary btn-sm" type="button">-</button>
                                <input style="max-width:100px" type="text" class="form-control  form-control-sm text-center quantity-input" value="1">
                                <button class="btn btn-outline-secondary btn-sm" type="button">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <p class="fw-bold">$59.99</p>
                            <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                        </div>
                    </div>
                    <hr>
                    <div class="row cart-item">
                        <div class="col-md-3">
                            <img src="styles/images/last.jpg" alt="Product 2" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5">
                            <h5 class="card-title">The Last of Us Part I</h5>
                            <p class="text-muted">Category: Console/Pc</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary btn-sm" type="button">-</button>
                                <input style="max-width:100px" type="text" class="form-control form-control-sm text-center quantity-input" value="2">
                                <button class="btn btn-outline-secondary btn-sm" type="button">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <p class="fw-bold">$49.99</p>
                            <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="text-start mb-4">
                <a href="landingpage.php" class="btn btn-outline-danger">
                    <i class="bi bi-arrow-left me-2"></i>Continue Shopping
                </a>
            </div>
        </div>
        <div class="col-lg-4">

            <div class="card cart-summary">
                <div class="card-body">
                    <h5 class="card-title mb-4">Order Summary</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Subtotal</span>
                        <span>$199.97</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Shipping</span>
                        <span>$10.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Tax</span>
                        <span>$20.00</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-4">
                        <strong>Total</strong>
                        <strong>$229.97</strong>
                    </div>
                    <button class="btn btn-danger w-100">Proceed to Checkout</button>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">Apply Promo Code</h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter promo code">
                        <button class="btn btn-outline-secondary" type="button">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
-->