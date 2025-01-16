
@extends('layouts.site2')

@section('content') 

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

@endsection 

  