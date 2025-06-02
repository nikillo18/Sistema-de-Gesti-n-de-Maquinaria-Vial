<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Listado de máquinas
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <!-- ✅ Scroll horizontal si la tabla es muy ancha -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm uppercase">
                                <tr>
                                    <th class="px-6 py-3 text-left">N° Serie</th>
                                    <th class="px-6 py-3 text-left">Modelo</th>
                                    <th class="px-6 py-3 text-left">Tipo</th>
                                    <th class="px-6 py-3 text-left">Historial</th>
                                    <th class="px-6 py-3 text-left">Mantenimientos</th>
                                    <th class="px-6 py-3 text-left">Km actuales</th>
                                    <th class="px-6 py-3 text-left">Límite</th>
                                    <th class="px-6 py-3 text-left">¿Mantenimiento?</th>
                                    
                                    <th class="px-6 py-3 text-left">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($machines as $machine)
                                <tr>
                                    <td class="px-6 py-4">{{ $machine->serial_number }}</td>
                                    <td class="px-6 py-4">{{ $machine->model }}</td>
                                    <td class="px-6 py-4">{{ $machine->machineType->name ?? '-' }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('machines.history', $machine->id) }}" class="text-blue-600 hover:underline">Ver historial</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('maintenances.show', $machine->id) }}" class="text-blue-600 hover:underline">Ver</a>
                                        |
                                        <a href="{{ route('maintenances.create', $machine->id) }}" class="text-green-600 hover:underline">Nuevo</a>
                                    </td>
                                    <td class="px-6 py-4">{{ $machine->kilometers_present ?? 0 }} km</td>
                                    <td class="px-6 py-4">{{ $machine->limit_km_maintenance ?? '-' }} km</td>
                                    <td class="px-6 py-4">
                                        @if($machine->limit_km_maintenance && $machine->kilometers_present > $machine->limit_km_maintenance)
                                            <span class="text-red-600 font-bold">¡Superado!</span>
                                        @else
                                            <span class="text-green-600">Ok</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 flex space-x-2">
                                        <a href="{{ route('machines.edit', $machine->id) }}">
                                            <x-secondary-button>Editar</x-secondary-button>
                                        </a>
                                        <form action="{{ route('machines.destroy', $machine->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta máquina?')">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>Eliminar</x-danger-button>
                                        </form>
                                        <a href="{{ route('machines.editLimit', $machine->id) }}" class="text-yellow-600 hover:underline">Límite de km</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end overflow-x-auto -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
