<?php
	session_start();
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	unset($_SESSION['qty_array']);
?>
<script>
    document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome Sandaru Wall Art Studio</title>
    <link rel="icon" type="image/x-icon" href="images/sandaru.png">
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
    .slider-image {
        transition: opacity 0.5s ease-in-out;
        max-width: 100%;
        height: auto;
    }

    @media (min-width: 768px) {
        .slider-image {
            max-width: 80%;
            height: auto;
        }
    }

    @media (min-width: 992px) {
        .slider-image {
            max-width: 60%;
            height: auto;
        }
    }

    @media (min-width: 1200px) {
        .slider-image {
            max-width: 50%;
            height: auto;
        }
    }

    @media (max-width: 767px) {
        .hero .hero-img-wrap {
            display: none;
        }
    }
.qr-code {
    position: absolute;
    bottom: 10px; 
    right: 10px; 
    padding: 10px;
    text-align: center; 
}

.qr-code img {
    max-width: 100px; 
    height: auto;
}

.footer-section {
    position: relative;
    padding-left: 140px; 
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
                <li class="nav-item">
    <a class="nav-link" href="view_cart.php">
        <i class="fa-solid fa-cart-plus fa-beat-fade" style="color: #000000;"></i>
        <span><?php echo count($_SESSION['cart']); ?></span>
    </a>
</li>
        </div>
    </nav>
    <div class="hero mt-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Modern Wall-Art <span class="d-block">Design Studio</span></h1>
                        <p class="mb-4">Transform Your Space with Stunning Canvas Wall Art Creations <br> "Sandaru
                            Wall-Art Studio"</p>

                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                                class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/slider-1.png" class="img-fluid slider-image" id="hero-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    const imageUrls = [
        'images/slider-1.png',
        'images/slider-2.png',
        'images/slider-3.png',
        'images/slider-4.png'
    ];
    let currentIndex = 0;
    const heroImage = document.getElementById('hero-image');
    function changeImage() {
        heroImage.style.opacity = 0; 
        setTimeout(() => {
            heroImage.src = imageUrls[currentIndex];
            currentIndex = (currentIndex + 1) % imageUrls.length;
            heroImage.style.opacity = 1; 
        }, 1000); 
    }
    setInterval(changeImage, 3000);
    </script>
    <div class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h4 class="mb-4 section-title">Crafted with excellent material.</h4>
                    <p class="mb-4">Elevate Your Home Decor with Uncompromising Quality: Discover the Difference of Our Premium Wood 
                        Frames and Exquisite Fabric Prints.Our devotion to delivering top-notch quality extends to our fabric prints,
                         where vibrant colors and intricate details come to life. Experience the difference of premium craftsmanship, 
                         and transform your space into a gallery of extraordinary artistry. </p>
                    <p><a href="shop.html" class="btn">Explore</a></p>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="products.php">
                        <img src="images/product/road red.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Make Your Wall Beaty Using Our Product</h3>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="gallery.php">
                        <img src="images/product/wurkaya 1 pcs.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Select any Image & make Your own Product just one click</h3>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="custom_product.php">
                        <img src="images/product/wedding.jpg	" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Make Your own Product just Contact us with You image</h3>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p>Choose <b>SANDARU CREATION</b> for an exceptional shopping experience and superior products.</p>
                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/truck.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Fast &amp; Free Shipping</h3>
                                <p>Get Your Favorites Faster with Lightning-Fast Shipping</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/cart-icon.png" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Easy to Shop</h3>
                                <p>Explore and Purchase Effortlessly for a Hassle-Free Experience</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/support.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>24/7 Support</h3>
                                <p>Always Here for You: Round-the-Clock Support for Your Convenience and Peace of Mind</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/return.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Hassle Free Returns</h3>
                                <p>Enjoy the Confidence of Easy, Hassle-Free Product Returns.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="images/wall.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="images/grid/Adishan banglow 5 pcs.jpg" alt="Untree.co">
                        </div>
                        <div class="grid grid-2"><img src="images/grid/12.jpg" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="images/grid/Last supper 4 pcs 8900.jpg" alt="Untree.co">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">We Help You Make Modern Interior Design a Canvas for Wall Art
                    </h2>
                    <p>Canvas Printed Wall Art - Elevate your space with timeless elegance. Personalize your decor
                        with
                        vibrant, durable, and easy-to-install canvas prints.</p>

                    <ul class="list-unstyled custom-list my-4">
                        <li><strong>Personalized Expression-</strong> Customize your decor with unique designs and
                            personal photos.</li>
                        <li><strong>Timeless Beauty- </strong>Canvas art adds elegance to any space, turning your
                            walls
                            into captivating works of art<br></li>
                        <li><strong>Lasting Quality-</strong> Canvas prints are durable and designed to maintain
                            their
                            beauty over time</li>
                        <li><strong>Decor-</strong> They complement a variety of interior styles, making them a
                            versatile choice for home decoration.</li>
                    </ul>
                    <p><a href="gallery.php" class="btn">Visit Gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="popular-product">
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-item-sm d-flex">
                            <div class="thumbnail">
                                <img src="images/Nilawathura.jpg" alt="Product 1" class="img-fluid">
                            </div>
                            <div class="pt-3">
                                <h3>Nordic Chair</h3>
                                <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio.</p>
                                <p><a href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item-sm d-flex">
                            <div class="thumbnail">
                                <img src="images/Sai art.jpg" alt="Product 2" class="img-fluid">
                            </div>
                            <div class="pt-3">
                                <h3>Kruzo Aero Chair</h3>
                                <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio.</p>
                                <p><a href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item-sm d-flex">
                            <div class="thumbnail">
                                <img src="images/rotw.jpg" alt="Product 3" class="img-fluid">
                            </div>
                            <div class="pt-3">
                                <h3>Ergonomic Chair</h3>
                                <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio.</p>
                                <p><a href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item-sm d-flex">
                            <div class="thumbnail">
                                <img src="images/product/ajith koia.jpg" alt="Product 2" class="img-fluid">
                            </div>
                            <div class="pt-3">
                                <h3>Kruzo Aero Chair</h3>
                                <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio.</p>
                                <p><a href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item-sm d-flex">
                            <div class="thumbnail">
                                <img src="images/product/akka 1 pcs 1500.jpg" alt="Product 2" class="img-fluid">
                            </div>
                            <div class="pt-3">
                                <h3>Kruzo Aero Chair</h3>
                                <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio.</p>
                                <p><a href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var mySwiper = new Swiper(".swiper-container", {
            loop: true, 
            slidesPerView: 1,
            spaceBetween: 30, 
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: false, 
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3, 
                },
            },
        });
        var productSection = document.querySelector(".popular-product");
        productSection.addEventListener("mousemove", function(event) {
            var x = event.clientX;
            var width = window.innerWidth;
            var threshold = 50; 
            if (x < threshold) {
                mySwiper.slidePrev();
            } else if (x > width - threshold) {
                mySwiper.slideNext();
            }
        });
    });
    </script>
    <div class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="custom_product.php">
                        <img src="images/sizes/12-30-3panal.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">(30 Inch * 3 FT) wall art frame. There are 3 pannel (30Inch * 12 Inch)</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="custom_product.php">
                        <img src="images/sizes/12-24 Inch.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">(15 Inch * 24 Inch) One piece Custome Frame </h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="custom_product.php">
                        <img src="images/sizes/15-24inch.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">(15 Inch * 24 Inch) one Piece custom Frame</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h4 class="mb-4 section-title"><b>Make Your own Design</b></h4>
                    <p class="mb-4">At Sandaru Creation, we believe that your space deserves unique and personalized
                        decor that reflects your style and personality. That's why we offer you the opportunity to
                        transform your favorite images into stunning wall art pieces that are truly one-of-a-kind.
                    </p>
                    <p><a href="custom_product.php" class="btn">Customize Your Product</a></p>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-section">
        <div class="container relative">
            <div class="sofa-img">
                <img src="images/slider-2.png" alt="Image" class="img-fluid">
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Sandaru Wall Art
                            Studio<span>.</span></a></div>
                    <p class="mb-4">At Sandaru Wall Art Studio, our commitment to our customers goes beyond creating beautiful wall art. We believe in providing an exceptional customer service experience, ensuring your journey with us is as remarkable as the art itself.</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>


                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M606 189.5l-54.8 109.9-54.9-109.9h-37.5l10.9 20.6c-11.5-19-35.9-26-63.3-26-31.8 0-67.9 8.7-71.5 43.1h33.7c1.4-13.8 15.7-21.8 35-21.8 26 0 41 9.6 41 33v3.4c-12.7 0-28 .1-41.7.4-42.4.9-69.6 10-76.7 34.4 1-5.2 1.5-10.6 1.5-16.2 0-52.1-39.7-76.2-75.4-76.2-21.3 0-43 5.5-58.7 24.2v-80.6h-32.1v169.5c0 10.3-.6 22.9-1.1 33.1h31.5c.7-6.3 1.1-12.9 1.1-19.5 13.6 16.6 35.4 24.9 58.7 24.9 36.9 0 64.9-21.9 73.3-54.2-.5 2.8-.7 5.8-.7 9 0 24.1 21.1 45 60.6 45 26.6 0 45.8-5.7 61.9-25.5 0 6.6.3 13.3 1.1 20.2h29.8c-.7-8.2-1-17.5-1-26.8v-65.6c0-9.3-1.7-17.2-4.8-23.8l61.5 116.1-28.5 54.1h35.9L640 189.5zM243.7 313.8c-29.6 0-50.2-21.5-50.2-53.8 0-32.4 20.6-53.8 50.2-53.8 29.8 0 50.2 21.4 50.2 53.8 0 32.3-20.4 53.8-50.2 53.8zm200.9-47.3c0 30-17.9 48.4-51.6 48.4-25.1 0-35-13.4-35-25.8 0-19.1 18.1-24.4 47.2-25.3 13.1-.5 27.6-.6 39.4-.6zm-411.9 1.6h128.8v-8.5c0-51.7-33.1-75.4-78.4-75.4-56.8 0-83 30.8-83 77.6 0 42.5 25.3 74 82.5 74 31.4 0 68-11.7 74.4-46.1h-33.1c-12 35.8-87.7 36.7-91.2-21.6zm95-21.4H33.3c6.9-56.6 92.1-54.7 94.4 0z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                </div>
                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="about_us.php">About us</a></li>
                                <li><a href="products.php">Products</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="custom_product.php">Custom Products</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="qr-code">
            <h6>Scan to Connect With Us</h6>
            <img src="images/qrr.jpg" alt="QR Code" class="img-fluid">
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>