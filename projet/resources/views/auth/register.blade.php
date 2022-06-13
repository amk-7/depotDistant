<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="nom" :value="__('Nom')" />

                <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus />
            </div>

            <!-- Last name -->
            <div>
                <x-label for="prenom" :value="__('Prenom')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus />
            </div>

            <!-- user name -->
            <div>
                <x-label for="nomUtilisateur" :value="__('Nom Utilisateur')" />

                <x-input id="nomUtilisateur" class="block mt-1 w-full" type="text" name="nomUtilisateur" :value="old('nomUtilisateur')" required autofocus />
            </div>

            <!-- sexe -->
            <div>
                <x-label for="sexe" class="block mt-1 w-full" :value="__('sexe')" />

                <x-input type="radio" name="sexe" id="masculin" required autofocus />
                <x-label for="sexe" :value="__('Masculin')" />

                <x-input type="radio" name="sexe" id="feminin" required autofocus />
                <x-label for="sexe" :value="__('féminin')" />

                <!--x-input id="nomUtilisateure" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /-->
            </div>

            <!-- user Bridthday -->
            <div>
                <x-label for="dateNaiss" :value="__('Date de naissance')" />

                <x-input id="dateNaiss" class="block mt-1 w-full" type="date" name="dateNaiss" :value="old('nomUtilisateure')" required autofocus />
            </div>

            <!-- user Address -->
            <div>
                <x-label for="adresse" :value="__('Adresse')" />

                <table name="adresse">
                    <tbody>
                    <td>
                        <x-label for="ville" :value="__('Ville')" />
                        <select name="ville" id="">
                        <option value="Sokode">Sokode</option>
                        <option value="Kara">Kara</option>
                        </select>
                    </td>
                    <td>
                        <x-label for="rue" :value="__('Rue')" />
                        <select name="rue" id="">
                        <option value="Khomah I">Khomah I</option>
                        <option value="Khomah II">Khomah II</option>
                        </select>
                    </td>
                    <td>
                        <x-label for="bp" :value="__('Boit Postale')" />
                        <select name="bp" id="">
                        <option value="BP 5432">BP 5432</option>
                        <option value="BP 3333">BP 3333</option>
                        </select>
                    </td>
                    </tbody>
                </table>

            </div>

            <!-- Telephone -->
            <div>
                <x-label for="telephone" :value="__('Téléphone')" />

                <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
           
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Telephone -->
            <div>
                <x-label for="profil" :value="__('Profil')" />

                <x-input type="file" onchange="previewPicture(this)" name="avatar" id="avatar" value="" accept="image/jpg, image/jpeg, image/png, image/jpeg" class="block mt-1 w-full" required />

                <img src="" alt="profil" id="profil">

            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    <script type="text/javascript">
        var image = document.getElementById("profil");
        var types = ["image/jpg", "image/jpeg", "image/png"];
        var previewPicture = function(e){
          const [picture] = e.files;
          if (types.includes(picture.type)){
            profil.src = URL.createObjectURL(picture);
          }
        }
    </script>
</x-guest-layout>
