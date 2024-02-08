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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About Us | Sandaru Wall Art Studio</title>
        <link rel="icon" type="image/x-icon" href="images/sandaru.png">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/about.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
<style>
    .navbar.fixed-top {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000; 
}

.navbar {
  background-color: #362d2d;
  display: flex;
  justify-content: space-between; 
  padding: 0; 
  width: 100%; 
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1000;
}

.navbar-brand {
  color: #fff;
  font-weight: bold;
}

.navbar-toggler-icon {
  background-color: #000000;
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

.nav-item.active .nav-link {
  color: #3cac00 !important;
}
.navbar:hover {
  background-color: #444;
}

.navbar-brand:hover {
  color: #3cac00;
}

.nav-link:hover {
  color: #3cac00 !important;
}

@media (max-width: 992px) {

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
  
  .nav-item.active .nav-link {
    color: #3cac00 !important;
  }
  .navbar.fixed-top{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
  }

.navbar{
  background-color: #362d2d;
  display: flex;
  justify-content: space-between; 
  padding: 0; 
  width: 100%; 
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1000;
}

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
      margin-left: auto; 
  }

  .navbar-toggler-icon {
      background-color: #fff; 
  }

  .navbar-collapse {
      display: none;
  }

  .navbar-toggler.collapsed ~ .navbar-collapse {
      display: block;
  }
}
section.callout {
    background-color: #f7f7f7;
    padding: 40px 0;
}

.container {
    text-align: center;
}

h2 {
    font-size: 2.5rem; 
    margin-bottom: 20px;
}

.wall-art-features {
    background-color: #fff; 
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); 
}

.wall-art-features ul {
    list-style: none;
    padding: 0;
    text-align: left;
}

.wall-art-features li {
    margin: 10px 0;
}

.wall-art-features h3 {
    font-size: 1.5rem; 
    margin-top: 0;
    margin-bottom: 20px; 
}

.wall-art-features li p {
    margin: 10px 0; 
}

.container p {
    font-size: 1.1rem; 
    margin-top: 20px;
}

a {
    color: #007bff; 
    text-decoration: none;
    transition: color 0.3s;
}

a:hover {
    color: #0056b3; 
}

.feature-item {
            background-color: #f5f5f5; 
            color: #333; 
            padding: 20px; 
            border-radius: 5px; 
            margin: 10px 0; 
        }

.feature-item strong {
    font-weight: bold;
    display: block;
    font-size: 1.2rem;
    margin-bottom: 10px; 
}

.feature-item p {
    margin: 0; 
}
.feature-item {
    transition: transform 0.3s;
}

.feature-item:hover {
            transform: scale(1.1);
            background-color: #fff;
            color: #333;
        }

.feature-item {
    position: relative;
}

.background-card {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0);
    transition: background-color 0.3s;
}

.feature-item:hover {
    transform: scale(1.1);
}

.feature-item:hover .background-card {
    background-color: rgba(255, 255, 255, 0.7);
}

