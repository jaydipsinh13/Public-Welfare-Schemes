<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0, user-scalable=0">
  <title>Jamnagar Public Welfare Schemes</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/FwbCBHF/fotor-2023-1-29-10-51-0.png">

  <!-- custom css link -->
  <link rel="stylesheet" href="assets/style.css">

  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@300;400&display=swap"
    rel="stylesheet">

  <!-- Internal Css For This -->
  <style>
    @media(max-width:500px) {
      iframe {
        width: 100%;
      }
    }
  </style>

</head>

<body>

  <!-- HEADER -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.html" class="logo">
        <img src="https://i.ibb.co/ctVwdSx/menu-logo.png" alt="Jamnagar Public Welfare Schemes Logo" width="250px"
          class="nav-logo">
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#lasted" class="navbar-link">Lasted Schemes</a>
          </li>

          <li>
            <a href="scheme/index.php" class="navbar-link">Schemes For You</a>
          </li>

          <li>
            <a href="login.php" class="navbar-link">Login</a>
          </li>

          <li>
            <div class="google_translate">
              <a href="#" class="disclaimer" data-toggle="tooltip" data-placement="top">
                <i class="icon icon-information2"></i>
              </a>
              <div id="google_translate_element"></div>
            </div>
          </li>

        </ul>

      </nav>

    </div>
  </header>

  <!-- Slider Code -->
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="https://cmogujarat.gov.in/wp-content/uploads/2023/01/Botad-dev-works-nth.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="https://cmogujarat.gov.in/wp-content/uploads/2022/10/Jamnagar-dev-10top.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="https://gujaratindia.gov.in/Portal/HomeFlashGallery/261_pmwelcome-nth_07.jpg" style="width:100%">
    </div>

  </div>
  <br>

  <div style="text-align:center; display: none;">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <!-- Slider code END -->


  <main>
    <article>

      <!-- HERO -->

      <section class="hero" id="about">
        <div class="container">
          <div class="hero-content" id="taluka">
            <h1 class="h1"><b>Jamnagar Public Welfare Schemes</b></h1>

            <br>
            We're on a mission to transform lives in Jamnagar. Join us in our efforts for education, healthcare, and
            community empowerment. Make a difference. Get involved!


            <br><br>
            Our mission is to create a better and more equitable society by providing essential support and resources to
            those in need. Through our comprehensive welfare schemes, we strive to address various social, economic, and
            healthcare challenges faced by the community.

            <!-- <br><br>
            They are also responsible for the maintenance of the public buildings and facilities within their jurisdiction, such as schools, hospitals, and community centers.</p> -->

          </div>

          <!-- Map -->
          <figure class="hero-banner" style="border: 1px solid black; box-shadow: 2px 2px 20px rgba(1, 5, 26, 0.226);">

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117977.44529659311!2d70.05841349999999!3d22.47433045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3957154934c04597%3A0xe8b7dd81a49b75ca!2sJamnagar%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1699078655740!5m2!1sen!2sin"
              width="400vh" height="360vh" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
          </figure>

        </div>
      </section>

    </article>



  </main>

  <!-- ABOUT -->
  <section class="about" id="services">
    <div class="container">

      <div class="about-content">

        <div class="about-icon">
          <ion-icon name="cube"></ion-icon>
        </div>

        <h2 class="h2 about-title">Schemes</h2>

        <p class="about-text">
          We're on a mission to transform lives in Jamnagar. Join us in our efforts for education, healthcare, and
          community empowerment. Make a difference. Get involved!
        </p>

        <a href="all-schemes.php">
          <button class="btn btn-outline">View All</button>
        </a>

      </div>

      <ul class="about-list">
        <li>
          <div class="about-card">

            <div class="card-icon">
              <img src="https://www.digitalgujarat.gov.in/images/citizen/Income.png" alt="" width="50%">
            </div>

            <h3 class="h3 card-title">Kisan Sahay Yojana</h3>

            <p class="card-text">
            Kisan Sahay Yojana" translates to "Farmer Assistance Scheme" in English. It likely refers to a government program aimed at providing support and assistance to farmers.
            </p>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <img src="https://www.digitalgujarat.gov.in/images/citizen/ChangeName_RC.png" alt="" width="55%">
            </div>

            <a href="certificate.php">
              <h3 class="h3 card-title">Unemployment Allowance Scheme</h3>
              <p class="card-text">
                Unemployment Allowance Scheme provides financial support to those without jobs, promoting social
                security and economic stability.
              </p>
            </a>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <img src="https://www.digitalgujarat.gov.in/images/citizen/RemoveName_RC.png" alt="" width="55%">
            </div>

            <h3 class="h3 card-title">Child Development Services</h3>
            <p class="card-text">
            The Child Development Scheme focuses on nurturing the potential of every child, providing essential support and resources for their physical, emotional, and educational growth. 
            </p>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <img src="https://www.digitalgujarat.gov.in/images/citizen/SeniorCitizen.png" alt="" width="60%">
            </div>

            <h3 class="h3 card-title">Senior Citizen Scheme </h3>
            <p class="card-text">
              Discover peace of mind and financial security with the Senior Citizen Scheme! Tailored for our beloved
              seniors.
            </p>

          </div>
        </li>

      </ul>

    </div>
  </section>








  <!-- FOOTER -->
  <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="https://i.ibb.co/ctVwdSx/menu-logo.png" alt="Landio logo" width="280px">
          </a>
          <!-- <p class="footer-text">
            Jamnagar is a city in the western Indian state of Gujarat. On an island in Lakhota Lake, Lakhota Palace and
            Museum is a former fort that exhibits weapons, sculptures and pottery from the 9th to 18th centuries.
          </p> -->

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">ABOUT US</p>
            </li>

            <li>
              <a href="" class="footer-link">Works</a>
            </li>


          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">CUSTOMERS</p>
            </li>

            <li>
              <a href="track-id.php" class="footer-link">Track Application</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">SUPPORT</p>
            </li>

            <li>
              <a href="#" class="footer-link">Guide</a>
            </li>

          </ul>

        </div>

      </div>
    </div>



    <!-- Copyright -->
    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2023 <a href="">Jamnagar Public Welfare Schemes</a> All Right Reserved
        </p>
      </div>
    </div>

  </footer>

  <!-- translat website using google_translate -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'gu,hi,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
    }
  </script>
  <script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- custom js link -->
  <script src="./assets/js/script.js"></script>

  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>