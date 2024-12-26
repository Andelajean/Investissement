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
            <a class="nav-link" href="/contact">Contact</a>
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


<!-- end slider section -->

</div>

   
     <!-- help section -->
    <section class="service_section layout_padding">
        <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
          <span> Temoignages des clients</span>
          </h2>
          <p class="mb-5 text-white">
            Découvrez nos vidéos qui illustrent nos activités d'investissement, recueillent des témoignages inspirants et présentent des interviews exclusives.
          </p>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <p><strong>Présentation des opportunités d'investissement</strong></p>
              <div class="video-box">
                <video src="videos/7.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="box">
              <p><strong>Témoignage de nos clients satisfaits</strong></p>
              <div class="video-box">
                <video src="videos/8.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="box">
              <p><strong>Stratégies pour maximiser vos profits</strong></p>
              <div class="video-box">
                <video src="videos/9.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <p><strong>Exemple d'un projet financé avec succès</strong></p>
              <div class="video-box">
                <video src="videos/10.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="box">
              <p><strong>Interviews avec des experts financiers</strong></p>
              <div class="video-box">
                <video src="videos/11.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="box">
              <p><strong>Explication des concepts clés de la finance</strong></p>
              <div class="video-box">
                <video src="videos/12.mp4" controls width="100%" style="max-height: 200px; min-width: 200px;"></video>
              </div>
            </div>
          </div>
        </div>

       
      </div>
        </div>
    </section>
    <!-- end help section -->

    

    @endsection
