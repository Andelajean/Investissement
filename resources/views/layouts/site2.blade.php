<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Global Investissement Trading </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- Libraries Stylesheet -->
  <link href="{{ asset('lib/animate/animate.min.css') }} " rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }} " rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }} " rel="stylesheet" />
  <style>
    /* Bouton centré et au-dessus */
    .fixed-whatsapp-btn {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1050; /* Au-dessus de tout */
      border: 2px solid #25D366; /* Couleur verte de WhatsApp */
      color: #25D366; /* Texte et icône verts */
      padding: 0.5rem 1rem;
      border-radius: 50px;
      font-size: 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      background: transparent; /* Pas de background */
    }
    .fixed-whatsapp-btn:hover {
      background-color: #25D366; /* Ajout d'un fond au survol */
      color: #fff; /* Texte et icône en blanc au survol */
    }
  </style>

</head>

<body class="sub_page">

<div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="image/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
            Global Investissement Trading
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">

              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="users/produit-list"> Produits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="help">Aide</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team"> Equipe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </li>

              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

    <main>
        @yield('content')
    </main>

    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 info_col">
            <div class="info_contact">
              <h4>
                Adresse
              </h4>
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Location
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Appel +237 697 091 769
                    +237 686 370 673
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                  globalinvestissementtrading27@gmail.com
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 info_col">
            <div class="info_detail">
              <h4>
                Info
              </h4>
              <p>
                Offrant des solutions d'investissement fiables adaptées à vos objectifs financiers, avec sécurité et opportunités de croissance durable.
              </p>            
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mx-auto info_col">
            <div class="info_link_box">
              <h4>
                Liens
              </h4>
              <div class="info_links">
                <a class="active" href="/">
                  Accueil
                </a>
                <a class="" href="users/produit-list">
                  Produits
                </a>
                <a class="" href="help">
                  Aide
                </a>
                <a class="" href="contact">
                  Contact
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 info_col ">
            <h4>
              Souscrire
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Souscrire
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end info section -->

  <!-- jQery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>

  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>

  <!-- bootstrap js -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <!-- custom js -->
  <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

   <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>