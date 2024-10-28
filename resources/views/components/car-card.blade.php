@props(['title', 'price', 'colour'])

<div class="border rounded-lg shadow-nd p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{$title}}</h4>
    <p class="text-gray-600">{{ $price }}</p>
    <p class="text-gray-600">{{ $colour }}</p>
</div>

