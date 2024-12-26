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
                @php
    // Récupérer les données nécessaires
    $solde = \App\Models\Solde::where('id_user', Auth::id())->first();
    $nombreInvestissements = \App\Models\Investissement::where('id_user', Auth::id())->count();
    $investissementsActifs = \App\Models\Investissement::where('id_user', Auth::id())->where('statut', 'oui')->count();
    $investissementsInactifs = \App\Models\Investissement::where('id_user', Auth::id())->where('statut', 'non')->count();
@endphp

<div class="mt-6 grid grid-cols-2 gap-6">
    <!-- Solde -->
    <div class="bg-green-500 p-6 rounded-lg text-center text-white">
        <h3 class="text-lg font-semibold">Solde</h3>
        <p class="text-2xl font-bold">{{ number_format($solde ? $solde->montant : 0, 2) }} FCFA</p>
    </div>
    
    <!-- Nombre D'investissement -->
    <div class="bg-green-500 p-6 rounded-lg text-center text-white">
        <h3 class="text-lg font-semibold">Nombre D'investissement</h3>
        <p class="text-2xl font-bold">{{ $nombreInvestissements }}</p>
    </div>

    <!-- Investissement Actif -->
    <div class="bg-blue-500 p-6 rounded-lg text-center text-white">
        <h3 class="text-lg font-semibold">Investissement Actif</h3>
        <p class="text-2xl font-bold">{{ $investissementsActifs }}</p>
    </div>

    <!-- Investissement Inactif -->
    <div class="bg-blue-500 p-6 rounded-lg text-center text-white">
        <h3 class="text-lg font-semibold">Investissement Inactif</h3>
        <p class="text-2xl font-bold">{{ $investissementsInactifs }}</p>
    </div>
</div>

            </div>
        </div>
    </div>

    <!-- Invitation Section -->
    <!-- Invitation Section -->
<div class="bg-gradient-to-r from-purple-200 to-purple-400 shadow-lg rounded-lg p-8 mb-8 mx-auto max-w-4xl">
    <p class="text-center mb-6 font-medium text-white">
        Plus vous invitez les personnes à investir, plus vous aurez des récompenses.
    </p>
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        {{ session('error') }}
    </div>
@endif

    <div class="flex justify-between items-center">
       
        @php
    $investissementsInactifs = \App\Models\Investissement::where('id_user', Auth::id())
        ->where('statut', 'non')
        ->get();

    $nombreInactifs = $investissementsInactifs->count();
@endphp

              <!-- Section des investissements inactifs -->
@if ($nombreInactifs > 0)
    <div class="mt-6 p-4 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700">
        <p>
            Vous avez <strong>{{ $nombreInactifs }}</strong> investissement(s) inactif(s). 
            <button 
                class="text-blue-600 underline"
                onclick="openActivationModal()">
                Cliquez ici pour activer
            </button>
        </p>
    </div>
@endif
         

<!-- Fenêtre contextuelle d'activation -->
<div id="activationModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-bold text-gray-700 mb-4">Activation d'investissement</h2>
        <p class="text-sm text-gray-500 mb-4">
            Pour activer votre investissement, contactez l'administrateur via WhatsApp en cliquant sur le bouton ci-dessous.
        </p>
        
        @foreach ($investissementsInactifs as $investissement)
            <div class="mb-4 p-3 border border-gray-300 rounded-lg">
                <p><strong>Montant :</strong> {{ $investissement->montant }} </p>
                <p><strong>Email :</strong>  {{ Auth::user()->email }}</p>
                <p><strong>ID :</strong> {{ $investissement->id }}</p>
                <a 
                    href="https://wa.me/+237697091769?text={{ urlencode("Bonjour Admin, je souhaite activer mon investissement.\nMontant : {$investissement->montant} FCFA\nEmail : { Auth::user()->email }\nID : {$investissement->id}") }}" 
                    target="_blank"
                    class="mt-2 block bg-green-600 text-white text-center py-2 px-4 rounded-lg hover:bg-green-700 transition"
                >
                    Contacter l'Admin sur WhatsApp
                </a>
            </div>
        @endforeach

        <button 
            onclick="closeActivationModal()" 
            class="mt-4 w-full bg-gray-400 text-white py-2 px-4 rounded-lg hover:bg-gray-500 transition"
        >
            Fermer
        </button>
    </div>
