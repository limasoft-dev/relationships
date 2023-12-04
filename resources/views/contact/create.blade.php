<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact::Create') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('contact.store')}}" method="post">
                        @csrf
                        <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input name="phone" type="text" class="mt-1 block w-full" :value="old('phone')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
                        </div>
                        <div>
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-input name="address" type="text" class="mt-1 block w-full" :value="old('address')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('address')"/>
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

