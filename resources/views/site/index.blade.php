@extends('layouts.site')

@section('content')

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
            <a class="nav-link" href="team"> equipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
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

<!-- slider section -->
<section class="slider_section">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Investir en <br>
                  Monnaie
                </h1>
                <p>
                  Profitez des opportunités d'investissement dans les devises pour faire fructifier votre capital. Nos solutions vous permettent d'accéder aux marchés de la monnaie avec une stratégie claire et efficace pour vos investissements.
                </p>
                <div class="row">
                  <div class="col btn-box">
                    <a href="" class="btn1">
                      Investir
                    </a>
                  </div>
                  <div class="col btn-box">
                    <a href="" class="btn1">
                      Se connecter
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="image/slider-img.png" alt="Investir en Monnaie">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Crypto <br>
                  Monnaie
                </h1>
                <p>
                  Explorez l'univers des cryptomonnaies avec des solutions d'investissement adaptées à vos besoins. Nos plateformes sécurisées vous permettent de participer à cette révolution numérique en toute confiance.
                </p>
                <div class="row">
                  <div class="col btn-box">
                    <a href="" class="btn1">
                      Investir
                    </a>
                  </div>
                  <div class="col btn-box">
                    <a href="" class="btn1">
                      Se connecter
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="image/slider-img.png" alt="Investir en Cryptomonnaie">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#customCarousel1" data-slide-to="1"></li>
    </ol>
  </div>
</section>
<!-- end slider section -->

</div>

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
    <div class="row gx-0">
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
            <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                    <i class="fa fa-users text-primary"></i>
                </div>
                <div class="ps-4 mx-3">
                    <h5 class="text-white mb-0">Happy Clients</h5>
                    <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
            <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                    <i class="fa fa-check text-white"></i>
                </div>
                <div class="ps-4 mx-3">
                    <h5 class="text-primary mb-0">Projects Done</h5>
                    <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
            <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                    <i class="fa fa-check text-primary"></i>
                </div>
                <div class="ps-4 mx-3">
                    <h5 class="text-white mb-0">Win Awards</h5>
                    <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Facts Start -->


     <!-- help section -->
    <section class="service_section layout_padding">
        <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
        Trouver de <span>l'Aide</span>
          </h2>
          <p>
            Découvrez nos vidéos qui illustrent nos activités d'investissement, recueillent des témoignages inspirants et présentent des interviews exclusives.
          </p>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <p><strong>Présentation des opportunités d'investissement</strong></p>
              <div class="video-box">
                <video src="videos/video1.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="box">
              <p><strong>Témoignage de nos clients satisfaits</strong></p>
              <div class="video-box">
                <video src="videos/video2.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="box">
              <p><strong>Stratégies pour maximiser vos profits</strong></p>
              <div class="video-box">
                <video src="videos/video3.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <p><strong>Exemple d'un projet financé avec succès</strong></p>
              <div class="video-box">
                <video src="videos/video4.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="box">
              <p><strong>Interviews avec des experts financiers</strong></p>
              <div class="video-box">
                <video src="videos/video5.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="box">
              <p><strong>Explication des concepts clés de la finance</strong></p>
              <div class="video-box">
                <video src="videos/video6.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
        </div>

        <div class="btn-box">
          <a href="">
            Voir tout
          </a>
        </div>
      </div>
        </div>
    </section>
    <!-- end help section -->

    <!-- produit section -->
    <section class="about_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Nos <span>Produits</span>
          </h2>
          <p>
            Découvrez une gamme variée de produits d'investissement, conçus pour vous accompagner dans la croissance de votre capital de manière sécurisée et efficace.
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
              <img src="image/gift.png" alt="Produits d'investissement">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <h3>
                Nous sommes Global Investissement Trading
              </h3>
              <p>
                Nous proposons une gamme de produits financiers diversifiés adaptés à vos besoins d'investissement. Que vous soyez débutant ou expérimenté, nous avons des solutions pour vous aider à atteindre vos objectifs financiers.
              </p>
              <p>
                Nous offrons des produits allant des investissements à faible risque à ceux plus dynamiques, en vous garantissant une transparence totale et un accompagnement personnalisé pour chaque étape de votre parcours d'investisseur.
              </p>
              <a href="users/produit-list">
                En savoir plus
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- end about section -->

    <!-- questions section -->
    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 class="pb-5 mb-3">
                Questions <span>Fréquentes</span>
                </h2>
                <h1 class="mb-5">Réponses à vos interrogations sur l'investissement</h1>
            </div>
        <div class="row g-5">
      <!-- Colonne Gauche -->
      <div class="col-lg-4">
        <div class="row g-5">
          <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fa fa-question text-white"></i>
            </div>
            <h4>Comment investir ?</h4>
            <p class="mb-0">
                Tout d'abord cliquer sur Investir ensuite remplir ses informations dans le formulaire d'enregistrement. Un email vous sera envoye pour valider votre demande. Une fois dans le tableau de bord vous pourrez effectuer votre investissement</p>
          </div>
          <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fa fa-question text-white"></i>
            </div>
            <h4>comment recharger mon compte ?</h4>
            <p class="mb-0">
                Une fois connecté, cliquer sur recharger mon compte. Vous serez ensuite rediriger vers votre compte WhatSapp avec un message, envoyez ce message sans le modifer. Nous vous enverrons les methodes de payement via WhatSapp. Une fois le payement effectue, envoyez nous la capture d'ecran via WhatApp, nous verifierons et vous envoyerons un code que vous utiliser pour valider votre payement dans la palteforme</p>
          </div>
        </div>
      </div>

      <!-- Image au Centre -->
      <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="image/trade2.jpg" style="object-fit: cover;">
        </div>
      </div>

      <!-- Colonne Droite -->
      <div class="col-lg-4">
        <div class="row g-5">
          <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fa fa-question text-white"></i>
            </div>
            <h4>Comment faire un retrait ?</h4>
            <p class="mb-0">
                Une fois connecté, cliquer sur Retrait puis choisir l'investissement qu'on souhaite retirer ensuite renseigner les informations enfin soumettez la demande</p>
          </div>
          <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fa fa-question text-white"></i>
            </div>
            <h4>Comment nous contacter ?</h4>
            <p class="mb-0"> Remplir les informations dans la page contact, ou, joindre le numero +237 697 091 769, ou envoyer un mail a l'adresse globalinvestissementtrading27@gmail.com</p>
          </div>
        </div>
      </div>
        </div>
        </div>
</section>
    <!-- end questions section -->

    @endsection
