@props(['title', 'price', 'release_year', 'engine_size', 'transmission_type', 'colour', 'registration_year'])

<div class="border rounded-lg shadow-nd p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{$title}}</h4>
    <p class="text-gray-600">{{ $price }}</p>
    <p class="text-gray-600">{{ $release_year }}</p>
    <p class="text-gray-600">{{ $engine_size }}</p>
    <p class="text-gray-600">{{ $transmission_type }}</p>
    <p class="text-gray-600">{{ $colour }}</p>
    <p class="text-gray-600">{{ $registration_year }}</p>
</div>

