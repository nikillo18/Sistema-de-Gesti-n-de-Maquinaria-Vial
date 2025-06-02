<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar límite de mantenimiento para {{ $machine->serial_number }}
        </h2>
    </x-slot>

    <div class="py-6 px-4">
        <form method="POST" action="{{ route('machines.updateLimit', $machine->id) }}">
            @csrf
            <div class="mb-4">
                <label for="limit_km_maintenance" class="block font-medium">Límite de km</label>
                <input type="number" name="limit_km_maintenance" value="{{ old('limit_km_maintenance', $machine->limit_km_maintenance) }}" class="border p-2 w-full" required>
            </div>
            <x-primary-button>Guardar</x-primary-button>
        </form>
    </div>
</x-app-layout>
