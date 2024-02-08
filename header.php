<?php
	session_start();
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .navbar {
            background-color: #333;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .nav-link {
            color: black !important;
            margin-right: 20px;
        }

        .navbar-toggler {
            border: none;
        }
        .navbar .navbar-brand {
            display: flex;
            align-items: center;
        }
        @media (max-width: 992px) {
            .navbar-nav {
                text-align: center;
            }

            .nav-link {
                margin: 10px 0;
            }
        }
        @media (max-width: 768px) {
            .navbar-nav {
                text-align: left;
            }

            .navbar-toggler {
                display: block;
            }

            .navbar-collapse {
                display: none;
            }

            .navbar-toggler.collapsed ~ .navbar-collapse {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="images/sandarublack.png" alt="Your Logo" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="custom_product.php">Custom Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php ">About Us</a>
                </li>
                <li><a href="view_cart.php"><span class="fa-solid fa-cart-plus fa-beat-fade" style="color: #000000;"><?php echo count($_SESSION['cart']); ?></span></li>
            </ul>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