</div>


        <!-- Bouton Valider un paiement -->
        <button 
            class="bg-green-600 text-white py-3 px-6 rounded-lg hover:bg-green-700 transition"
            onclick="openPaymentModal()">
            Valider un paiement
        </button>
    </div>
</div>


    <!-- Modal pour Valider un paiement -->
<div id="paymentModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6 relative">
        <!-- Bouton de fermeture -->
        <button 
            onclick="closePaymentModal()" 
            class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600">
            &times;
        </button>
        
         <h2 class="text-lg font-bold text-gray-700 mb-4">Validation de paiement</h2>
        <p class="text-sm text-gray-500 mb-6">
            Entrez le code envoyé par l'administrateur sur WhatsApp pour valider votre paiement.
        </p>
        <form method="POST" action="{{ route('valider.depot') }}">
            @csrf
        <label for="code" class="block text-sm font-medium text-gray-700">Code de validation</label>
                <input 
                    type="text" 
                    id="code" 
                    name="code" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-purple-500" 
                    placeholder="Entrez le code ici" 
                    required 
                >
        <button 
            class="mt-4 w-full bg-green-700 text-white py-3 px-6 rounded-lg hover:bg-purple-800 transition" type="submit">
            Confirmer
        </button>
        
        </form>
    </div>
    </div>
</div>
</div>
    <!-- Action Buttons Section -->
    <div class="bg-white shadow-lg rounded-lg p-8 mb-8 mx-auto max-w-4xl">
        <div class="grid grid-cols-3 gap-6">
        <div class="bg-gradient-to-r from-green-400 to-green-600 p-8 rounded-lg text-center text-white">
        <button class="flex flex-col items-center gap-2" onclick="openRechargeModal()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm3.707 8.707-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L11 12.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            Recharger Mon Compte
        </button>
    </div>


 <!-- Fenêtre contextuelle -->
 <div id="rechargeModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md transform transition-transform duration-300">
            <!-- Titre -->
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Recharge Mon Compte</h2>
            <p class="text-gray-600 mb-6">
                Pour effectuer une recharge, Contacter l'administrateur sur whatsapp pour avoir les modalités de paiements , puis revenez dans la plate forme pour valider le paiement en mettant le code que l'administrateur vous communiquera 
            </p>


            <button 
    type="button" 
    class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg transition" 
    onclick="contactAdmin()">
    Contacter L'administrateur
</button>

                <button type="button" class="w-full bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition" onclick="closeRechargeModal()">
                    Annuler
                </button>
        

            <!-- Bouton pour fermer -->
            
        </div>
    </div>


<!-- Vue Blade : investissements.blade.php -->
<div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="modal">
    <div class="bg-white p-8 rounded-lg w-11/12 md:w-1/2">
        <h2 class="text-lg font-bold mb-4">Liste de vos investissements</h2>
        
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Nom de l'investissement</th>
                    <th class="border border-gray-300 px-4 py-2">Montant</th>
                    <th class="border border-gray-300 px-4 py-2">Durée</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($investissements as $investissement)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $investissement->nom_investissement }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $investissement->montant }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $investissement->duree }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <form action="/demander-retrait" method="POST">
                                @csrf
                                <input type="hidden" name="id_investissement" value="{{ $investissement->id }}">
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Demander le retrait</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">Aucun investissement trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded" id="closeModalButton">Fermer</button>
    </div>
</div>

<!-- Bouton pour ouvrir la modale -->

    <div class="bg-gradient-to-r from-red-400 to-red-600 p-8 rounded-lg text-center text-white" id="openModalButton">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8 inline">
            <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm-1 14.414V13H8.586a1 1 0 0 1 0-1.414l4-4a1 1 0 0 1 1.414 1.414L11 11.586V15.414a1 1 0 0 1-1 1Z"/>
        </svg>
        Retrait
    </div>

<!-- Script JavaScript pour ouvrir et fermer la modale -->
<script>
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('modal');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>
<!-- Backend Laravel -->






            <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-8 rounded-lg text-center text-white">
    <a href="/profile" class="flex flex-col items-center gap-2"> <!-- Lien vers la page du profil -->
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm4 12H8a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Z"/>
            </svg>
            Compte
        </button>
    </a>
