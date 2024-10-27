<x--app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('All Cars') }}
        </h2>
    </x-slot>

    ‹div class="py-12">
        ‹div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            ‹div class="bg-white overflow-hidden shadow-sm sm: rounded-lg"›
                ‹div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4"›List of Cars:</h3>
                    ‹div cLass="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"›
                        @Foreach($cars as $car)
                            <x-car-card
                            :title="$car->title"
                            :price="$car-›price"
                            :release_year="$car-›release_year"
                            :engine_size="$car-›engine_size"
                            :transmission_type="$car-›transmission_type"
                            :colour="$car-›colour"
                            :registration_year="$car-›registration_year"
                        />
                        @endforeach
                    </div>    
                </div>   
            </div>   
        </div>   
    </div>   
</x-app-layout>
 

