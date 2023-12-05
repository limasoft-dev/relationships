<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-bold text-2xl">
                        {{ __("Project Demo for Model Relationships!") }}
                    </div>
                    <div>
                        <p class="mt-16">
                            {{ __("We implements 1:1, 1:N with reverse and N:N without pivot data relationships") }}
                        </p>
                        <p>Tecnologies Used:
                            <ul>
                                <li>Laravel 10</li>
                                <li>StarterKit Breeze</li>
                                <li>Taillwind CSS</li>
                            </ul>
                        </p>
                        <p class=" mt-10">
                            {{ __("Developed with pedagogic intents by António Andrade")}}
                        </p>

                        <p class="text-xs">
                            {{ __("antonio.andrade@ae-salvaterra.pt")}}
                        </p>
                    </div>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
