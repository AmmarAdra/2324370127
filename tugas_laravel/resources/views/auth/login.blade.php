<x-guest-layout>
    <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">
        Selamat Datang Kembali
    </h2>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                id="email"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
                class="w-full"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                class="w-full"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center">
                <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm">
                <span class="ml-2 text-gray-600">Ingat saya</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                    Lupa password?
                </a>
            @endif
        </div>

        <!-- Submit -->
        <div>
            <button
                type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md transition">
                Masuk
            </button>
        </div>

        <!-- Register Link -->
        <div class="text-center text-sm text-gray-600">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Daftar sekarang</a>
        </div>
    </form>
</x-guest-layout>
