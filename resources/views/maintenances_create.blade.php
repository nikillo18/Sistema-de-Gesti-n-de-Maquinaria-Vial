<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Nuevo mantenimiento para {{ $machine->serial_number }}</h2>
    </x-slot>

    <div class="p-6">
        <form action="{{ route('maintenances.store') }}" method="POST">
            @csrf

            <input type="hidden" name="machine_id" value="{{ $machine->id }}">

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Fecha</label>
                <input type="date" name="date"
                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>

            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Descripción</label>
                <input type="text" name="description" 
                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>

    
                
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kilómetros</label>
                <input type="number" name="kilometers_maintainance"   class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>

            </div>

            <x-primary-button>Guardar mantenimiento</x-primary-button>
        </form>
    </div>
</x-app-layout>
