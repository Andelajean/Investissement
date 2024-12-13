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
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>30 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>340 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>40 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="confirmPurchase('Produit 9', 50)">Investir</button>
            </div>
            <div class="bg-blue-500 to-red-600 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/2.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Standar <span class='text-2xl text-blue-500'> ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>40 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>440 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>35 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="confirmPurchase('Produit 9', 50)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/3.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Standar <span class='text-2xl text-blue-500'> ⭐⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>50 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>550 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>30 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="confirmPurchase('Produit 9', 50)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/4.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Premium <span class='text-2xl text-blue-500'></span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>60 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>650 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>25 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="confirmPurchase('Produit 9', 50)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/5.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Premium <span class='text-2xl text-blue-500'> ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>70 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>780 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>20 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="confirmPurchase('Produit 9', 50)">Investir</button>
    </div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/6.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">Premium <span class='text-2xl text-blue-500'> ⭐ ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>80 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>880 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>15 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="confirmPurchase('Produit 9', 50)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/7.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">V.I.P <span class='text-2xl text-blue-500'></span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>90 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>890 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>10 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="confirmPurchase('Produit 9', 50)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/8.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">V.V.I.P <span class='text-2xl text-blue-500'>⭐ ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>100 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>1 300 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>7 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="confirmPurchase('Produit 9', 50)">Investir</button>
</div>
<div class="bg-blue-500 p-6 rounded-lg flex items-center justify-between">
    <img src="{{asset('image/9.jpg')}}" alt="Product 1" class="h-20 w-20  rounded-full shadow-lg">
    <div class="flex-1 ml-6">
        <p class="text-xl font-semibold text-gray-800">V.V.I.P <span class='text-2xl text-blue-500'>⭐ ⭐ ⭐</span></p>
        <p class="text-lg text-white">Montant: <span class='text-xl text-yellow-400'>200 000 FCFA </span></p>
        <p class="text-lg text-white">Gain: <span class='text-xl text-yellow-400'>2 400 000 CFA </span></p>
        <p class="text-lg text-white">Durée: <span class='text-xl text-yellow-400'>5 Jours</span></p>
    </div>
    <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-green-600" onclick="confirmPurchase('Produit 9', 50)">Investir</button>
</div>

            
    </div>

    <script>
        function confirmPurchase(productName, price) {
            const modal = document.getElementById('confirmation-modal');
            const productNameElem = document.getElementById('modal-product-name');
            const productPriceElem = document.getElementById('modal-product-price');

            productNameElem.textContent = `Confirmer l'achat de ${productName}`;
            productPriceElem.textContent = `Prix: $${price}`;

            modal.classList.remove('hidden');
        }

        function closeModal() {
            const modal = document.getElementById('confirmation-modal');
            modal.classList.add('hidden');
        }
    </script>
</body>
</html>
