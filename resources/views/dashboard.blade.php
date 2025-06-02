<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-white leading-tight">
            {{ __('Panel de Inicio') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            
            <!-- Mensaje de bienvenida -->
            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-lg p-6 text-white flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold">¡Hola {{ Auth::user()->name }}! 🎉</h1>
                    <p class="mt-1">Bienvenido al sistema de gestión. Seleccioná una opción para comenzar.</p>
                </div>
                <div>
                    <svg class="w-16 h-16 animate-bounce" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </div>
            </div>

            <!-- Accesos rápidos -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="{{ route('machines.index') }}" class="bg-white dark:bg-gray-800 hover:bg-indigo-100 dark:hover:bg-gray-700 p-6 rounded-xl shadow text-center transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">🛠 Maquinarias</h3>
                    <p class="text-gray-600 dark:text-gray-300">Ver y administrar las máquinas registradas.</p>
                </a>

                <a href="{{ route('works.index') }}" class="bg-white dark:bg-gray-800 hover:bg-green-100 dark:hover:bg-gray-700 p-6 rounded-xl shadow text-center transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">🏗 Obras</h3>
                    <p class="text-gray-600 dark:text-gray-300">Gestión de obras por provincia y estado.</p>
                </a>

                <a href="{{ route('reports.index') }}" class="bg-white dark:bg-gray-800 hover:bg-yellow-100 dark:hover:bg-gray-700 p-6 rounded-xl shadow text-center transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">📊 Reportes</h3>
                    <p class="text-gray-600 dark:text-gray-300">Visualizar reportes mensuales y exportar PDF.</p>
                </a>

                <a href="{{ route('assignments.index') }}" class="bg-white dark:bg-gray-800 hover:bg-red-100 dark:hover:bg-gray-700 p-6 rounded-xl shadow text-center transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">📋 Asignaciones</h3>
                    <p class="text-gray-600 dark:text-gray-300">Asigná y finalizá tareas para máquinas.</p>
                </a>

                <a href="{{ route('profile.edit') }}" class="bg-white dark:bg-gray-800 hover:bg-blue-100 dark:hover:bg-gray-700 p-6 rounded-xl shadow text-center transition">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">👤 Perfil</h3>
                    <p class="text-gray-600 dark:text-gray-300">Editá tus datos de usuario o cerrá sesión.</p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
