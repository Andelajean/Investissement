
@extends('layouts.site2')

@section('content') 

<!--start partenaire-->
<section class="why_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2 class="pb-5 mb-3">
                Nos<span> Partenaires</span>
            </h2>
            <h5 class="mb-5">Chez <b> Global Investissement Trading </b>, nous croyons que la collaboration est la clé pour offrir des solutions d'investissement performantes et durables. C'est pourquoi nous avons établi des partenariats stratégiques avec des institutions financières renommées, des entreprises technologiques innovantes et des experts en finance.</h5>
        </div>

        <div class="row text-center">
            <!-- Partenaire 1 -->
            <div class="col-4 col-sm-3 col-md-2 g-3 mx-auto my-3">
                <div class="img-box d-flex justify-content-center">
                    <img src="image/afbank.jpeg" alt="afriklanf first bank" class="img-fluid" style="width: 80px; height: 80px;">
                </div>
            </div>
            <!-- Partenaire 2 -->
            <div class="col-4 col-sm-3 col-md-2 g-3 mx-auto my-3">
                <div class="img-box d-flex justify-content-center">
                    <img src="image/bicec.png" alt="bicec bank" class="img-fluid" style="width: 80px; height: 80px;">
                </div>
            </div>
            <!-- Partenaire 3 -->
            <div class="col-4 col-sm-3 col-md-2 g-3 mx-auto my-3">
                <div class="img-box d-flex justify-content-center">
                    <img src="image/cca.jpeg" alt="cca bank" class="img-fluid" style="width: 80px; height: 80px;">
                </div>
            </div>
            <!-- Ajoutez les autres images de partenaires de la même manière -->
        </div>
    </div>
</section>
<!--end partenaire-->


@endsection 

  