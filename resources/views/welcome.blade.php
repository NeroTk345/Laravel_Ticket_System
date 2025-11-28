<x-layouts.mainrootlayout>
<div class="max-w-3xl mx-auto p-6 text-center space-y-8">

    {{-- Welkomsboodschap --}}
    <h1 class="text-4xl font-bold">Hoi, welkom bij het Ticket-systeem!</h1>
    <p class="text-gray-700">
        Dit is een algemene startpagina. Klik op de knoppen hieronder om een verrassing te zien.
    </p>

    {{-- Knoppen sectie --}}
    <div x-data="{ showImage1: false, showImage2: false }" class="flex flex-col sm:flex-row justify-center gap-6">

        {{-- Eerste knop --}}
        <div>
            <button 
                @click="showImage1 = !showImage1"
                class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600 transition"
            >
                Laat eerste afbeelding zien
            </button>

            <div x-show="showImage1" x-transition class="mt-4">

            </div>
        </div>

        {{-- Tweede knop --}}
        <div>
            <button 
                @click="showImage2 = !showImage2"
                class="bg-green-500 text-white px-6 py-3 rounded hover:bg-green-600 transition"
            >
                Laat tweede afbeelding zien
            </button>

            <div x-show="showImage2" x-transition class="mt-4">
                
            </div>
        </div>
    </div>

    {{-- Extra instructie sectie --}}
    <div class="bg-gray-100 p-6 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-2">Wat je hier kunt doen:</h2>
        <ul class="text-gray-700 list-disc list-inside space-y-1">
            <li>Kijk naar de plaatjes door op de knoppen te klikken.</li>
            <li>Later kan je hier tickets aanmaken.</li>
            <li>Admins kunnen hier hun dashboard bereiken.</li>
        </ul>
    </div>

</div>

{{-- Vergeet niet Alpine.js in je layout te hebben --}}
{{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
</x-layouts.mainrootlayout>
