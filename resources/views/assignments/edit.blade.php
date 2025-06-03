<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Editar Asignación</h2>
    </x-slot>

    <div class="max-w-xl mx-auto mt-6 bg-white dark:bg-gray-800 p-6 shadow rounded-xl">
        <form action="{{ route('assignments.update', $assignment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <x-input-label for="machine_id" value="Máquina" />
                <select name="machine_id" id="machine_id" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white">
                    @foreach(\App\Models\Machine::all() as $machine)
                        <option value="{{ $machine->id }}" {{ $machine->id == $assignment->machine_id ? 'selected' : '' }}>
                            {{ $machine->serial_number }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('machine_id')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="work_id" value="Obra" />
                <select name="work_id" id="work_id" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white">
                    @foreach(\App\Models\Work::all() as $work)
                        <option value="{{ $work->id }}" {{ $work->id == $assignment->work_id ? 'selected' : '' }}>
                            {{ $work->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('work_id')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="start_date" value="Fecha de inicio" />
                <x-text-input id="start_date" name="start_date" type="date" class="mt-1 block w-full"
                    value="{{ old('start_date', $assignment->start_date) }}" required />
                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="end_date" value="Fecha de fin" />
                <x-text-input id="end_date" name="end_date" type="date" class="mt-1 block w-full"
                    value="{{ old('end_date', $assignment->end_date) }}" required />
                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="end_reason" value="Razón" />
                <x-text-input id="end_reason" name="end_reason" type="text" class="mt-1 block w-full"
                    value="{{ old('end_reason', $assignment->end_reason) }}" required />
                <x-input-error :messages="$errors->get('reason')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="kilometers" value="kilometros" />
                <x-text-input id="kilometers" name="kilometers" type="number" class="mt-1 block w-full"
                    value="{{ old('kilometers', $assignment->kilometers) }}" required />
                <x-input-error :messages="$errors->get('kilometers')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-primary-button>Actualizar</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
