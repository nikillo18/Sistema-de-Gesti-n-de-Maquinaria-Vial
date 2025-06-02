<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Editar Maquinaria</h2>
    </x-slot>

    <div class="max-w-xl mx-auto mt-6 bg-white dark:bg-gray-800 p-6 shadow rounded-xl">
        <form action="{{ route('machines.update', $machine->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <x-input-label for="serial_number" value="N° Serie" />
                <x-text-input id="serial_number" name="serial_number" type="text" class="mt-1 block w-full" value="{{ old('serial_number', $machine->serial_number) }}" required />
                <x-input-error :messages="$errors->get('serial_number')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="model" value="Modelo" />
                <x-text-input id="model" name="model" type="text" class="mt-1 block w-full" value="{{ old('model', $machine->model) }}" required />
                <x-input-error :messages="$errors->get('model')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="type_id" value="Tipo de máquina" />
                <select name="type_id" id="type_id" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white">
                    @foreach(\App\Models\Machine_Type::all() as $type)
                        <option value="{{ $type->id }}" {{ $type->id == $machine->type_id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('type_id')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-primary-button>Actualizar</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
