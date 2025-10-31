<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div>
            <x-input-label for="first_name" :value="__('First Name')" style="color: black;"/>
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" style="background-color: whitesmoke; color: black;"/>
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="middle_name" :value="__('Middle Name')" style="color: black;"/>
            <x-text-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name" :value="old('middle_name')" autofocus autocomplete="middle_name" style="background-color: whitesmoke; color: black;"/>
            <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" style="color: black;"/>
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" style="background-color: whitesmoke; color: black;"/>
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" style="color: black;"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" style="background-color: whitesmoke; color: black;"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Contact Number --}}
        <div class="mt-4">
            <x-input-label for="contact_number" :value="__('Contact Number')" style="color: black;"/>
            <x-text-input id="contact_number" class="block mt-1 w-full" type="number" name="contact_number" :value="old('contact_number')" required autocomplete="contact_number" style="background-color: whitesmoke; color: black;"/>
            <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color: black;"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" style="background-color: whitesmoke; color: black;"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="color: black;"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" style="background-color: whitesmoke; color: black;"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" 
            href="{{ route('login') }}" style="color: black;">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
