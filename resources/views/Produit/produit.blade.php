<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>
<body class="text-gray-800 bg-white">
    <!-- Product List Section -->
    <div class=" shadow-lg rounded-lg p-8 mx-auto max-w-4xl">
        <h3 class="text-xl font-bold mb-6 text-yellow-600">Liste des Investissements Disponibles</h3>
        <div class="grid grid-cols-1 gap-6">
        @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
        {{ session('error') }}
    </div>
@endif

            <!-- Product Items -->
            <!-- Repeat for 15 products -->
            <div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
                <img src="{{asset('image/1.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
                <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Standard <span class='text-2xl text-blue-500'> </span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>30 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>340 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>2H</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal('Standard ', '30000',' 340000', '2h')">Investir</button>
    
            </div>
            <div class="bg-blue-500 to-red-600 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/2.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Standard <span class='text-2xl text-blue-500'> ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>40 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>440 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>1H50 minutes</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal('Standard ⭐', '40000',' 440000', '1H50 minutes')">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/3.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Standard <span class='text-2xl text-blue-500'> ⭐⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>50 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>550 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>1H45 minutes</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal('Standard ⭐ ⭐', '50000',' 540000', '1H45 minutes')">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/4.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Premium <span class='text-2xl text-blue-500'></span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>60 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>650 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>1H30 minutes</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal('Premium ', '60000',' 650000', '1H30 minutes')">Investir</button>
    </div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/5.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Premium <span class='text-2xl text-blue-500'> ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>70 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>780 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>1H 15 minutes</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal('Premium ⭐', '70000',' 780000', '1H15 minutes')">Investir</button>
    </div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/6.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Premium <span class='text-2xl text-blue-500'> ⭐ ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>80 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>880 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>1H</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal('Premium  ⭐ ⭐', '80000',' 880000', '1H')">Investir</button>
    </div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/7.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">V.I.P ⭐ <span class='text-2xl text-blue-500'></span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>90 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>890 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>45 minutes</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal('V.I.P ⭐', '90000',' 890000', '45 minutes')">Investir</button>
    </div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/8.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">V.V.I.P <span class='text-2xl text-blue-500'>⭐ ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>100 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>1 300 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>30 minutes</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal('V.V.I.P  ⭐⭐', '100000',' 1300000', '30 minutes')">Investir</button>
    </div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/9.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">V.V.I.P <span class='text-2xl text-blue-500'>⭐ ⭐ ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>200 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>2 400 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>15 minutes</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal('V.V.I.P  ⭐⭐⭐', '200000',' 2400000', '15 minutes')">Investir</button>
    </div>       
    </div>
<!-- Fenêtre contextuelle -->
<div id="investModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-semibold mb-4">Détails de l'investissement</h2>
        <form id="investForm" method="POST" action="{{ route('confirmerInvestissement') }}">
            @csrf
            <div class="mb-4">
                <label for="productName" class="block text-sm font-medium text-gray-700">Nom du produit</label>
                <input 
                    type="text" 
                    id="productName" 
                    name="productName" 
                    class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                    readonly 
                >
            </div>
            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-700">Montant</label>
                <input 
                    type="text" 
                    id="amount" 
                    name="amount" 
                    class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                    readonly 
                >
            </div>
            <div class="mb-4">
                <label for="gain" class="block text-sm font-medium text-gray-700">Gain</label>
                <input 
                    type="text" 
                    id="gain" 
                    name="gain" 
                    class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                    readonly 
                >
            </div>
            <div class="mb-4">
                <label for="duration" class="block text-sm font-medium text-gray-700">Durée</label>
                <input 
                    type="text" 
                    id="duration" 
                    name="duration" 
                    class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                    readonly 
                >
            </div>
            <div class="flex justify-end">
                <button 
                    type="button" 
                    class="bg-red-500 text-white py-2 px-4 rounded-md mr-2" 
                    onclick="closeModal()"
                >
                    Annuler
                </button>
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white py-2 px-4 rounded-md"
                >
                    Confirmer
                </button>
            </div>
        </form>
    </div>
</div>

<script>
  function openModal(productName, amount, gain, duration) {
        // Remplir les champs du formulaire avec les données
        document.getElementById('productName').value = productName;
        document.getElementById('amount').value = amount;
        document.getElementById('gain').value = gain;
        document.getElementById('duration').value = duration;

        // Afficher la fenêtre contextuelle
        document.getElementById('investModal').classList.remove('hidden');
    }

    function closeModal() {
        // Masquer la fenêtre contextuelle
        document.getElementById('investModal').classList.add('hidden');
    }

</script>
</body>
</html>
