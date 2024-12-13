<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Utilisateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-800">
    <!-- User Info Section -->
    <div class="bg-gradient-to-r from-blue-200 to-blue-400 shadow-lg rounded-lg p-8 mb-8 mx-auto max-w-4xl">
        <div class="grid grid-cols-1 gap-6">
            <div class="bg-white p-8 rounded-lg">
                <div class="flex items-center justify-between">
                <div>
    <h2 class="text-3xl font-bold text-gray-800">
        {{ Auth::user()->name }}
    </h2>
    <p><span class='text-2xl text-blue-500'> {{ Auth::user()->telephone }}</span></p>
</div>

                    <div>
                        <img src="/image/2.jpg" alt="Crypto" class="h-20 w-20 rounded-full shadow-lg">
                    </div>
                </div>
                <div class="mt-6 grid grid-cols-2 gap-6">
                    <div class="bg-green-500 p-6 rounded-lg text-center text-white">
                        <h3 class="text-lg font-semibold">Solde</h3>
                        <p class="text-2xl font-bold">$1,200</p>
                    </div>
                    <div class="bg-blue-500 p-6 rounded-lg text-center text-white">
                        <h3 class="text-lg font-semibold">Gains</h3>
                        <p class="text-2xl font-bold">$300</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Invitation Section -->
    <div class="bg-gradient-to-r from-purple-200 to-purple-400 shadow-lg rounded-lg p-8 mb-8 mx-auto max-w-4xl">
        <p class="text-center mb-6 font-medium text-white">Plus vous invitez les personnes à investir, plus vous aurez des récompenses.</p>
        <div class="text-center">
            <button class="bg-purple-700 text-white py-3 px-6 rounded-lg hover:bg-purple-800">Partager le lien</button>
        </div>
    </div>

    <!-- Action Buttons Section -->
    <div class="bg-white shadow-lg rounded-lg p-8 mb-8 mx-auto max-w-4xl">
        <div class="grid grid-cols-3 gap-6">
            <div class="bg-gradient-to-r from-green-400 to-green-600 p-8 rounded-lg text-center text-white">
                <button class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                        <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm3.707 8.707-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L11 12.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    Faire une Recharge
                </button>
            </div>
            <div class="bg-gradient-to-r from-red-400 to-red-600 p-8 rounded-lg text-center text-white">
                <button class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                        <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm-1 14.414V13H8.586a1 1 0 0 1 0-1.414l4-4a1 1 0 0 1 1.414 1.414L11 11.586V15.414a1 1 0 0 1-1 1Z"/>
                    </svg>
                    Retrait
                </button>
            </div>
            <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-8 rounded-lg text-center text-white">
                <button class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                        <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm4 12H8a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Z"/>
                    </svg>
                    Compte
                </button>
            </div>
            <div class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-8 rounded-lg text-center text-white">
                <a href="{{route('produit.list')}}">
                <button class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                        <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm-1 5a1 1 0 0 1 2 0v6a1 1 0 0 1-2 0Zm0 8a1 1 0 1 1 1-1 1 1 0 0 1-1 1Z"/>
                    </svg>
                    Produit
                </button>
                </a>
            </div>
            <div class="bg-gradient-to-r from-purple-400 to-purple-600 p-8 rounded-lg text-center text-white">
                <button class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                        <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm-2 8h4a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2Z"/>
                    </svg>
                    Contact
                </button>
            </div>
            <div class="bg-gradient-to-r from-gray-400 to-gray-600 p-8 rounded-lg text-center text-white">
                <button class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                        <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm-3 9h6a1 1 0 0 1 0 2H9a1 1 0 0 1 0-2Z"/>
                    </svg>
                    Aide
                </button>
            </div>
        </div>
    </div>

    <!-- Investment Progress Section -->
    <div class="bg-gradient-to-r from-green-200 to-green-400 shadow-lg rounded-lg p-8 mb-8 mx-auto max-w-4xl">
        <h3 class="text-lg font-bold mb-6 text-gray-800">Votre investissement en temps réel</h3>
        <div class="bg-green-300 h-6 rounded-lg">
            <div class="bg-green-600 h-6 rounded-lg w-3/4"></div>
        </div>
        <p class="mt-4 text-gray-800">75% de progression</p>
    </div>

    <!-- History Table Section -->
    <div class="bg-gradient-to-r from-gray-200 to-gray-400 shadow-lg rounded-lg p-8 mx-auto max-w-4xl">
        <h3 class="text-lg font-bold mb-6 text-white">Historique des transactions</h3>
        <table class="w-full text-left border-collapse bg-white rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-300">
                    <th class="py-3 px-4 border">Date</th>
                    <th class="py-3 px-4 border">Type</th>
                    <th class="py-3 px-4 border">Montant</th>
                    <th class="py-3 px-4 border">Statut</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 px-4 border">2024-12-01</td>
                    <td class="py-3 px-4 border">Recharge</td>
                    <td class="py-3 px-4 border">$500</td>
                    <td class="py-3 px-4 border text-green-500">Réussi</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 border">2024-11-25</td>
                    <td class="py-3 px-4 border">Retrait</td>
                    <td class="py-3 px-4 border">$200</td>
                    <td class="py-3 px-4 border text-red-500">Échoué</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
