<x-guest-layout>
    <div class="flex flex-col items-center justify-center">
        <img src="assets/img/logo.png" width="120px" alt="">
    </div>
    <div class="text-center">
        <h1 style="color: white; font-size: 25px;">Project Management System</h1>
        <h4 style="color: white; font-size: 15px;">Register</h4>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="wing" :value="__('Wing')" />
            <select id="wing" name="wing" class="block mt-1 w-full" required>
                <option value="">Select Wing</option>
                <option value="Radio & Electronic Wing">Radio & Electronic Wing</option>
                <option value="Electrical & Mechanical Wing">Electrical & Mechanical Wing
                </option>
                <option value="IT & GIS Wing">IT & GIS Wing</option>
                <option value="Armament & Ballistics Wing">Armament & Ballistics Wing
                </option>
                <option value="Missile Wing">Missile Wing</option>
                <option value="Marine Wing">Marine Wing</option>
                <option value="Nano and Modern Technology Wing">Nano and Modern Technology
                    Wing
                </option>
                <option value="Sattelite & Surveillance Wing">Sattelite & Surveillance Wing
                </option>
                <option value="Cyber Security Wing">Cyber Security Wing</option>
                <option value="Ammo & Explosive Wing">Ammo & Explosive Wing</option>
                <option value="Aeronautical Wing">Aeronautical Wing</option>
            </select>
            <x-input-error :messages="$errors->get('wing')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
