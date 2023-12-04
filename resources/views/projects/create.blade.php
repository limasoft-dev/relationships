<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project::Create') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('projects.store')}}" method="post">
                        @csrf
                        <div>
                            <x-input-label for="nome" :value="__('Nome do Projeto')" />
                            <x-text-input name="nome" type="text" class="mt-1 block w-full" :value="old('nome')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
                        </div>
                        <div>
                            <x-input-label for="estado" :value="__('Estado')" />
                            <select name="estado" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" value="{{old('estado')}}" required>
                                <option value="">Escolha uma opção</option>
                                <option value="Feito">Feito</option>
                                <option value="Em Curso">Em Curso</option>
                                <option value="Em Projeto">Em Projeto</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('estado')"/>
                        </div>
                        <div class="flex items-center gap-4 mt-5">
                            <x-primary-button>{{ __('Gravar') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


