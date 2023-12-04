<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My::Projects::List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class=" grid grid-cols-2 gap-1">
                        <div class=" bg-gray-800 text-gray-200 px-2 py-2 rounded-t-md">Nome</div>
                        <div class=" bg-gray-800 text-gray-200 px-2 py-2 rounded-t-md">Estado</div>

                        @foreach ($projects as $project)
                            <div class="bg-gray-200 text-gray-700 px-2">{{$project->nome}}</div>
                            <div class="bg-gray-200 text-gray-700 px-2">{{$project->estado}}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


