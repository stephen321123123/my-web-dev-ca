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
                <h3 class="font-semibold text-lg mb-4">List of Cars:</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($cars as $car) 
                <a href="{{ route('cars.show', $car) }}">
                        <x-car-card
                        :title="$car->title"
                        :price="$car->price"
                        :colour="$car->colour"
                        />
                </a>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 
