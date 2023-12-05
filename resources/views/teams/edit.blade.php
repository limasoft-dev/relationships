<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Team::Members') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>{{$team->name}}</h2>
                    <div class=" grid grid-cols-2 gap-1">
                        <div class=" bg-gray-800 text-gray-200 px-2 py-2 rounded-t-md">Membros</div>
                        <div class=" bg-gray-800 text-gray-200 px-2 py-2 rounded-t-md">Users</div>
                        <div class="bg-gray-200 text-gray-700 px-2">
                            <form action="{{route('teams.removemembers', $team->id)}}" method="post">
                                @csrf
                                <select name="ids[]" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" multiple size="10">
                                    @foreach ($team->users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                                <div class="flex items-center gap-4 mt-5 mb-5">
                                    <x-primary-button>{{ __('Remover Membros Selecionados') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                        <div class="bg-gray-200 text-gray-700 px-2">
                            <form action="{{route('teams.addmembers', $team->id)}}" method="post">
                                @csrf
                                <select name="ids[]" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" multiple size="10">
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                                <div class="flex items-center gap-4 mt-5 mb-5">
                                    <x-primary-button>{{ __('Adicionar Membros Selecionados') }}</x-primary-button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