</div>

<div class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-8 rounded-lg text-center text-white">
    <button 
        class="flex flex-col items-center gap-2" 
        onclick="opeModal()"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
            <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm-1 5a1 1 0 0 1 2 0v6a1 1 0 0 1-2 0Zm0 8a1 1 0 1 1 1-1 1 0 0 1-1 1Z"/>
        </svg>
        Produit
    </button>
</div>

<!-- Fenêtre contextuelle -->
<div id="currencyModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-semibold mb-4">Choisissez une devise</h2>
        <form id="currencyForm" action="{{ route('produit.list') }}" method="GET">
            @csrf
            <div class="mb-4">
                <label for="currency" class="block text-sm font-medium text-gray-700">Choisissez Votre Devise :</label>
                <select id="currency" class="w-full p-2 border rounded-lg mb-4" name="currency" onchange="updateAmount()">
            <option value="XAF">XAF (FCFA)</option>
            <option value="XOF">XOF (FCFA UEMAO)</option>
            <option value="CDF">CDF (Franc Congolais)</option>
            <option value="GNF">GNF (Franc Guinéen)</option>
            <option value="USD">USD (Dollar)</option>
        </select>
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md mr-2" onclick="closeModal()">Annuler</button>
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-md">Confirmer</button>
            </div>
        </form>
    </div>
</div>

            <div class="bg-gradient-to-r from-purple-400 to-purple-600 p-8 rounded-lg text-center text-white">
                <a href="/contact">
            <button class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                        <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm-2 8h4a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2Z"/>
                    </svg>
                    Contact
                </button>
                </a>
            </div>
            <div class="bg-gradient-to-r from-gray-400 to-gray-600 p-8 rounded-lg text-center text-white">
            <a href="/help">  
            <button class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                        <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm-3 9h6a1 1 0 0 1 0 2H9a1 1 0 0 1 0-2Z"/>
                    </svg>
                    Aide
                </button>
                </a> 
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

    

    <!-- Historique des Dépôts -->
