<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('All Cars') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm: rounded-lg">
            <div class="p-6 text-gray-900">
                <h3 class="font-semibold text-lg mb-4">Car:</h3>
                        <x-car-card
                        :title="$car->title"
                        :price="$car->price"
                        :release_year="$car->release_year"
                        :engine_size="$car->engine_size"
                        :transmission_type="$car->transmission_type"
                        :colour="$car->colour"
                        :registration_year="$car->registration_year"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 
