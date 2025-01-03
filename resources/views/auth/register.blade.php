<x-guest-layout>
<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Nom -->
    <div>
        <x-input-label for="name" :value="__('Nom')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div class="mt-4">
    <x-input-label for="country" :value="__('Pays')" />
    <select id="country" name="country" class="block mt-1 w-full" onchange="updatePhoneCode()" required>
    <option value="">-- Sélectionnez votre pays --</option>
    <option value="Afghanistan" data-code="+93">Afghanistan</option>
    <option value="Afrique du Sud" data-code="+27">Afrique du Sud</option>
    <option value="Albanie" data-code="+355">Albanie</option>
    <option value="Algérie" data-code="+213">Algérie</option>
    <option value="Allemagne" data-code="+49">Allemagne</option>
    <option value="Andorre" data-code="+376">Andorre</option>
    <option value="Angola" data-code="+244">Angola</option>
    <option value="Antigua-et-Barbuda" data-code="+1-268">Antigua-et-Barbuda</option>
    <option value="Arabie Saoudite" data-code="+966">Arabie Saoudite</option>
    <option value="Argentine" data-code="+54">Argentine</option>
    <option value="Arménie" data-code="+374">Arménie</option>
    <option value="Australie" data-code="+61">Australie</option>
    <option value="Autriche" data-code="+43">Autriche</option>
    <option value="Azerbaïdjan" data-code="+994">Azerbaïdjan</option>
    <option value="Bahamas" data-code="+1-242">Bahamas</option>
    <option value="Bahreïn" data-code="+973">Bahreïn</option>
    <option value="Bangladesh" data-code="+880">Bangladesh</option>
    <option value="Barbade" data-code="+1-246">Barbade</option>
    <option value="Biélorussie" data-code="+375">Biélorussie</option>
    <option value="Belgique" data-code="+32">Belgique</option>
    <option value="Belize" data-code="+501">Belize</option>
    <option value="Bénin" data-code="+229">Bénin</option>
    <option value="Bhoutan" data-code="+975">Bhoutan</option>
    <option value="Bolivie" data-code="+591">Bolivie</option>
    <option value="Bosnie-Herzégovine" data-code="+387">Bosnie-Herzégovine</option>
    <option value="Botswana" data-code="+267">Botswana</option>
    <option value="Brésil" data-code="+55">Brésil</option>
    <option value="Brunei" data-code="+673">Brunei</option>
    <option value="Bulgarie" data-code="+359">Bulgarie</option>
    <option value="Burkina Faso" data-code="+226">Burkina Faso</option>
    <option value="Burundi" data-code="+257">Burundi</option>
    <option value="Cambodge" data-code="+855">Cambodge</option>
    <option value="Cameroun" data-code="+237">Cameroun</option>
    <option value="Canada" data-code="+1">Canada</option>
    <option value="Cap-Vert" data-code="+238">Cap-Vert</option>
    <option value="République centrafricaine" data-code="+236">République centrafricaine</option>
    <option value="Chili" data-code="+56">Chili</option>
    <option value="Chine" data-code="+86">Chine</option>
    <option value="Chypre" data-code="+357">Chypre</option>
    <option value="Colombie" data-code="+57">Colombie</option>
    <option value="Comores" data-code="+269">Comores</option>
    <option value="Congo" data-code="+242">Congo</option>
    <option value="République Démocratique du Congo" data-code="+243">République Démocratique du Congo</option>
    <option value="Corée du Nord" data-code="+850">Corée du Nord</option>
    <option value="Corée du Sud" data-code="+82">Corée du Sud</option>
    <option value="Costa Rica" data-code="+506">Costa Rica</option>
    <option value="Côte d'Ivoire" data-code="+225">Côte d'Ivoire</option>
    <option value="Croatie" data-code="+385">Croatie</option>
    <option value="Danemark" data-code="+45">Danemark</option>
    <option value="Djibouti" data-code="+253">Djibouti</option>
    <option value="Dominique" data-code="+1-767">Dominique</option>
    <option value="Égypte" data-code="+20">Égypte</option>
    <option value="Émirats Arabes Unis" data-code="+971">Émirats Arabes Unis</option>
    <option value="Équateur" data-code="+593">Équateur</option>
    <option value="Érythrée" data-code="+291">Érythrée</option>
    <option value="Espagne" data-code="+34">Espagne</option>
    <option value="Estonie" data-code="+372">Estonie</option>
    <option value="États-Unis" data-code="+1">États-Unis</option>
    <option value="Éthiopie" data-code="+251">Éthiopie</option>
    <option value="Fidji" data-code="+679">Fidji</option>
    <option value="Finlande" data-code="+358">Finlande</option>
    <option value="France" data-code="+33">France</option>
    <option value="Gabon" data-code="+241">Gabon</option>
    <option value="Gambie" data-code="+220">Gambie</option>
    <option value="Géorgie" data-code="+995">Géorgie</option>
    <option value="Ghana" data-code="+233">Ghana</option>
    <option value="Grèce" data-code="+30">Grèce</option>
    <option value="Grenade" data-code="+1-473">Grenade</option>
    <option value="Guatemala" data-code="+502">Guatemala</option>
    <option value="Guinée" data-code="+224">Guinée</option>
    <option value="Guinée-Bissau" data-code="+245">Guinée-Bissau</option>
    <option value="Guinée Équatoriale" data-code="+240">Guinée Équatoriale</option>
    <option value="Guyana" data-code="+592">Guyana</option>
    <option value="Haïti" data-code="+509">Haïti</option>
    <option value="Honduras" data-code="+504">Honduras</option>
    <option value="Hongrie" data-code="+36">Hongrie</option>
    <option value="Inde" data-code="+91">Inde</option>
    <option value="Indonésie" data-code="+62">Indonésie</option>
    <option value="Irak" data-code="+964">Irak</option>
    <option value="Iran" data-code="+98">Iran</option>
    <option value="Irlande" data-code="+353">Irlande</option>
    <option value="Islande" data-code="+354">Islande</option>
    <option value="Israël" data-code="+972">Israël</option>
    <option value="Italie" data-code="+39">Italie</option>
    <option value="Jamaïque" data-code="+1-876">Jamaïque</option>
    <option value="Japon" data-code="+81">Japon</option>
    <option value="Jordanie" data-code="+962">Jordanie</option>
   

    <option value="Kazakhstan" data-code="+7">Kazakhstan</option>
