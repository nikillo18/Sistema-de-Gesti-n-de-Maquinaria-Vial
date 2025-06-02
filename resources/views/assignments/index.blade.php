<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Listado asignaciones
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm uppercase">
                            <tr>
                                <th class="px-6 py-3 text-left">Maquina</th>
                                <th class="px-6 py-3 text-left">Obra</th>
                                <th class="px-6 py-3 text-left">Fecha de inicio</th>
                                <th class="px-6 py-3 text-left">Fecha de fin</th>
                                <th class="px-6 py-3 text-left">Razon de Terminado</th>
                                <th class="px-6 py-3 text-left">Kilometros</th>
                                <th class="px-6 py-3 text-left">Acciones</th>

                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($assignments as $assignment)
                                <tr>
                                    <td class="px-6 py-4">{{ $assignment->machine->serial_number }}</td>
                                    <td class="px-6 py-4">{{ $assignment->work->name }}</td>
                                    <td class="px-6 py-4">{{ $assignment->start_date  }}</td>
                                    <td class="px-6 py-4">{{ $assignment->end_date }}</td>
                                    <td class="px-6 py-4">{{ $assignment->end_reason  }}</td>
                                    <td class="px-6 py-4">{{ $assignment->kilometers  }}</td>

                                    <td class="px-6 py-4 flex space-x-2">
                                        <a href="{{ route('assignments.edit', $assignment->id) }}">
                                            <x-secondary-button>Editar</x-secondary-button>
                                        </a>

                                        <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST"
                                              onsubmit="return confirm('¿Estás seguro de eliminar esta asignacion?')">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>Eliminar</x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
