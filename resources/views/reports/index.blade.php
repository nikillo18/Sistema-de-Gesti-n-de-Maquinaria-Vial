<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Reportes por Provincia</h2>
    </x-slot>

    <div class="max-w-7xl mx-auto">
        <table class="w-full border">
            <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm uppercase">
                <tr>
                    <th class="border px-4 py-2">Provincia</th>
                    <th class="border px-4 py-2">Acción</th>
                </tr>
            </thead >
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($provincias as $provincia)
                    <tr>
                        
                        <td class="text-white">{{ $provincia->name }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('reports.provincia', $provincia->id) }}" class="bg-blue-500 text-white px-4 py-1 rounded">Ver obras</a>

                        </td class="border px-4 py-2"class="border px-4 py-2">
                    </tr>
                @endforeach
            </tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
        </table>
    </div>
</x-app-layout>
