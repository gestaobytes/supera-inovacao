<header>
    <nav class="bg-gray-500">
        <div class="container">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

                    <div class="flex flex-shrink-0 items-center">
                        <a href="{{ route('maintenanceusers.index') }}">
                            <img  class="block h-10 w-auto lg:hidden"
                            src="https://www.supera.com.br/wp-content/uploads/2020/11/nova-logo-supera-branca.svg"
                            alt="Desafio Supera">
                            <img class="hidden h-10 w-auto lg:block"
                            src="https://www.supera.com.br/wp-content/uploads/2020/11/nova-logo-supera-branca.svg"
                            alt="Desafio Supera">
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            @auth
                                <a href="{{ route('vehicles.index') }}"
                                    class="text-gray-300 hover:bg-gray-700
                                hover:text-white
                                px-3
                                py-2
                                rounded-md
                                text-sm
                                font-medium">Veiculos</a>
                                <a href="{{ route('vehiclemodels.index') }}"
                                    class="text-gray-300 hover:bg-gray-700
                                hover:text-white
                                px-3
                                py-2
                                rounded-md
                                text-sm
                                font-medium">Modelos</a>
                                <a href="{{ route('maintenances.index') }}"
                                    class="text-gray-300
                                hover:bg-gray-700
                                hover:text-white
                                px-3
                                py-2
                                rounded-md
                                text-sm
                                font-medium">Manutenção</a>
                                <a href="{{ route('users.index') }}"
                                    class="text-gray-300
                                hover:bg-gray-700
                                hover:text-white
                                px-3
                                py-2
                                rounded-md
                                text-sm
                                font-medium">Usuarios</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    @if (Route::has('login'))
                        <div class="flex w-full">
                            @auth
                                <a href="{{ route('logout') }}"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sair</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
