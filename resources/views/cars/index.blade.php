<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('All Cars') }}
        </h2>
    </x-slot>

    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

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
                        :release_year="$car->release_year"
                        :engine_size="$car->engine_size"
                        :transmission_type="$car->transmission_type"
                        :colour="$car->colour"
                        :registration_year="$car->registration_year"
                        />
                    </a>
                </div>

    <!--Edit and delete buttons -->
<div class="mt-4 flex space-x-2">

    <!--Edit buttons route to cars.edit. recieves $car to know which car to edit -->
<a href="{{ route('cars.edit', $car) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
    Edit
</a>

<form action="{{ route('cars.destroy', $car) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car?');">
    @csrf 
    @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 px-4 rounded">
            Delete  
        </button> 
</form>
</div>    

      @endforeach
    </div>
    </div>
    </div>
</div>
</x-app-layout> 
