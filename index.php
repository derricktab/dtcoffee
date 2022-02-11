<?php
$con = mysqli_connect("localhost", "dizcoffe_root", "Zziwa-2580", "dizcoffe_dizcoffee") or die("DB CONNECTION FAILED");

if(isset($_POST["submit"]) && $con){
$name = htmlentities($_POST["name"], ENT_QUOTES, "UTF-8");
$email = htmlentities($_POST["email"], ENT_QUOTES, "UTF-8");
$subject = htmlentities($_POST["subject"], ENT_QUOTES, "UTF-8");
$message = htmlentities($_POST["message"], ENT_QUOTES, "UTF-8");

$sql = "INSERT INTO messages(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";

$result = mysqli_query($con, $sql) or die(mysqli_error($con));

if(!$result){
  echo "<script>alert('DATA NOT INSERTED')</script>";
  echo mysqli_error($con);
}

}else{
  echo "<script>alert('NOT SUBMITTED YET)</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DIZ COFFEE</title>
  <!-- <meta content="The Biggest Coffee Exporters In Uganda. Contact us now to get a quote." name="description">
  <meta content="Coffee, Arabica Coffee, Robusta Coffee, Uganda, Diz Coffee, Diz" name="keywords"> -->
<meta property="og:site_name" content="San Roque 2014 Pollos">
<meta property="og:title" content="San Roque 2014 Pollos" />
<meta property="og:description" content="Programa de fiestas" />
<meta property="og:image" itemprop="image" content="http://pollosweb.wesped.es/programa_pollos/play.png">
<meta property="og:type" content="website" />
<meta property="og:updated_time" content="1440432930" />


  <!-- Favicons -->
  <link href="assets\img\logo2.png" rel="icon">
  <link href="assets\img\logo2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setCookieDomain", "*.dizcoffee.com"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//dizcoffee.com/piwik/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//dizcoffee.com/piwik/matomo.php?idsite=2&amp;rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:sales@dtexporters.com">sales@dizcoffee.com</a>
        <i class="icofont-phone"></i> +256 754893983
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="sticky-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.php"> <span>DT</span> EXPORTERS </a></h1> -->

      <a href="index.php" class="logo mr-auto"><img src="assets\img\logo3.png" alt=""></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="drop-down"><a href="#products">Our Coffee</a>
          <ul>
            <li><a href="arabica.html">Arabica Coffee</a></li>
            <li><a href="robusta.html">Robusta Coffee</a></li>
          </ul>
          </li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#certifications">Certifications</a></li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  
    <!-- <div class="container" data-aos="zoom-out" data-aos-delay="40">
      <h1>Welcome to <span>DIZ COFFEE</span> website 
      </h1>
      <h2>We are a coffee exporting company founded in 2013 and one of the biggest coffee exporters in Uganda.</h2>

      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Learn More</a>
      </div>

    </div> -->

    <!-- START CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="assets\img\coffe.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
           <h2>WELCOME TO <span class="text-warning">DIZ COFFEE </span> EXPORTERS LIMITED </h2>
      <h5>We are a coffee exporting company founded in 2013 and one of the biggest coffee exporters in Uganda.</h5>
      <button class="btn btn-warning mt-4 text-green"><a href="#about">Learn More</a></button>


      </div>
    </div>

    <div class="carousel-item">
      <img src="assets\img\green-coffee-beans.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Best Quality Green Coffee</h1>
        <p>We are the 2018 award winning company in exporting the best quality green coffee in East Africa.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="assets\img\arabica\ter.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>First Class Packing And Storage</h1>
        <p>High Quality Packing and storage of the products to make sure that they maintain their original good quality.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="assets\img\Supporting_sustainable_coffee.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Quality and Sustainability</h1>
        <p>Supporting Sustainable Coffee is our priority</p>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- END CAROUSEL -->





  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="40">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="arabica.html">ARABICA COFFEE</a></h4>
              <p class="description">Arabica is grown in the highland areas on the slopes of Mount Elgon in the Eastern region , Mount Rwenzori in western and Mount Muhabura in the south western region (1,500-2,300 above sea level)</p>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-donate-blood"></i></div>
              <h4 class="title"><a href="robusta.html">ROBUSTA COFFEE</a></h4>
              <p class="description">Robusta is grown in the low altitude areas of Central, Eastern, Western and South Eastern Uganda up to 1,200 metres above sea level.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>
DIZ COFFEE is considered one of the biggest exporters of arabica coffee in East Africa in the “Superior” and “Commercial” lines..</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="40">
            <img src="assets/img/4433.jpg" class="img-fluid" alt="" height="600px" style="border-radius: 10px;">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="40">
            <h3>Our main goal is to export "Made in Uganda" coffee to allover the world. </h3>
            <p class="font-italic">
              Since the beginning of our activities, we have always seen coffee as something beyond than just a product, for us, the international coffee trade is a work ritual, a connection and involvement factor.
            </p>
  
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<div class="container mission">
<div class="row mb-5 mt-5 vision">
 <h4 class="text-center w-100 mb-5"> <span class="text-danger"> Mission</span> , <span class="text-primary">Vision</span> and <span class="text-success">Values</span> that make the greatness of our company</h4>
<!-- MISSION -->
<div class="col-md-4">
<div class="card h-100 mx-auto">
  <img src="assets\img\mission.png" class="card-img-top" alt="MISSION" height="230px">
  <div class="card-body"> <hr class="bg-success">
    <h5 class="card-title text-center">OUR MISSION</h5> <hr class="bg-success">
    <p class="card-text"> Develop business in line with market requirements, offering high quality products and services in its operating segments, with excellence in all production processes. To address market economy with innovations and enhancements that deliver solid results for shareholders and the future of the company.



</p>
  </div>
</div>
</div>

<!-- VISION -->
<div class="col-md-4">
<div class="card h-100 mx-auto">
  <img src="assets\img\vision2.jpg" class="card-img-top " alt="VISION" height="230px">
  <div class="card-body"> <hr class="bg-success">
    <h5 class="card-title text-center">OUR VISION</h5> <hr class="bg-success">
    <p class="card-text">Maintain our position as a company that seeks consistent results and is committed to the future of new generations. Provide all employees with opportunities for professional development and growth. To play our role as agents in the transformation and improvement of society through the implementation of actions and programs benefiting communities and fostering social inclusion.

</p>
  </div>
</div>
</div>

<!-- CORE VALUES -->
<div class="col-md-4">
<div class="card h-100 mx-auto">
  <img src="assets\img\values1.jpg" class="card-img-top" alt="CORE VALUES" height="230px">
  <div class="card-body"> <hr class="bg-success">
    <h5 class="card-title text-center">OUR CORE VALUES</h5> <hr class="bg-success">
    <p class="card-text">

Always assist our customers ethically, with respect and honesty. Encourage and promote innovative ideas, creativity and commitment amongst our employees. To value entrepreneurship and initiative, aiming at fostering new leaderships. Collaborate with the development of the international coffee market, respecting local cultures and customs.

</p>
  </div>
</div>
</div>

</div>
</div>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">178</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">21</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span>24/7</span>
              <p>Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">2,000,000</span>
              <p>Bags Of Coffee</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->



    <!-- ======= Products Section ======= -->
    <section id="gallery" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>GALLERY</h2>
          <h3>PRODUCTS <span>GALLERY</span></h3>
          <p>Below are the most popular coffee types that we export.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="40">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-arabica">Arabica</li>
              <li data-filter=".filter-robusta">Robusta</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\y6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets\img\robusta\2.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\4.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\coffee1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\34.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\iuhifusd.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ARABICA IMAGE -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-arabica">
            <img src="assets\img\arabica\coffee1-768x512.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h6>Arabica Coffee</h6>

              <a href="assets\img\vector-coffee-bean-and-green-leaves-logo.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- ROBUSTA IMAGES-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-robusta">
            <img src="assets\img\robusta\our cars.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Robusta Coffee</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->




<!-- CERITICATIONS SECTION -->
<section id="certifications" class="mb-5">

  <div class="section-title mb-5">
    <h2>certifications</h2>
  </div>
<div class="container">
  <div class="row mx-auto">
    <div class="col-md-4">
        <img src="assets\img\certified exporter UTZ sustainability company.png" alt="UTZ CERTIFIED" srcset="" class="mx-auto d-block">
        <h6 class="text-center pt-3">UTZ CERTIFIED</h6>
    </div>
    <div class="col-md-4">
        <img src="assets\img\certified exporter rainforest alliance sustainability company.png" alt="RAIN FOREST ALLIANCE CERTIFIED" srcset="" class="mx-auto d-block">
        <h6 class="text-center pt-3">RAINFOREST ALLIANCE CERTIFIED</h6>

    </div>
    <div class="col-md-4">
        <img src="assets\img\unbs.png" alt="UNBS CERTIFIED" srcset="" class="mx-auto d-block">
       <h6 class="text-center pt-3">UNBS CERTIFIED</h6>

    </div>
  </div>
</div>

</section>

   <div class="container">
      <div class="section-title">
        <h2>testimonials</h2>
     <h3 class="text-center">WHAT OUR FANTASTIC CLIENTS SAY</h3>
    </div>
    </div>  


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
  
   
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/M1.jfif" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4> UK </h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              DIZ COFFEE has the best coffee beans that we have ever purchased from Africa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/w5.png" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Belgium</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             I look forward to working with you again, you provide the best quality products and the price is good.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/W4.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Australia</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fast delivery of the goods, excellenct service.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/M2.jfif" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>USA</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             It was a great pleasure to work with you DIZ COFFEE.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/M3.jfif" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Turkey</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Timely delivery of the ordered products and excellent packing plus quality. Loved the overall service and product.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>We Would Love To Hear From You.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="40">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Tirupati Mazima Mall <br>
              Suite 201, Nsambya Ggaba Rd<br>
              Kampala Uganda.</p>
               
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@dizcoffee.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+256 754 893983</p>
              <p>+256 778 665360</p>
            </div>
          </div>

        </div>

        <div class="row w-100" data-aos="fade-up" data-aos-delay="40">

          <div class="col-md-6 pr-2">

        <!-- MAP -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7637869538175!2d32.59453401457192!3d0.29956619978144894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbdf364ac9cb3%3A0xf16087910dbeb457!2sDiz%20Coffee%20Exporters%20Limited!5e0!3m2!1sen!2sug!4v1644544434190!5m2!1sen!2sug" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

          <div class="col-md-6">
            <form action="index.php" method="POST" role="form" class="php-email-form" style="border-radius: 12px;">

              <div class="form-row">

                <div class="col form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                </div>

                <div class="col form-group">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                </div>

              </div>

              <div class="form-group">

                <input type="text" class="form-control" name="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

              </div>

              <div class="form-group">

                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>

              </div>

              <div class="text-center">
                <button type="submit" name="submit">Send Message</button>
              </div>

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>FREQUENTLY ASKED <span>QUESTIONS</span></h3>

          <p> Below are some of the quesitons that our clients usually ask us.</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="40">

          <li>
            <a data-toggle="collapse" class="" href="#faq1"> Which Payment Terms Do You Accept? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
                1) TT in Advance. <br>
                2) Cash Against Documents (CAD). <br>
                3) Letter Of Credit at sight irrevocable and confirmed by first class bank. <br>
                4) OA 30/45/60 days. <br>
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">How Many bags do you load per full container? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                1 X 20FT CONTAINER = 19.2 MT equivalent to 320 jute bags with 60 kg each. <br>
                1 X 40FT CONTAINER = 26.4 MT equivalent to 440 jute bags with 60 kg each.

              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed"> What is the minimum order? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                1 X 20ft Container
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Do You Offer Samples?  <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                After purchaser’s acceptance of our offer, the sample policy is as follows: <br>
          1) We supply the sample at no cost. <br>
          2) The purchaser must have an account with any international courier service, such as [DHL, FedEx, TNT] 
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Which Incoterms Do You Support? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                EXWORKS, FOB, CFR, CIF, DAP
              </p>
            </div>
          </li>


        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->



  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><span>DIZ</span> COFFEE<span>.</span></h3>
            <p>
              Tirupati Mazima Mall <br>
              Suite 201, Nsambya Ggaba Rd<br>
              Kampala Uganda. <br><br>
              <strong>Phone:</strong> +256 754 893983<br>
              <strong>Email:</strong><a href="mailto:info@dizcoffee.com"> info@dizcoffee.com</a><br>
              <strong>Whatsapp:</strong><a href="https://wa.me/+256754893983"> +256745893983</a><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Coffee</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="arabica.html">Arabica Coffee</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="robusta.html">Robusta Coffee</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>About</h4>
            <p>Fruit of the relationship we build with each one: from person to person in the coffee world, seeking the best results for everyone.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>DIZ COFFEE EXPORTERS LIMITED</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://1drv.ms/b/s!Ar8lpqYChFN9ikXHnJOXcmM0M5Un?e=HqaWgn" target="_blank">Derrick Zziwa</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <!-- <script src="assets/vendor/aos/aos.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
