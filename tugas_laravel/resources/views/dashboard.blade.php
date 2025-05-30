<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
                Dashboard
            </h2>
            <button onclick="toggleDarkMode()" class="px-3 py-1 rounded bg-indigo-600 text-white dark:bg-yellow-400 dark:text-black text-sm">
                🌗 Toggle Dark
            </button>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white p-6 rounded-2xl shadow-lg dark:from-indigo-700 dark:to-purple-700">
                    <h3 class="text-lg font-semibold mb-2">Welcome Back!</h3>
                    <p>Glad to see you again. Here's a quick overview of your activity.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-gradient-to-r from-green-400 to-emerald-600 text-white p-6 rounded-2xl shadow-lg dark:from-green-600 dark:to-emerald-800">
                    <h3 class="text-lg font-semibold mb-2">Statistics</h3>
                    <p>You've logged in 5 times this week. Keep up the productivity!</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-gradient-to-r from-pink-400 to-red-500 text-white p-6 rounded-2xl shadow-lg dark:from-pink-600 dark:to-red-700">
                    <h3 class="text-lg font-semibold mb-2">Messages</h3>
                    <p>You have 3 unread messages waiting for your response.</p>
                </div>

            </div>
        </div>
    </div>

    <script>
        function toggleDarkMode() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        }

        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        }
    </script>
</x-app-layout>