<option value="Kenya" data-code="+254">Kenya</option>
<option value="Kirghizistan" data-code="+996">Kirghizistan</option>
<option value="Kiribati" data-code="+686">Kiribati</option>
<option value="Koweït" data-code="+965">Koweït</option>
<option value="Laos" data-code="+856">Laos</option>
<option value="Lesotho" data-code="+266">Lesotho</option>
<option value="Lettonie" data-code="+371">Lettonie</option>
<option value="Liban" data-code="+961">Liban</option>
<option value="Libéria" data-code="+231">Libéria</option>
<option value="Libye" data-code="+218">Libye</option>
<option value="Liechtenstein" data-code="+423">Liechtenstein</option>
<option value="Lituanie" data-code="+370">Lituanie</option>
<option value="Luxembourg" data-code="+352">Luxembourg</option>
<option value="Madagascar" data-code="+261">Madagascar</option>
<option value="Malaisie" data-code="+60">Malaisie</option>
<option value="Malawi" data-code="+265">Malawi</option>
<option value="Maldives" data-code="+960">Maldives</option>
<option value="Mali" data-code="+223">Mali</option>
<option value="Malte" data-code="+356">Malte</option>
<option value="Maroc" data-code="+212">Maroc</option>
<option value="Îles Marshall" data-code="+692">Îles Marshall</option>
<option value="Maurice" data-code="+230">Maurice</option>
<option value="Mauritanie" data-code="+222">Mauritanie</option>
<option value="Mexique" data-code="+52">Mexique</option>
<option value="Micronésie" data-code="+691">Micronésie</option>
<option value="Moldavie" data-code="+373">Moldavie</option>
<option value="Monaco" data-code="+377">Monaco</option>
<option value="Mongolie" data-code="+976">Mongolie</option>
<option value="Monténégro" data-code="+382">Monténégro</option>
<option value="Mozambique" data-code="+258">Mozambique</option>
<option value="Myanmar" data-code="+95">Myanmar (Birmanie)</option>
<option value="Namibie" data-code="+264">Namibie</option>
<option value="Nauru" data-code="+674">Nauru</option>
<option value="Népal" data-code="+977">Népal</option>
<option value="Nicaragua" data-code="+505">Nicaragua</option>
<option value="Niger" data-code="+227">Niger</option>
<option value="Nigéria" data-code="+234">Nigéria</option>
<option value="Norvège" data-code="+47">Norvège</option>
<option value="Nouvelle-Zélande" data-code="+64">Nouvelle-Zélande</option>
<option value="Oman" data-code="+968">Oman</option>
<option value="Ouganda" data-code="+256">Ouganda</option>
<option value="Ouzbékistan" data-code="+998">Ouzbékistan</option>
<option value="Pakistan" data-code="+92">Pakistan</option>
<option value="Palaos" data-code="+680">Palaos</option>
<option value="Panama" data-code="+507">Panama</option>
<option value="Papouasie-Nouvelle-Guinée" data-code="+675">Papouasie-Nouvelle-Guinée</option>
<option value="Paraguay" data-code="+595">Paraguay</option>
<option value="Pays-Bas" data-code="+31">Pays-Bas</option>
<option value="Pérou" data-code="+51">Pérou</option>
<option value="Philippines" data-code="+63">Philippines</option>
<option value="Pologne" data-code="+48">Pologne</option>
<option value="Portugal" data-code="+351">Portugal</option>
<option value="Qatar" data-code="+974">Qatar</option>
<option value="Roumanie" data-code="+40">Roumanie</option>
<option value="Royaume-Uni" data-code="+44">Royaume-Uni</option>
<option value="Russie" data-code="+7">Russie</option>
<option value="Rwanda" data-code="+250">Rwanda</option>
<option value="Saint-Christophe-et-Niévès" data-code="+1-869">Saint-Christophe-et-Niévès</option>
<option value="Saint-Marin" data-code="+378">Saint-Marin</option>
<option value="Saint-Vincent-et-les-Grenadines" data-code="+1-784">Saint-Vincent-et-les-Grenadines</option>
<option value="Sainte-Lucie" data-code="+1-758">Sainte-Lucie</option>
<option value="Salvador" data-code="+503">Salvador</option>
<option value="Samoa" data-code="+685">Samoa</option>
<option value="Sao Tomé-et-Principe" data-code="+239">Sao Tomé-et-Principe</option>
<option value="Sénégal" data-code="+221">Sénégal</option>
<option value="Serbie" data-code="+381">Serbie</option>
<option value="Seychelles" data-code="+248">Seychelles</option>
<option value="Sierra Leone" data-code="+232">Sierra Leone</option>
<option value="Singapour" data-code="+65">Singapour</option>
<option value="Slovaquie" data-code="+421">Slovaquie</option>
<option value="Slovénie" data-code="+386">Slovénie</option>
<option value="Somalie" data-code="+252">Somalie</option>
<option value="Soudan" data-code="+249">Soudan</option>
<option value="Soudan du Sud" data-code="+211">Soudan du Sud</option>
<option value="Sri Lanka" data-code="+94">Sri Lanka</option>
<option value="Suède" data-code="+46">Suède</option>
<option value="Suisse" data-code="+41">Suisse</option>
<option value="Suriname" data-code="+597">Suriname</option>
<option value="Syrie" data-code="+963">Syrie</option>
<option value="Tadjikistan" data-code="+992">Tadjikistan</option>
<option value="Tanzanie" data-code="+255">Tanzanie</option>
<option value="Tchad" data-code="+235">Tchad</option>
<option value="Tchéquie" data-code="+420">Tchéquie</option>
<option value="Thaïlande" data-code="+66">Thaïlande</option>
<option value="Timor oriental" data-code="+670">Timor oriental</option>
<option value="Togo" data-code="+228">Togo</option>
<option value="Tonga" data-code="+676">Tonga</option>
<option value="Trinité-et-Tobago" data-code="+1-868">Trinité-et-Tobago</option>
<option value="Tunisie" data-code="+216">Tunisie</option>
<option value="Turkménistan" data-code="+993">Turkménistan</option>
<option value="Turquie" data-code="+90">Turquie</option>
<option value="Tuvalu" data-code="+688">Tuvalu</option>
<option value="Ukraine" data-code="+380">Ukraine</option>
<option value="Uruguay" data-code="+598">Uruguay</option>
<option value="Venezuela" data-code="+58">Venezuela</option>
<option value="Vietnam" data-code="+84">Vietnam</option>
<option value="Yémen" data-code="+967">Yémen</option>
<option value="Zambie" data-code="+260">Zambie</option>
<option value="Zimbabwe" data-code="+263">Zimbabwe</option>


    </select>
