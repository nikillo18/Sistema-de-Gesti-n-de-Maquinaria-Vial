<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Editar Maquinaria</h2>
    </x-slot>

    <div class="max-w-xl mx-auto mt-6 bg-white dark:bg-gray-800 p-6 shadow rounded-xl">
        <form action="{{ route('works.update', $work->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <x-input-label for="name" value="Nombre" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name', $work->name) }}" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="address" value="Direccion" />
                <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" value="{{ old('address', $work->address) }}" required />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

              <div class="mb-4">
                <x-input-label for="start_date" value="Fecha inicio" />
                <x-text-input id="start_date" name="start_date" type="date" class="mt-1 block w-full" value="{{ old('start_date', $work->start_date) }}" required />
                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="end_date" value="Fecha fin" />
                <x-text-input id="end_date" name="end_date" type="date" class="mt-1 block w-full" value="{{ old('end_date', $work->end_date) }}" required />
                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
            </div>


            <div class="mb-4">
                <x-input-label for="province_id" value="Pronvincia" />
                <select name="province_id" id="province_id" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white">
                   @foreach(App\Models\Province::all() as $province)
                         <option value="{{ $province->id }}" {{ $province->id == $work->province_id ? 'selected' : '' }}>
                     {{ $province->name }}
                      </option>
                       @endforeach

                </select>
                <x-input-error :messages="$errors->get('province_id')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-primary-button>Actualizar</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
