<x-guest-layout>

    <div class="mt-8 py-3 text-left align-top">
        <div class="inline-flex items-center w-full top-9">
            <h3 class="mt-4 mb-8 text-lg font-bold  text-stone-50  l eading-6 lg:text-5xl">Crie uma conta</h3>
        </div>
   
    </div>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-2 py-8 ">
            <a class="underline text-sm text-stone-50 hover:text-gray-600 rounded-md" href="{{ route('login') }}">
                {{ __('Já tem uma conta?') }}
            </a>

            <x-primary-button class="ml-10">
                {{ __('CADASTRAR') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
