@extends('admin.layouts')

@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Paramètres Globaux</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <button class="btn btn-primary" onclick="window.location='{{ route('admin.dashboard') }}'">Retour au Dashboard</button>
        </div>
    </div>
    <div class="row">
        <!-- Paramètres Card -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Paramètres du Site</h4>
                    <form class="form-material" method="POST" action="{{ route('admin.settings.update') }}">
                        @csrf
                        <div class="form-group">
                            <label for="site_name">Nom du Site</label>
                            <input type="text" name="site_name" class="form-control" id="site_name" placeholder="Nom du site" value="{{ old('site_name', config('settings.site_name')) }}">
                        </div>
                        <div class="form-group">
                            <label for="site_email">Email du Site</label>
                            <input type="email" name="site_email" class="form-control" id="site_email" placeholder="Email du site" value="{{ old('site_email', config('settings.site_email')) }}">
                        </div>
                        <div class="form-group">
                            <label for="site_phone">Téléphone du Site</label>
                            <input type="text" name="site_phone" class="form-control" id="site_phone" placeholder="Téléphone du site" value="{{ old('site_phone', config('settings.site_phone')) }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Adresse du Site</label>
                            <textarea name="address" class="form-control" id="address" rows="3" placeholder="Adresse du site">{{ old('address', config('settings.address')) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="maintenance_mode">Mode Maintenance</label>
                            <select name="maintenance_mode" class="form-control" id="maintenance_mode">
                                <option value="0" {{ config('settings.maintenance_mode') == 0 ? 'selected' : '' }}>Désactivé</option>
                                <option value="1" {{ config('settings.maintenance_mode') == 1 ? 'selected' : '' }}>Activé</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
