<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project::Nomear::Owner') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('projects.nomear.update',$project->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div>
                            <h2>{{$project->name}}</h2>
                        </div>
                        <div>
                            <x-input-label for="user_id" :value="__('User Gestor')" />
                            <select name="user_id" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" required>
                                <option value="">Escolha um novo Gestor para o projeto</option>
                                @foreach ($users as $user)
                                    @if (auth()->user()->id != $user->id)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('user_id')"/>
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



