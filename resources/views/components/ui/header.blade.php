<header class="bg-white shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo / App Name -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600 hover:text-blue-700 transition">
            TicketFlow
        </a>

        <!-- Navigatie -->
        <nav class="space-x-6">
            <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 transition font-medium">Home</a>
            <a href="{{ url('Ticket.ticket') }}" class="text-gray-700 hover:text-blue-600 transition font-medium">Ticket aanmaken</a>
            {{-- <a href="{{ route('todos.index') }}" class="text-gray-700 hover:text-blue-600 transition font-medium">Todos</a>
            <a href="{{ route('todos.create') }}" class="text-gray-700 hover:text-blue-600 transition font-medium">Nieuwe taak</a> --}}
        </nav>

        <!-- Eventueel mobile menu icon -->
        <button class="sm:hidden text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</header>
