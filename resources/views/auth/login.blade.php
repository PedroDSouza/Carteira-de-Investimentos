<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


        <div class="mt-8 py-3 text-left align-top">
            <div class="inline-flex items-center w-full top-9">
            <h3 class="mt-4  text-lg font-bold text-stone-50 eading-6 lg:text-5xl">Entre na plataforma</h3>
            </div>
            <div class="mt-4 mb-8 text-base text-stone-50">
                <p>Comece a investir.</p>
            </div>
        </div>


        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-2 py-8">
                @if (Route::has('register'))
                    <a class="underline text-sm text-stone-50 hover:text-gray-600 rounded-md   " href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                @endif
    
                <x-primary-button class="ml-10">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

   
</x-guest-layout>
