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
            <a class="nav-link" href="{{route('dashboard')}}"> Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/help">Aide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="team"> equipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="partenaire"> partenaire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
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
                    <a href="{{route('register')}}" class="btn1">
                      Investir Maintenant
                    </a>
                  </div>
                  <div class="col btn-box">
                    <a href="{{route('login')}}" class="btn1">
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
                    <a href="/register" class="btn1">
                      Investir Maintenant
                    </a>
                  </div>
                  <div class="col btn-box">
                    <a href="/login" class="btn1">
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
<section class="about_section layout_padding">
<div class="container">
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
                    <h1 class="text-dark mb-0" data-toggle="counter-up">12345</h1>
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
    </div>
</section>
    <!-- Facts Start -->


    <!-- produit section -->
    <section class="about_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
          <span>  Nos Produits</span>
          </h2>
          <p>
            Découvrez une gamme variée de produits d'investissement, conçus pour vous accompagner dans la croissance de votre capital de manière sécurisée et efficace.
          </p>
        </div>
        <div class="row">

            <div class="detail-box mx-3" style="text-align: justify;">
              <h3>

                Nous sommes Global Investissement Trading
              </h3>
              <p>
                Nous proposons une gamme de produits financiers diversifiés adaptés à vos besoins d'investissement. 
                Que vous soyez débutant ou expérimenté, nous avons des solutions pour vous aider à atteindre vos objectifs 
                financiers.
              </p>
              <p>
                Nous offrons des produits allant des investissements à faible risque à ceux plus dynamiques, 
                en vous garantissant une transparence totale et un accompagnement personnalisé pour chaque étape 
                de votre parcours d'investisseur.
              </p>

            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="img-box">
              <img src="image/prod1.jpg" alt="produit" srcset="" style="height: 500px; width: 500px;">
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <img src="image/prod2.jpg" alt="produit" srcset="" style="height: 500px; width: 500px;">
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <img src="image/prod3.jpg" alt="produit" srcset="" style="height: 500px; width: 500px;">
            </div>
          </div>
          <div class="detail-box mx-3">
            <a href="users/produit-list" class="my-3">
              En savoir plus
            </a> 
          </div>
        </div>
      </div>
    </section>
    <!-- end produit section -->

    <section class="about_section layout_padding">
      <div class="container">
            <div class="heading_container heading_center">
                <h2 class="pb-5 mb-3">
                Membres de <span>l'equipe</span>
                </h2>
                <h2>Des professionnels de l'entreprise prêts à aider</h2>
            </div>
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
            <div class="row g-5">
                <!-- <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="image/team-1.jpg" alt="" style="height: 400px;">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Emile SIMB</h4>
                            <p class="text-danger">PDG</p>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="image/dg.jpg" alt="" style="height: 400px;">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Matio Dikando Sywa</h4>
                            <p class="text-danger">Directeur</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="image/gf.jpg" alt="" style="height: 400px;">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Eboi Julio Paul</h4>
                            <p class="text-danger">Gestionnaire financier</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="image/sg.jpg" alt="" style="height: 400px;">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Raphaella Chloé Kira</h4>
                            <p class="text-danger">Sécrétaire générale</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

     <!-- questions section -->
<section class="about_section layout_padding">
  <div class="container">
      <div class="heading_container heading_center">
          <h2 class="pb-5 mb-3">
          Questions<span> Fréquentes</span>
          </h2>
          <h1 class="mb-5 text-white">Réponses à vos interrogations sur l'investissement</h1>
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

<!-- seconde contain -->
<section class="about_section layout_padding">
<div class="service_container">
  <div class="container">
    <div class="heading_container heading_center">
      <p class="mb-0 text-white">
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

  </div>
</div>
</section>
<!-- end seconde section -->


