@extends('layouts.site2')
<!DOCTYPE html>
<html>
<head>
    <style>
        /* Ajout de styles basiques pour les emails */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9fafb;
            color: #374151;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #1f2937;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .email-body {
            padding: 20px;
        }
        .email-footer {
            text-align: center;
            padding: 20px;
            background-color: #f3f4f6;
            font-size: 14px;
            color: #6b7280;
        }
        .btn {
            display: inline-block;
            background-color: #3b82f6;
            color: #ffffff;
            padding: 10px 20px;
            margin: 10px 0;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }
        .btn:hover {
            background-color: #2563eb;
        }
        .info-box {
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 5px;
            padding: 15px;
            margin: 10px 0;
        }
    </style>
</head>
<body>


@section('content') 
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            
        </div>

        <!-- Body -->
        <div class="email-body">
            <p>Bonjour, <strong>{{ $user->name }}</strong> 👋,</p>
            <p>Nous sommes ravis de vous accueillir sur notre plateforme. Voici un résumé de vos informations :</p>

            <!-- Info Box -->
            <div class="info-box">
                <p><strong>Nom :</strong> {{ $user->name }}</p>
                <p><strong>Email :</strong> {{ $user->email }}</p>
            </div>

            <!-- Buttons -->
            <p>Voici quelques liens utiles pour commencer :</p>
            <a href="/login" class="btn">Se connecter</a>
            <a href="/help" class="btn">Obtenir de l'aide</a>
            <a href="#" class="btn">Voir l'équipe</a>
            <a href="{{ route('dashboard') }}" class="btn">Accéder au Dashboard</a>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            Merci d'avoir rejoint notre communauté !  
            <br>  
            
        </div>
    </div>
</body>
</html>
@endsection