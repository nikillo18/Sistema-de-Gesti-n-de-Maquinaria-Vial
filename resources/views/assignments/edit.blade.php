<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Editar Maquinaria</h2>
    </x-slot>

    <div class="max-w-xl mx-auto mt-6 bg-white dark:bg-gray-800 p-6 shadow rounded-xl">
        <form action="{{ route('machines.update', $machine->id) }}" method="POST">
            @csrf
            @method('PUT')

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

            <div class="mb-4">
                <x-input-label for="work_id" value="tipo de obra" />
                <x-text-input id="work_id" name="work_id" type="text" class="mt-1 block w-full" value="{{ old('work_id', $assignments->work_id) }}" required />
                <x-input-error :messages="$errors->get('work_id')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="start_date" value="Fecha de inicio" />
                <x-text-input id="start_date" name="start_date" type="text" class="mt-1 block w-full" value="{{ old('start_date', $assignment->start_date) }}" required />
                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
            </div>


             <div class="mb-4">
                <x-input-label for="end_date" value="Fecha de fin" />
                <x-text-input id="" name="start_date" type="text" class="mt-1 block w-full" value="{{ old('start_date', $assignment->start_date) }}" required />
                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="end_date" value="Fecha de fin" />
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