<!-- start contact section -->
<section class="about_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
      <span> Contactez Nous</span>
      </h2>
      <p>
        N'hésitez pas à nous contacter pour toute question ou pour plus d'informations sur nos services d'investissement en ligne. Nous sommes à votre écoute pour vous accompagner.
      </p>
    </div>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5 mb-5">
          <div class="col-lg-4">
            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
              <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                <i class="fa fa-phone text-white"></i>
              </div>
              <div class="ps-4 mx-3">
                <h5 class="mb-2 text-white">Appelez pour toute question</h5>
                <h4 class="text-primary mb-0">+237 697 091 769</h4>
                <h4 class="text-primary mb-0">+237 686 370 673</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
              <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3" style="width: 60px; height: 60px;">
                <i class="fa fa-envelope-open text-white"></i>
              </div>
              <div class="ps-4 mx-3">
                <h5 class="mb-2">Envoyez un email pour un devis gratuit</h5>
                <h4 class="text-primary mb-0">globalinvestissement
                  trading27@gmail.com</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
              <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                <i class="fa fa-map-marker text-white"></i>
              </div>
              <div class="ps-4 mx-3">
                <h5 class="mb-2">Visitez notre bureau</h5>
                <h4 class="text-primary mb-0">Mokolo , Bertoua, Cameroun</h4>
              </div>
            </div>
          </div>
        </div>
        @if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif

        <div class="row g-5">
          <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
          <form action="{{ route('contact') }}" method="POST">
  @csrf
  <div class="row g-3">
      <div class="col-md-6 mt-3">
          <input type="text" class="form-control border-0 bg-light px-4" name="nom" placeholder="Votre Nom" style="height: 55px;">
      </div>
      <div class="col-md-6 mt-3">
          <input type="email" class="form-control border-0 bg-light px-4" name="email" placeholder="Votre Email" style="height: 55px;">
      </div>
      <div class="col-12 mt-3">
          <input type="text" class="form-control border-0 bg-light px-4" name="objet" placeholder="Objet" style="height: 55px;">
      </div>
      <div class="col-12 mt-3">
          <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="4" placeholder="Message"></textarea>
      </div>
      <div class="col-12 mt-5">
          <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le message</button>
      </div>
  </div>
</form>

          </div>
          <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
          <iframe class="position-relative rounded w-100 h-100" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.2012179860983!2d14.51200031533367!3d4.577300696672558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108cd9e98f4a6d07%3A0x71c0c89e1b52c1cd!2sBertoua%2C%20Cameroon!5e0!3m2!1sen!2sfr!4v1603794290143!5m2!1sen!2sfr" 
            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
          </iframe>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->

<!--start partenaire-->
<section class="about_section layout_padding">
  <div class="container">
      <div class="heading_container heading_center">
          <h2 class="pb-5 mb-3">
              Nos<span> Partenaires</span>
          </h2>
          <h5 class="mb-5">
              Chez <b>Global Investissement Trading</b>, nous croyons que la collaboration est la clé pour offrir des solutions d'investissement performantes et durables. 
              C'est pourquoi nous avons établi des partenariats stratégiques avec des institutions financières renommées, des entreprises technologiques innovantes et des experts en finance.
          </h5>
      </div>

      <div class="row text-center g-4">
          <!-- Partenaire 1 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/afbank.jpeg" alt="Afrikland First Bank" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 2 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/bicec.png" alt="BICEC Bank" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 3 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/cca.jpeg" alt="CCA Bank" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 4 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/uba.jpeg" alt="UBA Bank" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 5 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/scb.png" alt="SCB" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 6 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/cocacola.png" alt="cocacola" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 7 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/ecobank.jpeg" alt="Ecobank" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 8 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/sgc.png" alt="SGC" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 9 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/bgc.png" alt="BGC" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 10 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/sc.jpg" alt="Standard Chartered" class="img-fluid" style="width: 100px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 11 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/momo.png" alt="Mobile Money" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 12 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/om.jpeg" alt="Orange Money" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 13 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/1xbet.jpeg" alt="1xbet" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 14 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/airtel.png" alt="airtel" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
          <!-- Partenaire 15 -->
          <div class="col-4 col-sm-3 col-md-2 mb-4">
              <div class="img-box d-flex justify-content-center">
                  <img src="image/moov.jpg" alt="moov" class="img-fluid" style="width: 80px; height: 80px;">
              </div>
          </div>
      </div>
  </div>
</section>
<!--end partenaire-->

    @endsection