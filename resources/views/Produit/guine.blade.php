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
            <!-- Product Items -->
            <!-- Repeat for 15 products -->
            <div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
                <img src="{{asset('image/1.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
                <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Standar <span class='text-2xl text-blue-500'> </span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>100 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>340 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>40 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal(100,340000)">Investir</button>
            </div>
            <div class="bg-blue-500 to-red-600 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/2.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Standar <span class='text-2xl text-blue-500'> ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>40 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>440 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>35 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal(40000,440000)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/3.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Standar <span class='text-2xl text-blue-500'> ⭐⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>50 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>550 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>30 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal(50000,550000)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/4.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Premium <span class='text-2xl text-blue-500'></span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>60 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>650 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>25 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal(60000,650000)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/5.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Premium <span class='text-2xl text-blue-500'> ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>70 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>780 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>20 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal(70000,780000)">Investir</button>
    </div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/6.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Premium <span class='text-2xl text-blue-500'> ⭐ ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>80 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>880 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>15 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal(80000,880000)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/7.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">V.I.P <span class='text-2xl text-blue-500'></span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>90 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>890 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>10 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal(90000,890000)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/8.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">V.V.I.P <span class='text-2xl text-blue-500'>⭐ ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>100 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>1 300 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>7 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal(100000,1300000)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/9.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">V.V.I.P <span class='text-2xl text-blue-500'>⭐ ⭐ ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>200 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>2 400 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>5 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="openModal(200000,2400000)">Investir</button>
</div>        
    </div>
<!-- Modal pour la sélection de devise -->
<div id="currency-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg w-96">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Choisir une devise</h2>
        <label for="currency" class="block text-gray-700 mb-2">Devise</label>
        <form action="/payement/investissement" method="POST">
            @csrf
        <select id="currency" class="w-full p-2 border rounded-lg mb-4" name="currency" onchange="updateAmount()">
            <option value="XAF">XAF</option>
            <option value="XOF">XOF</option>
            <option value="CDF">CDF</option>
            <option value="GNF">GNF</option>
            <option value="USD">USD</option>
        </select>
        <p class="text-gray-700 mb-4">
            Montant à payer : <span id="amount" class="font-bold">100 XAF</span>
        </p>
        <p class="text-gray-700 mb-4">
           Gain : <span id="gain" class="font-bold">30 000 XAF</span>
        </p>
        <input type="text" name="montant" id="amunt" class="w-full p-2 border rounded-lg mb-4">
        <input type="text" name="benefice" id="gan"  class="w-full p-2 border rounded-lg mb-4">
        <button class="bg-green-500 text-white py-2 px-4 rounded-lg w-full hover:bg-green-600"  onclick="confirmInvestment()" type="submit">Confirmer</button>
        <button class="mt-2 w-full bg-gray-400 text-white py-2 px-4 rounded-lg hover:bg-gray-500" onclick="closeModal()" type="reset">Annuler</button>

       </form>
    </div>
</div>
<script>
    let currentAmount = 0;

    function openModal(amount,gain) {
        currentAmount = amount;
        currentGain=gain;
        document.getElementById('currency-modal').classList.remove('hidden');
        updateAmount();
    }

    function closeModal() {
        document.getElementById('currency-modal').classList.add('hidden');
    }

    function updateAmount() {
        const currency = document.getElementById('currency').value;
        const conversionRates = {
            XAF: 1,
            XOF: 1,
            CDF: 5,
            GNF: 14,
            USD: 0.0017
        };
        const convertedAmount = (currentAmount * conversionRates[currency]);
        const convertedGain = (currentGain * conversionRates[currency]);
        document.getElementById('amount').textContent = `${convertedAmount} ${currency}`;
        document.getElementById('gain').textContent = `${convertedGain} ${currency}`;
        document.getElementById('amunt').value = `${convertedAmount}`;
    document.getElementById('gan').value = `${convertedGain}`;
    }
    function confirmInvestment() {
        const currency = document.getElementById('currency').value;
        const amount = document.getElementById('amount').textContent.split(' ')[0];
        const gain = document.getElementById('gain').textContent.split(' ')[0];
        
        // Envoyer au contrôleur
        fetch('/payement/investissement', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                amount: amount,
                currency: currency,
                gain:gain
            })
        })
        .then(response => response.json())
        .then(data => {
            alert('Investissement confirmé !');
            closeModal();
        })
        .catch(error => {
            console.error('Erreur:', error);
        });
    }
</script>
</body>
</html>