</div>

    <!-- Téléphone -->
    <div class="mt-4">
        <x-input-label for="telephone" :value="__('Téléphone')" />
        <div class="flex">
            <span id="phone-code" class="inline-block px-3 py-2 bg-gray-200 border border-gray-300 rounded-l-md">+33</span>
            <x-text-input id="telephone" class="block mt-1 w-full rounded-none rounded-r-md" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="telephone" />
        </div>
        <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
    </div>

    <!-- Âge -->
    <div class="mt-4">
        <x-input-label for="age" :value="__('Âge')" />
        <select id="age" name="age" class="block mt-1 w-full" required>
            <option value="">-- Sélectionnez votre âge --</option>
            @for ($i = 15; $i <= 100; $i++)
                <option value="{{ $i }}">{{ $i }} ans</option>
            @endfor
        </select>
        <x-input-error :messages="$errors->get('age')" class="mt-2" />
    </div>

    <!-- Adresse e-mail -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Adresse e-mail')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Mot de passe -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Mot de passe')" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirmer le mot de passe -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            {{ __('Déjà inscrit ?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('S\'inscrire') }}
        </x-primary-button>
    </div>
</form>

<script>
    function updatePhoneCode() {
        const countrySelect = document.getElementById('country');
        const selectedOption = countrySelect.options[countrySelect.selectedIndex];
        const phoneCode = selectedOption.getAttribute('data-code');
        document.getElementById('phone-code').innerText = phoneCode || '+';
    }
</script>


</x-guest-layout>
