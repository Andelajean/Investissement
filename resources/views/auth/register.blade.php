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
        <option value="af" data-code="+93">Afghanistan</option>
        <option value="za" data-code="+27">Afrique du Sud</option>
        <option value="al" data-code="+355">Albanie</option>
        <option value="dz" data-code="+213">Algérie</option>
        <option value="de" data-code="+49">Allemagne</option>
        <option value="ad" data-code="+376">Andorre</option>
        <option value="ao" data-code="+244">Angola</option>
        <option value="ag" data-code="+1-268">Antigua-et-Barbuda</option>
        <option value="sa" data-code="+966">Arabie Saoudite</option>
        <option value="ar" data-code="+54">Argentine</option>
        <option value="am" data-code="+374">Arménie</option>
        <option value="au" data-code="+61">Australie</option>
        <option value="at" data-code="+43">Autriche</option>
        <option value="az" data-code="+994">Azerbaïdjan</option>
        <option value="bs" data-code="+1-242">Bahamas</option>
        <option value="bh" data-code="+973">Bahreïn</option>
        <option value="bd" data-code="+880">Bangladesh</option>
        <option value="bb" data-code="+1-246">Barbade</option>
        <option value="by" data-code="+375">Biélorussie</option>
        <option value="be" data-code="+32">Belgique</option>
        <option value="bz" data-code="+501">Belize</option>
        <option value="bj" data-code="+229">Bénin</option>
        <option value="bt" data-code="+975">Bhoutan</option>
        <option value="bo" data-code="+591">Bolivie</option>
        <option value="ba" data-code="+387">Bosnie-Herzégovine</option>
        <option value="bw" data-code="+267">Botswana</option>
        <option value="br" data-code="+55">Brésil</option>
        <option value="bn" data-code="+673">Brunei</option>
        <option value="bg" data-code="+359">Bulgarie</option>
        <option value="bf" data-code="+226">Burkina Faso</option>
        <option value="bi" data-code="+257">Burundi</option>
        <option value="kh" data-code="+855">Cambodge</option>
        <option value="cm" data-code="+237">Cameroun</option>
        <option value="ca" data-code="+1">Canada</option>
        <option value="cv" data-code="+238">Cap-Vert</option>
        <option value="cf" data-code="+236">République centrafricaine</option>
        <option value="cl" data-code="+56">Chili</option>
        <option value="cn" data-code="+86">Chine</option>
        <option value="cy" data-code="+357">Chypre</option>
        <option value="co" data-code="+57">Colombie</option>
        <option value="km" data-code="+269">Comores</option>
        <option value="cg" data-code="+242">Congo</option>
        <option value="cd" data-code="+243">République Démocratique du Congo</option>
        <option value="kp" data-code="+850">Corée du Nord</option>
        <option value="kr" data-code="+82">Corée du Sud</option>
        <option value="cr" data-code="+506">Costa Rica</option>
        <option value="ci" data-code="+225">Côte d'Ivoire</option>
        <option value="hr" data-code="+385">Croatie</option>
        <option value="dk" data-code="+45">Danemark</option>
        <option value="dj" data-code="+253">Djibouti</option>
        <option value="dm" data-code="+1-767">Dominique</option>
        <option value="eg" data-code="+20">Égypte</option>
        <option value="ae" data-code="+971">Émirats Arabes Unis</option>
        <option value="ec" data-code="+593">Équateur</option>
        <option value="er" data-code="+291">Érythrée</option>
        <option value="es" data-code="+34">Espagne</option>
        <option value="ee" data-code="+372">Estonie</option>
        <option value="us" data-code="+1">États-Unis</option>
        <option value="et" data-code="+251">Éthiopie</option>
        <option value="fj" data-code="+679">Fidji</option>
        <option value="fi" data-code="+358">Finlande</option>
        <option value="fr" data-code="+33">France</option>
        <option value="ga" data-code="+241">Gabon</option>
        <option value="gm" data-code="+220">Gambie</option>
        <option value="ge" data-code="+995">Géorgie</option>
        <option value="gh" data-code="+233">Ghana</option>
        <option value="gr" data-code="+30">Grèce</option>
        <option value="gd" data-code="+1-473">Grenade</option>
        <option value="gt" data-code="+502">Guatemala</option>
        <option value="gn" data-code="+224">Guinée</option>
        <option value="gw" data-code="+245">Guinée-Bissau</option>
        <option value="gq" data-code="+240">Guinée Équatoriale</option>
        <option value="gy" data-code="+592">Guyana</option>
        <option value="ht" data-code="+509">Haïti</option>
        <option value="hn" data-code="+504">Honduras</option>
        <option value="hu" data-code="+36">Hongrie</option>
        <option value="in" data-code="+91">Inde</option>
        <option value="id" data-code="+62">Indonésie</option>
        <option value="iq" data-code="+964">Irak</option>
        <option value="ir" data-code="+98">Iran</option>
        <option value="ie" data-code="+353">Irlande</option>
        <option value="is" data-code="+354">Islande</option>
        <option value="il" data-code="+972">Israël</option>
        <option value="it" data-code="+39">Italie</option>
        <option value="jm" data-code="+1-876">Jamaïque</option>
        <option value="jp" data-code="+81">Japon</option>
        <option value="jo" data-code="+962">Jordanie</option>
        <option value="kz" data-code="+7">Kazakhstan</option>
        <option value="ke" data-code="+254">Kenya</option>
        <option value="kg" data-code="+996">Kirghizistan</option>
        <!-- Continuation des pays -->
