<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Obras en {{ $provincia->name }}</h2>
    </x-slot>

    <div class="max-w-7xl mx-auto">
        <table class="w-full border">
            <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm uppercase">
                <tr>
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-2">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($obras as $obra)
                    <tr>
                        <td class="text-white">{{ $obra->name }}</td>
                        <td class="text-white">{{ $obra->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('reports.pdf', $provincia->id) }}" method="GET" class="mt-4">
            <x-primary-button>Generar PDF</x-primary-button>
        </form>
    </div>
</x-app-layout>
