<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add to Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/tiny-slider.js">
    <link rel="stylesheet" href="js/custom.js">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	    <style>
            body {
    background-color: #f0f0f0; 
}
.container {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
}

table {
    width: 100%;
}

td, th {
    padding: 15px;
    vertical-align: middle;
}

thead {
    background-color: #f8f9fa;
}

.total-row {
    font-weight: bold;
}

.btn {
    margin-right: 10px;
    transition: transform 0.2s ease-in-out;
    font-size: 14px;
    padding: 8px 12px; 
}

.btn:hover {
    transform: scale(1.1);
}

.product-image {
    max-width: 100px;
    height: auto;
    display: block;
    margin: 0 auto;
}

.btn-success {
    background-color: green;
    color: white;
}

.btn-danger {
    background-color: red;
    color: white;
}

.btn-info {
    background-color: blue;
    color: white;
}

.btn-success::before {
    content: "\f00c"; 
    font-family: FontAwesome;
    margin-right: 5px;
}

.btn-danger::before {
    content: "\f1f8"; 
    font-family: FontAwesome;
    margin-right: 5px;
}

.btn-info::before {
    content: "\f07a"; 
    font-family: FontAwesome;
    margin-right: 5px;
}

@media (max-width: 767px) {
    .btn {
        font-size: 12px; 
        padding: 6px 10px; 
    }
}
    </style>
</head>
<script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
    </script>
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
                <li class="nav-item">
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
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
                <li class="nav-item active">
    <a class="nav-link" href="view_cart.php">
        <i class="fa-solid fa-cart-plus fa-beat-fade" style="color: #000000;"></i>
        <span><?php echo count($_SESSION['cart']); ?></span>
    </a>
</li>
            </ul>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container">
    <h1 class="page-header text-center">Cart Details</h1>
    <div class="row">
        <div class="col-12">
            <?php 
            if(isset($_SESSION['message'])){
                ?>
                <div class="alert alert-info text-center">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
                unset($_SESSION['message']);
            }
            ?>
            <form method="POST" action="save_cart.php">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;

                            if(!empty($_SESSION['cart'])){
                       
                                $conn = new mysqli('localhost', 'root', '', 'phpcrud');
    
                                $index = 0;

                                if(!isset($_SESSION['qty_array'])){
                                    $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
                                }

                                $sql = "SELECT * FROM tblusers WHERE id IN (".implode(',',$_SESSION['cart']).")";
                                $query = $conn->query($sql);

                                while($row = $query->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="delete_item.php?id=<?php echo $row['ID']; ?>&index=<?php echo $index; ?>" class="btn btn-danger btn-sm"><i class=""></i></a>
                                        </td>
                                        <td><img src="admin/functions/profilepics/<?php echo $row['ProfilePic']; ?>" class="product-image" alt="Product Image"><h6><?php echo $row['Address']; ?></h6></td>
                                        <td><?php echo $row['FirstName']; ?></td>
                                        <td><span>$ </span><?php echo number_format($row['MobileNumber'], 2); ?></td>
                                        <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                                        <td>
                                            <select class="form-control qty-dropdown" data-index="<?php echo $index; ?>">
                                                <?php for($i = 1; $i <= 10; $i++): ?>
                                                    <option value="<?php echo $i; ?>" <?php if ($_SESSION['qty_array'][$index] == $i) echo 'selected'; ?>><?php echo $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </td>
                                        <td><span class="sub-total" data-price="<?php echo $row['MobileNumber']; ?>"><?php echo number_format($_SESSION['qty_array'][$index]*$row['MobileNumber'], 2); ?></span></td>
                                        <?php $total += $_SESSION['qty_array'][$index]*$row['MobileNumber']; ?>
                                    </tr>
                                    <?php
                                    $index++;
                                }
                            }
                            else{
                                ?>
                                <tr>
                                    <td colspan="7" class="text-center">You haven't added any items to the cart yet</td>
                                </tr>
                                <?php
                            }
                            ?>
                            <tr class="total-row">
                                <td colspan="5" align="right"><b>Total</b></td>
                                <td><b><span id="cart-total"><?php echo number_format($total, 2); ?></span></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <?php if(count($_SESSION['cart']) > 0): ?>
                <button type="submit" class="btn btn-success" name="save"><i class="fas fa-save"></i> Save Changes</button>
                <a href="test.php" class="btn btn-success" name="seethis"><i class="fas fa-eye"></i> View</a>
                <a href="clear_cart.php" class="btn btn-danger" data-toggle="modal" data-target="#clearCartModal">Clear Cart</a>
                <a href="checkout.php" class="btn btn-info"><i class="fas fa-check"></i> Proceed To Checkout</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('change', '.qty-dropdown', function() {
        var index = $(this).data('index');
        var qty = $(this).val();
        var price = $('.sub-total[data-price]').eq(index).data('price');
        var subTotal = qty * price;
        $('.sub-total').eq(index).text(subTotal.toFixed(2));

        var total = 0;
        $('.sub-total').each(function() {
            total += parseFloat($(this).text());
        });
        $('#cart-total').text(total.toFixed(2));
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>