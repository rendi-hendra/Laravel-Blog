<x-guest-layout>
    <x-jet-authentication-card>

        <x-jet-validation-errors class="absolute top-20" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="pt-48">
            @csrf

            <div>
                <label class="block font-medium text-sm text-white" for="email">Email</label>
                <input id="email"
                    class="block mt-1 w-full border-0 border-b-2 focus:outline-none focus:ring-0 bg-transparent text-white active:bg-transparent read-only:bg-gray-900"
                    type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-10">
                <label class="block font-medium text-sm text-white" for="password">Password</label>
                <input
                    class="block mt-1 w-full border-0 border-b-2 focus:outline-none focus:ring-0 bg-transparent text-white"
                    id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-10">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-10">
                {{-- @if (Route::has('password.request')) --}}
                <a class="mr-5 underline text-sm text-white hover:text-gray-500" href="{{ route('register') }}">
                    {{ __("don't have an account yet?") }}
                </a>
                {{-- @endif --}}
                {{-- <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button> --}}

                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-bold text-xs text-zinc-900 uppercase tracking-widest hover:bg-gray-600 hover:text-white active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Login</button>
            </div>
        </form>

        {{-- <div class="hover:text-zinc-800 duration-300 block">
            <a href="/" class="inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
            </a>
        </div> --}}
    </x-jet-authentication-card>
</x-guest-layout>

{{-- <div class="grid grid-cols-2">
    <div class="bg-white h-screen">halloc</div>
    <div class="bg-zinc-900 text-white">Hallo</div>
</div> --}}
