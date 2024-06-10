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
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#hero" class="logo d-flex align-items-center me-auto">
        <img src="../assets/img/logo.png" alt="LOGO">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#faq">Recommendation</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="../assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Welcome to <span>SkinRec</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Get Healthy and Beautiful Skin. Discover the Best Products for Your Skin Here!<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
          </div>
          <img src="../assets/img/hero.png" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- List Blue -->
    <section id="featured-services" class="featured-services section">

      <div class="container">
        <div class="row gy-4">
        </div>
      </div>

    </section><!-- /List Blue -->

    <!-- About SkinRec -->
    <section id="about" class="features-details section">
      <div class="container section-title" data-aos="fade-up">
        <h2>About SkinRec</h2>
      </div><!-- End Section Title -->
      <div class="container">

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <img src="../assets/img/aboutskinrec.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-8 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>What is SkinRec?</h3>
              <p style="text-align: justify;">
                SkinRec is an innovative web service designed to provide personalized skincare product recommendations tailored to the unique needs of each user's skin. Created to simplify the process of finding the right skincare products, SkinRec leverages advanced technology to analyze skin type, condition, and personal preferences, delivering the most suitable recommendations.
              </p>
            </div>
          </div>

        </div><!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <div class="content">
              <h3>How Does SkinRec Work?</h3>
              <p style="text-align: justify;">
                SkinRec utilizes advanced expert system algorithms to identify patterns in user's skin data. Users simply fill out a form with information about the skincare products they are looking for, their skin type, skin issues they are facing, and the desired effects from skincare products. Based on this data, the system processes and matches it with the available skincare product database to provide the most suitable recommendations.
              </p>
              <a href="#faq" class="btn-get-started" style="font-weight: bold;">Discover Your Recommendations</a>
            </div>
          </div>

          <div class="col-lg-4 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <img src="../assets/img/aboutskinrec-2.png" class="img-fluid" alt="">
          </div>

        </div><!-- Features Item -->

      </div>

    </section><!-- /About Skin Section -->


    <!-- Recommendation Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Get to Know Your Skin</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <form action="{{ route('submit.form') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="categoryProduct" class="form-label">Which skincare product are you looking for today?</label>
                <select class="form-select form-control" name="product" aria-label="Skincare Product" style="border-radius: 10px; border: 1px solid rgb(235, 235, 235); margin-left: 1%;">

                  <option value="Face Wash">Facial Wash</option>
                  <option value="Moisturizer">Moisturizer</option>
                  <option value="Serum">Serum</option>
                  <option value="Sunscreen">Sunscreen</option>
                  <option value="Toner">Toner</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="skinType" class="form-label mt-3">What's your skin type?</label>
                <div class="row" style="margin-left: 0.5%; background-color: rgb(255, 255, 255); border: 1px solid rgb(235, 235, 235); border-radius: 10px; padding: 2%;">
                  <div class="form-check" style="flex: 1; margin-left: 2%;">
                    <input class="form-check-input" type="checkbox" name="skinType[]" id="skinType1" value="sensitive">
                    <label class="form-check-label" for="skinType1">Sensitive</label>
                  </div>
                  <div class="form-check" style="flex: 1;">
                    <input class="form-check-input" type="checkbox" name="skinType[]" id="skinType2" value="combination">
                    <label class="form-check-label" for="skinType2">Combination</label>
                  </div>
                  <div class="form-check" style="flex: 1;">
                    <input class="form-check-input" type="checkbox" name="skinType[]" id="skinType3" value="oily">
                    <label class="form-check-label" for="skinType3">Oily</label>
                  </div>
                  <div class="form-check" style="flex: 1;">
                    <input class="form-check-input" type="checkbox" name="skinType[]" id="skinType4" value="dry">
                    <label class="form-check-label" for="skinType4">Dry</label>
                  </div>
                  <div class="form-check" style="flex: 1;">
                    <input class="form-check-input" type="checkbox" name="skinType[]" id="skinType5" value="normal">
                    <label class="form-check-label" for="skinType5">Normal</label>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="skinProblem" class="form-label mt-3">What skin issues are you currently facing?</label>
                <div class="row" style="margin-left: 0.5%; background-color: rgb(255, 255, 255); border-style: solid; border-color: rgb(235, 235, 235); border-width: 1px; padding: 2%; border-radius: 10px;">
                  <div class="col-md-2">
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk1" value="kulit_kusam">
                      <label class="form-check-label" for="sk1">
                        Kulit Kusam
                      </label>
                    </div>
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk2" value="jerawat">
                      <label class="form-check-label" for="sk2">
                      Jerawat
                      </label>
                    </div>

                  </div>
                  <div class="col-md-2" style="margin-right: auto;">
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk3" value="bekas_jerawat">
                      <label class="form-check-label" for="sk3" style="white-space: nowrap;">
                      Bekas Jerawat
                      </label>
                    </div>
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk4" value="pori_pori_besar">
                      <label class="form-check-label" for="sk4" style="white-space: nowrap;">
                      Pori-pori Besar
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2" style="margin-right: auto;">
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk3" value="flek_hitam">
                      <label class="form-check-label" for="sk3" style="white-space: nowrap;">
                      Flek Hitam
                      </label>
                    </div>
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk4" value="garis_halus_dan_kerutan">
                      <label class="form-check-label" for="sk4" style="white-space: nowrap;">
                      Garis Halus dan Kerutan
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2" style="margin-right: auto;">
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk3" value="komedo">
                      <label class="form-check-label" for="sk3" style="white-space: nowrap;">
                      Komedo
                      </label>
                    </div>
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk4" value="warna_kulit_tidak_merata">
                      <label class="form-check-label" for="sk4" style="white-space: nowrap;">
                      Warna Kulit Tidak Merata
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk9" value="kemerahan">
                      <label class="form-check-label" for="sk9">
                        Kemerahan
                      </label>
                    </div>
                    <div class="form-check" style="margin-left: 1%;">
                      <input class="form-check-input" type="checkbox" name="skinProblem[]" id="sk10" value="kulit_kendur">
                      <label class="form-check-label" for="sk10">
                        Kulit Kendur
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <label for="effect" class="form-label mt-3">What effects are you looking for in your skincare?</label>
              <div class="row" style="padding-left: 0%; padding: 2%; margin-left: 0.5%; margin-bottom: 5%; background-color: rgb(255, 255, 255); border-style: solid; border-color: rgb(235, 235, 235); border-width: 1px; padding-right: 0.5%; border-radius: 10px;">
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect1" value="acne_free">
                    <label class="form-check-label" for="effect1">
                      Acne Free
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect2" value="soothing">
                    <label class="form-check-label" for="effect2">
                    Soothing
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect14" value="brightening">
                    <label class="form-check-label" for="effect14">
                    Brightening
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect3" value="moisturizing">
                    <label class="form-check-label" for="effect3">
                    Moisturizing
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect4" value="hydrating">
                    <label class="form-check-label" for="effect4">
                    Hydrating
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect5" value="pore_care">
                    <label class="form-check-label" for="effect5">
                    Pore care
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect6" value="anti_aging">
                    <label class="form-check-label" for="effect6">
                    Anti-Aging
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect7" value="balancing">
                    <label class="form-check-label" for="effect7">
                    Balancing
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect8" value="uv_protection">
                    <label class="form-check-label" for="effect8">
                    UV Protection
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect9" value="skin_barrier">
                    <label class="form-check-label" for="effect9">
                    Skin Barrier
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect10" value="refresing">
                    <label class="form-check-label" for="effect10">
                    Refreshing
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect11" value="oil_control">
                    <label class="form-check-label" for="effect11">
                    Oil Control
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="effect[]" id="effect12" value="no_whitecast">
                    <label class="form-check-label" for="effect12">
                    No Whitecast
                    </label>
                  </div>
                  <div class="col-md-1">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="effect[]" id="effect13" value="black_spot">
                      <label class="form-check-label" for="effect13">
                      Black Spot
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-submit">Get Recommendation</button>

            </form>
            <div class="" style="margin-top: 1%; margin-bottom: 2%; justify-content: center; padding-left:15%; padding-right: 10%; padding-top: 1%; padding-bottom: 2%; border-radius: 15px;"></div>
          </div><!-- End Form Column-->
        </div>

      </div>

    </section><!-- /Recomendation Section -->


    <!-- Team Section -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Team</h2>
          <p data-aos="fade-in">We are a dedicated team committed to bringing innovative skincare solutions through web technology. With a blend of expertise in information technology and beauty, we have developed SkinRec as a platform to help you find the right skincare products tailored to your skin's needs.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="../assets/img/ihsan.png" alt=""></div>
              <h4>Maulana Ihsan Athallah</h4>
              <span>3322600012</span>
              <div class="social">
                <a href="https://www.instagram.com/ihsan_bdl_/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="../assets/img/johan.png" alt=""></div>
              <h4>Johan Winarwan Nawawi</h4>
              <span>3322600023</span>
              <div class="social">
                <a href="https://www.instagram.com/_johannawawi/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="../assets/img/naufal.png" alt=""></div>
              <h4>Naufal Ubaidillah Izzat</h4>
              <span>3322600024</span>
              <div class="social">
                <a href="https://www.instagram.com/ztnaufals/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="../assets/img/calysta.png" alt=""></div>
              <h4>Calysta Moza Salsabilla</h4>
              <span>3322600028</span>
              <div class="social">
                <a href="https://www.instagram.com/calystamo/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        <p>If you have any questions, feedback, or inquiries, please don't hesitate to get in touch with us. We're here to help!</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Jl. Raya ITS, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+628817172827</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>skinrec@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-15" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6919770919044!2d112.79118077589915!3d-7.275847092731256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1717847000482!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative">
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">SkinRec</strong><span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>