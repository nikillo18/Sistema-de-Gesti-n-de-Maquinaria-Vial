<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Listado de Obras
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm uppercase">
                            <tr>
                                <th class="px-6 py-3 text-left">Nombre de la obra</th>
                                <th class="px-6 py-3 text-left">Direccion</th>
                                <th class="px-6 py-3 text-left">Provincia</th>
                                <th class="px-6 py-3 text-left">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($works as $work)
                                <tr>
                                    <td class="px-6 py-4">{{ $work->name }}</td>
                                    <td class="px-6 py-4">{{ $work->address }}</td>
                                    <td class="px-6 py-4">{{ $work->province->name ?? '-' }}</td>
                                       
                                    </td>
                                    <td class="px-6 py-4 flex space-x-2">
                                        <a href="{{ route('works.edit', $work->id) }}">
                                            <x-secondary-button>Editar</x-secondary-button>
                                        </a>

                                        <form action="{{ route('works.destroy', $work->id) }}" method="POST"
                                              onsubmit="return confirm('¿Estás seguro de eliminar esta obra?')">
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
