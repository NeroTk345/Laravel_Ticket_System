<footer class="bg-gray-800 text-gray-300 mt-16">
    <div class="container mx-auto px-6 py-8 grid md:grid-cols-3 gap-6 items-center">
        <!-- Branding -->
        <div class="text-center md:text-left">
            <h3 class="text-white font-bold text-lg mb-2">Todo App</h3>
            <p class="text-gray-400 text-sm">Beheer efficiënt je taken en blijf georganiseerd.</p>
        </div>

        <!-- Navigatie -->
        <div class="text-center">
            <h4 class="font-semibold text-white mb-2">Navigatie</h4>
            <ul class="space-y-1">
                <li><a href="{{ url('/') }}" class="hover:text-white transition">Home</a></li>
                {{-- <li><a href="{{ route('todos.index') }}" class="hover:text-white transition">Todos</a></li> --}}
                {{-- <li><a href="{{ route('todos.create') }}" class="hover:text-white transition">Nieuwe taak</a></li> --}}
            </ul>
        </div>

        <!-- Copyright -->
        <div class="text-center md:text-right text-sm text-gray-400">
            &copy; {{ date('Y') }} Mijn Laravel App. Alle rechten voorbehouden.
        </div>
    </div>
</footer>