</style>
    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
    </script>
    <body id="page-top">
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
                <li class="nav-item active">
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
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Sandaru Creation</h1>
                <h3 class="mb-5"><em>Srilanka First & Large Wall art Studio</em></h3>
                <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
            </div>
        </header>
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>Make Your Wall awesome</h2>
                        <p class="lead mb-5">
                            Make your beautiful memory with high quality meterial 
                        </p>
                        <a class="btn btn-dark btn-xl" href="#services">What We Offer</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Find Out Our Services</h3>
                    <h2 class="mb-5">What We Offer</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-paint-roller fa-beat"></i></span>
                        <h4><strong>Canvas Wall Art</strong></h4>
                        <p class="text-faded mb-0">Elevate your walls with captivating canvas wall art. Discover stunning designs that effortlessly enhance your home decor.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-pen-to-square fa-beat"></i></span>
                        <h4><strong>Customize Your Order</strong></h4>
                        <p class="text-faded mb-0">Transform your space with customizable wall art. Personalize your surroundings with unique designs that reflect your style and personality.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-fire fa-beat"></i></span>
                        <h4><strong>Wood burn Arts</strong></h4>
                        <p class="text-faded mb-0">
                            Discover the art of wood burning. Unique, handcrafted pieces that add rustic charm to any space.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-headset fa-beat"></i></span>
                        <h4><strong>24*7 Customer Service</strong></h4>
                        <p class="text-faded mb-0">Enjoy peace of mind with our 24/7 customer service. We're here around the clock to assist you.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="callout">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mx-auto mb-5">
            Welcome to
            <em>our</em>
            website!
        </h2>
        <div class="wall-art-features">
            <h3>Why Choose Us for Your Wall Art Needs</h3>
            <ul>
                <li>
                <div class="feature-item zoom-in">
                        <strong>Personalized Assistance:</strong>
                        <p>Our dedicated customer service team is here to assist you every step of the way. Whether you have questions, need design advice, or require support with your order, we're just a message or call away.</p>
                    </div>
                </li>
                <ul>
    <li>
    <div class="feature-item zoom-in">
            <strong>Expert Guidance:</strong>
            <p>We understand that choosing the perfect piece of art can be a unique and personal experience. Our team of experts is ready to provide you with guidance to help you make the right decision for your space.</p>
        </div>
    </li>
    <li>
    <div class="feature-item zoom-in">
            <strong>Hassle-Free Ordering:</strong>
            <p>We've streamlined the ordering process to make it easy and straightforward. Shop with confidence, knowing you're in capable hands from selection to delivery.</p>
        </div>
    </li>
    <li>
        <div class="feature-item">
            <strong>Quality Assurance:</strong>
            <p>We take pride in our craftsmanship and quality standards. Should you ever encounter an issue with your order, we're committed to resolving it promptly.</p>
        </div>
    </li>
    <li>
        <div class="feature-item">
            <strong>Fast & Secure Shipping:</strong>
            <p>We know you're excited to receive your wall art. That's why we offer fast and secure shipping options, ensuring your art reaches you in perfect condition.</p>
        </div>
    </li>
    <li>
        <div class = "feature-item">
            <strong>Feedback & Improvement:</strong>
            <p>We value your feedback, which helps us continuously improve our products and services. Your satisfaction is our top priority.</p>
        </div>
    </li>
    <li>
        <div class="feature-item">
            <strong>Contact Us Anytime:</strong>
            <p>Whether you have a question, need assistance, or just want to chat about art, our customer service team is here to listen and help. Reach out to us via email, phone, or social media, and we'll be happy to assist you.</p>
        </div>
    </li>
</ul>

        </div>
        
        <p>At Sandaru Wall Art Studio, we're not just in the business of art; we're in the business of making your space come to life. Experience the difference of our exceptional customer service and let us help you transform your walls into a work of art.</p>
    </div>
</section>
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Convert Your home to Havean</h3>
                    <h2 class="mb-5">Our Newest Projects    </h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                </div>
                            </div>
                            <img class="img-fluid" src="images/slider-1.png" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                </div>
                            </div>
                            <img class="img-fluid" src="images/slider-2.png" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                </div>
                            </div>
                            <img class="img-fluid" src="images/slider-3.png" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                </div>
                            </div>
                            <img class="img-fluid" src="images/slider-4.png" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section bg-primary text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Visit Our Shop Or Explore our Products...</h2>
                <a class="btn btn-xl btn-light me-4" href="products.php">Visit Products</a>
                <a class="btn btn-xl btn-dark" href="gallery.php">Visit Galary</a>
            </div>
        </section>
        <div class="map" id="contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.3899675297553!2d80.7802806210365!3d7.213499739139665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae363c8478df253%3A0x55327e882854d8a6!2sSandaru%20Creation!5e0!3m2!1sen!2slk!4v1695230581252!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container">
  <section class="mx-auto my-5" style="max-width: 20rem;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card testimonial-card mt-2 mb-3">
            <div class="card-up aqua-gradient"></div>
            <div class="avatar mx-auto white">
              <img src="images/betta.jpg" class="rounded-circle img-fluid" width="150" height="150" alt="woman avatar"> 
            <div class="card-body text-center">
              <h4 class="card-title font-weight-bold">M.r Pubudu Chamara</h4>
              <hr>
              <p><i class="fas fa-quote-left"></i> Owner and the C.E.O of Sandaru Creation <i class="fas fa-quote-right"></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
      <li class="list-inline-item">
             <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="fa-brands fa-facebook fa-beat"></i></a>
      </li>
     <li class="list-inline-item">
              <a class="social-link rounded-circle text-white" href="#!"><i class="fa-brands fa-instagram fa-beat"></i></a>
     </li>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
</div>
<script>
  $(document).ready(function () {
    $('#myCarousel').carousel();
  });
</script>
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="fa-brands fa-facebook fa-beat"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="fa-brands fa-instagram fa-beat"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="fa-brands fa-facebook-messenger fa-beat"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="fa-brands fa-whatsapp fa-beat"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="fa-brands fa-tiktok fa-beat"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="fa-brands fa-pinterest-p fa-beat"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; NC Web Solutions 077-3310772</p>
            </div>
        </footer>
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