<option value="ki" data-code="+686">Kiribati</option>
<option value="kw" data-code="+965">Koweït</option>
<option value="la" data-code="+856">Laos</option>
<option value="ls" data-code="+266">Lesotho</option>
<option value="lv" data-code="+371">Lettonie</option>
<option value="lb" data-code="+961">Liban</option>
<option value="lr" data-code="+231">Libéria</option>
<option value="ly" data-code="+218">Libye</option>
<option value="li" data-code="+423">Liechtenstein</option>
<option value="lt" data-code="+370">Lituanie</option>
<option value="lu" data-code="+352">Luxembourg</option>
<option value="mg" data-code="+261">Madagascar</option>
<option value="my" data-code="+60">Malaisie</option>
<option value="mw" data-code="+265">Malawi</option>
<option value="mv" data-code="+960">Maldives</option>
<option value="ml" data-code="+223">Mali</option>
<option value="mt" data-code="+356">Malte</option>
<option value="ma" data-code="+212">Maroc</option>
<option value="mh" data-code="+692">Îles Marshall</option>
<option value="mu" data-code="+230">Maurice</option>
<option value="mr" data-code="+222">Mauritanie</option>
<option value="mx" data-code="+52">Mexique</option>
<option value="fm" data-code="+691">Micronésie</option>
<option value="md" data-code="+373">Moldavie</option>
<option value="mc" data-code="+377">Monaco</option>
<option value="mn" data-code="+976">Mongolie</option>
<option value="me" data-code="+382">Monténégro</option>
<option value="mz" data-code="+258">Mozambique</option>
<option value="mm" data-code="+95">Myanmar (Birmanie)</option>
<option value="na" data-code="+264">Namibie</option>
<option value="nr" data-code="+674">Nauru</option>
<option value="np" data-code="+977">Népal</option>
<option value="ni" data-code="+505">Nicaragua</option>
<option value="ne" data-code="+227">Niger</option>
<option value="ng" data-code="+234">Nigéria</option>
<option value="no" data-code="+47">Norvège</option>
<option value="nz" data-code="+64">Nouvelle-Zélande</option>
<option value="om" data-code="+968">Oman</option>
<option value="ug" data-code="+256">Ouganda</option>
<option value="uz" data-code="+998">Ouzbékistan</option>
<option value="pk" data-code="+92">Pakistan</option>
<option value="pw" data-code="+680">Palaos</option>
<option value="pa" data-code="+507">Panama</option>
<option value="pg" data-code="+675">Papouasie-Nouvelle-Guinée</option>
<option value="py" data-code="+595">Paraguay</option>
<option value="nl" data-code="+31">Pays-Bas</option>
<option value="pe" data-code="+51">Pérou</option>
<option value="ph" data-code="+63">Philippines</option>
<option value="pl" data-code="+48">Pologne</option>
<option value="pt" data-code="+351">Portugal</option>
<option value="qa" data-code="+974">Qatar</option>
<option value="ro" data-code="+40">Roumanie</option>
<option value="gb" data-code="+44">Royaume-Uni</option>
<option value="ru" data-code="+7">Russie</option>
<option value="rw" data-code="+250">Rwanda</option>
<option value="kn" data-code="+1-869">Saint-Christophe-et-Niévès</option>
<option value="sm" data-code="+378">Saint-Marin</option>
<option value="vc" data-code="+1-784">Saint-Vincent-et-les-Grenadines</option>
<option value="lc" data-code="+1-758">Sainte-Lucie</option>
<option value="sv" data-code="+503">Salvador</option>
<option value="ws" data-code="+685">Samoa</option>
<option value="st" data-code="+239">Sao Tomé-et-Principe</option>
<option value="sn" data-code="+221">Sénégal</option>
<option value="rs" data-code="+381">Serbie</option>
<option value="sc" data-code="+248">Seychelles</option>
<option value="sl" data-code="+232">Sierra Leone</option>
<option value="sg" data-code="+65">Singapour</option>
<option value="sk" data-code="+421">Slovaquie</option>
<option value="si" data-code="+386">Slovénie</option>
<option value="so" data-code="+252">Somalie</option>
<option value="sd" data-code="+249">Soudan</option>
<option value="ss" data-code="+211">Soudan du Sud</option>
<option value="lk" data-code="+94">Sri Lanka</option>
<option value="se" data-code="+46">Suède</option>
<option value="ch" data-code="+41">Suisse</option>
<option value="sr" data-code="+597">Suriname</option>
<option value="sy" data-code="+963">Syrie</option>
<option value="tj" data-code="+992">Tadjikistan</option>
<option value="tz" data-code="+255">Tanzanie</option>
<option value="td" data-code="+235">Tchad</option>
<option value="cz" data-code="+420">Tchéquie</option>
<option value="th" data-code="+66">Thaïlande</option>
<option value="tl" data-code="+670">Timor oriental</option>
<option value="tg" data-code="+228">Togo</option>
<option value="to" data-code="+676">Tonga</option>
<option value="tt" data-code="+1-868">Trinité-et-Tobago</option>
<option value="tn" data-code="+216">Tunisie</option>
<option value="tm" data-code="+993">Turkménistan</option>
<option value="tr" data-code="+90">Turquie</option>
<option value="tv" data-code="+688">Tuvalu</option>
<option value="ua" data-code="+380">Ukraine</option>
<option value="uy" data-code="+598">Uruguay</option>
<option value="ve" data-code="+58">Venezuela</option>
<option value="vn" data-code="+84">Vietnam</option>
<option value="ye" data-code="+967">Yémen</option>
<option value="zm" data-code="+260">Zambie</option>
<option value="zw" data-code="+263">Zimbabwe</option>

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