<div class="bg-gradient-to-r from-red-400 to-red-600 shadow-lg rounded-lg p-8 mx-auto max-w-4xl mb-8">
    <h3 class="text-lg font-bold mb-6 text-white">Historique des Dépôts</h3>
    <table class="w-full text-left border-collapse bg-white rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-300">
                <th class="py-3 px-4 border">Date</th>
                <th class="py-3 px-4 border">Montant</th>
                <th class="py-3 px-4 border">Devise</th>
                <th class="py-3 px-4 border">Statut</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($depots as $depot)
                <tr>
                    <td class="py-3 px-4 border">{{ $depot->date_depot }}</td>
                    <td class="py-3 px-4 border">{{ $depot->montant }}</td>
                    <td class="py-3 px-4 border">{{ $depot->devise }}</td>
                    <td class="py-3 px-4 border text-green-500">{{ $depot->statut }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Historique des Retraits -->
<div class="bg-gradient-to-r from-green-400 to-green-600 shadow-lg rounded-lg p-8 mx-auto max-w-4xl mb-8">
    <h3 class="text-lg font-bold mb-6 text-white">Historique des Retraits</h3>
    <table class="w-full text-left border-collapse bg-white rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-300">
                <th class="py-3 px-4 border">Date</th>
                <th class="py-3 px-4 border">Montant</th>
                <th class="py-3 px-4 border">Devise</th>
                <th class="py-3 px-4 border">Statut</th>
                <th class="py-3 px-4 border">Nom Investissement</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($retraits as $retrait)
                <tr>
                    <td class="py-3 px-4 border">{{ $retrait->date_retrait }}</td>
                    <td class="py-3 px-4 border">{{ $retrait->montant }}</td>
                    <td class="py-3 px-4 border">{{ $retrait->devise }}</td>
                    <td class="py-3 px-4 border text-yellow-500">{{ $retrait->statut }}</td>
                    <td class="py-3 px-4 border">{{ $retrait->nom_investissement }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Historique des Investissements -->
<div class="bg-gradient-to-r from-yellow-200 to-green-400 shadow-lg rounded-lg p-8 mx-auto max-w-4xl">
    <h3 class="text-lg font-bold mb-6 text-white">Historique des Investissements</h3>
    <table class="w-full text-left border-collapse bg-white rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-300">
                <th class="py-3 px-4 border">Date</th>
                <th class="py-3 px-4 border">Nom de l'investissement</th>
                <th class="py-3 px-4 border">Montant</th>
                <th class="py-3 px-4 border">Durée</th>
                <th class="py-3 px-4 border">Gain</th>
                <th class="py-3 px-4 border">Statut</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($investissements as $investissement)
                <tr>
                    <td class="py-3 px-4 border">{{ $investissement->date_investissement }}</td>
                    <td class="py-3 px-4 border">{{ $investissement->nom_investissement }}</td>
                    <td class="py-3 px-4 border">{{ $investissement->montant }}</td>
                    <td class="py-3 px-4 border">{{ $investissement->duree }}</td>
                    <td class="py-3 px-4 border">{{ $investissement->gain }}</td>
                    <td class="py-3 px-4 border text-green-500">{{ $investissement->statut }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

  


    <div id="currency-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg w-96">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Voir les Produits Disponibles</h2>
        <label for="currency" class="block text-gray-700 mb-2">choisir la Devise</label>
        <form action="" method="POST">
            @csrf
        <select id="currency" class="w-full p-2 border rounded-lg mb-4" name="currency" onchange="updateAmount()">
            <option value="XAF">XAF</option>
            <option value="XOF">XOF</option>
            <option value="CDF">CDF</option>
            <option value="GNF">GNF</option>
            <option value="USD">USD</option>
        </select>
        <button class="bg-green-500 text-white py-2 px-4 rounded-lg w-full hover:bg-green-600"   type="submit">Confirmer</button>
        <button class="mt-2 w-full bg-red-400 text-white py-2 px-4 rounded-lg hover:bg-red-500" onclick="closeModal()" type="reset">Annuler</button>

       </form>
    </div>
    </div>


    

   
<script>
   let currentAmount = 0;

function openModal(amount,gain) {
    currentAmount = amount;
    currentGain=gain;
    document.getElementById('currency-modal').classList.remove('hidden');
    
}

function closeModal() {
    document.getElementById('currency-modal').classList.add('hidden');
}
function opeModal() {
        document.getElementById('currencyModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('currencyModal').classList.add('hidden');
    }
    

function closModal() {
    document.getElementById('currency-modal').classList.add('hidden');
}
 function openRechargeModal() {
            console.log("Ouverture de la fenêtre contextuelle");
            document.getElementById('rechargeModal').classList.remove('hidden');
        }

        function closeRechargeModal() {
            console.log("Fermeture de la fenêtre contextuelle");
            document.getElementById('rechargeModal').classList.add('hidden');
        }
        // Transmettre les données utilisateur à JavaScript
    const userEmail = "{{ Auth::user()->email ?? '' }}";
    const userId = "{{ Auth::user()->id ?? '' }}";

    function contactAdmin() {
        // Numéro WhatsApp de l'administrateur
        const adminNumber = "+23797091769";

        // Message à envoyer
        const message = `Bonjour, je suis l'utilisateur avec l'email : ${userEmail} et l'ID : ${userId}. Je voudrais investir , quels sont les methodes de paiements??.`;

        // URL pour rediriger vers WhatsApp
        const whatsappUrl = `https://wa.me/${adminNumber.replace('+', '')}?text=${encodeURIComponent(message)}`;

        // Redirection vers WhatsApp
        window.open(whatsappUrl, "_blank");
    }
    // Fonction pour ouvrir la fenêtre contextuelle
    function openPaymentModal() {
        document.getElementById('paymentModal').classList.remove('hidden');
    }

    // Fonction pour fermer la fenêtre contextuelle
    function closePaymentModal() {
        document.getElementById('paymentModal').classList.add('hidden');
    }
    
    function openActivationModal() {
        document.getElementById('activationModal').classList.remove('hidden');
    }

    function closeActivationModal() {
        document.getElementById('activationModal').classList.add('hidden');
    }


</script>
</body>
</html>
