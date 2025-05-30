<x-guest-layout>
    <div class="max-w-md mx-auto mt-12 bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Verifikasi Email Anda</h2>

        <p class="text-gray-600 mb-4">
            Kami telah mengirimkan tautan verifikasi ke email Anda. Harap periksa inbox (atau folder spam).
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-green-600 font-medium">
                Tautan verifikasi baru telah dikirim ke alamat email Anda.
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button>
                Kirim Ulang Email Verifikasi
            </x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <x-secondary-button>
                Keluar
            </x-secondary-button>
        </form>
    </div>
</x-guest-layout>
