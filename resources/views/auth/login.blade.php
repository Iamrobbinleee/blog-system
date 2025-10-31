<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" style="color: black;"/>
            <x-text-input
                id="email"
                name="email"
                type="email"
                class="block w-full mt-1"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
                style="background-color: whitesmoke;"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div style="margin-top:10px;">
            <x-input-label for="password" :value="__('Password')" style="color: black;"/>
            <x-text-input
                id="password"
                name="password"
                type="password"
                class="block w-full mt-1"
                required
                autocomplete="current-password"
                style="background-color: whitesmoke;"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me + Forgot Password -->
        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input
                    id="remember_me"
                    name="remember"
                    type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                >
                <span class="ms-2 text-sm text-dark dark:text-dark" style="color: black;">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a
                    href="{{ route('password.request') }}"
                    class="text-sm text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded-md"
                style="color: black;">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Buttons -->
        <div class="flex items-center justify-end mt-6 space-x-3">
            <a
                href="{{ route('register') }}"
                class="text-sm text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded-md"
            style="margin-right: 10px; color: black;">
                {{ __('Create an Account') }}
            </a>

            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>