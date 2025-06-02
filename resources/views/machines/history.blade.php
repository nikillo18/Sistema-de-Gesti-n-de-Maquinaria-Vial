<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Historial de la máquina: {{ $machine->serial_number }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($historys->isEmpty())
                        <p>No hay historial para esta máquina.</p>
                    @else
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-left text-sm uppercase">
                                    <th class="px-6 py-3">Obra</th>
                                    <th class="px-6 py-3">Provincia</th>
                                    <th class="px-6 py-3">Inicio</th>
                                    <th class="px-6 py-3">Fin</th>
                                    <th class="px-6 py-3">Km</th>
                                    <th class="px-6 py-3">Motivo de Fin</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($historys as $history)
                                    <tr>
                                        <td class="px-6 py-4">{{ $history->work->name }}</td>
                                        <td class="px-6 py-4">{{ $history->work->province->name }}</td>
                                        <td class="px-6 py-4">{{ $history->start_date }}</td>
                                        <td class="px-6 py-4">{{ $history->end_date ?? 'ACTIVA' }}</td>
                                        <td class="px-6 py-4">{{ $history->kilometers ?? '-' }}</td>
                                        <td class="px-6 py-4">{{ $history->end_reason ?? '-' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
