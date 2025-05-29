<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Historial de mantenimientos: {{ $machine->serial_number }}</h2>
    </x-slot>

    <div class="p-6">
               <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
         <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm uppercase">
                <tr>
                    <th class="px-6 py-3 text-left">Fecha</th>
                    <th class="px-6 py-3 text-left">Descripción</th>
                    <th class="px-6 py-3 text-left">Kilómetros</th>
                </tr>
            </thead>
             <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">

                @forelse($machine->maintenances as $m)
                    <tr>
                        <td class="px-6 py-4">{{ $m->date }}</td>
                        <td class="px-6 py-4">{{ $m->description }}</td>
                        <td class="px-6 py-4">{{ $m->kilometers_maintainance }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4">No hay mantenimientos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
