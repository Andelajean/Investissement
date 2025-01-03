
@extends('layouts.site2')

@section('content') 

   <!-- questions section -->
<section class="why_section layout_padding">
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
    
 <!-- Bouton Fixe -->
 <a 
    href="https://wa.me/+237697091769?text=Bonjour%20je%20suis%20nouveau%2C%20comment%20faire%20pour%20investir%3F" 
    class="fixed-whatsapp-btn"
    target="_blank" 
    rel="noopener noreferrer"
  >
    <img 
      src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" 
      alt="WhatsApp Logo" 
      style="width: 24px; height: 24px;"
    />
    Plus D'infos
  </a>
    <!-- seconde contain -->
    <section class="service_section layout_padding">
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

@endsection 

  