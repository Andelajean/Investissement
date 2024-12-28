@extends('admin.layouts')

@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Mon Profil</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <button class="btn btn-primary" onclick="window.location='{{ route('admin.dashboard') }}'">Retour au Dashboard</button>
        </div>
    </div>
    <div class="row">
        <!-- Profil Card -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="mt-4"> <img src="{{ asset('plugins/images/users/default.jpg') }}" class="img-circle" width="150" />
                        <h4 class="card-title mt-2">{{ Auth::user()->name }}</h4>
                        <h6 class="card-subtitle">{{ Auth::user()->role }}</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><a href="javascript:void(0);" class="link"><i class="icon-people"></i> <font class="font-medium">256</font></a></div>
                            <div class="col-4"><a href="javascript:void(0);" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr> 
                </div>
                <div class="card-body"> <small class="text-muted">Email </small>
                    <h6>{{ Auth::user()->email }}</h6> <small class="text-muted pt-4 db">Phone</small>
                    <h6>{{ Auth::user()->phone }}</h6> <small class="text-muted pt-4 db">Address</small>
                    <h6>{{ Auth::user()->address }}</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">Information</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">Paramètres</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-body">
                            <h3>Information de Profil</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Nom</strong>
                                    <br>
                                    <p class="text-muted">{{ Auth::user()->name }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">{{ Auth::user()->email }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Téléphone</strong>
                                    <br>
                                    <p class="text-muted">{{ Auth::user()->phone }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6"> <strong>Adresse</strong>
                                    <br>
                                    <p class="text-muted">{{ Auth::user()->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--second tab-->
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material" method="POST" action="{{ route('admin.profile.update') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Nom</label>
                                    <div class="col-md-12">
                                        <input type="text" name="name" placeholder="Votre nom" class="form-control form-control-line" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder="Votre email" class="form-control form-control-line" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Téléphone</label>
                                    <div class="col-md-12">
                                        <input type="text" name="phone" placeholder="Votre téléphone" class="form-control form-control-line" value="{{ Auth::user()->phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Adresse</label>
                                    <div class="col-md-12">
                                        <input type="text" name="address" placeholder="Votre adresse" class="form-control form-control-line" value="{{ Auth::user()->address }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Mot de passe</label>
                                    <div class="col-md-12">
                                        <input type="password" name="password" placeholder="Mot de passe" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Mettre à jour le profil</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--second tab-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
