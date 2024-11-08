

@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

<div class="mb-4">
    <label for="title" class="block text-sm text-gray-700">Title</label>
    <input
        type="text" 
        name="title"
        id="title"
        value="{{ old('title', $car->title ??'')}}" 
    required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
    @error('title')
    <p class="text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
    <label for="price" class="block text-sm text-gray-700">Price</label>
    <input
        type="text" 
        name="price"
        id="price"
        value="{{ old('price', $car->price ??'')}}"
    required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
    @error('price')
    <p class="text-sm text-red-600">{{ $message }}</p>
@enderror
</div>
 
<div class="mb-4">
    <label for="release_year" class="block text-sm text-gray-700">Release Year</label>
    <input
        type="text" 
        name="release_year"
        id="release_year"
        value="{{ old('release_year', $car->release_year ??'')}}"
    required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
    @error('release_year')
    <p class="text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
    <label for="engine_size" class="block text-sm text-gray-700">Engine Size</label>
    <input
        type="text" 
        name="engine_size"
        id="engine_size"
        value="{{ old('engine_size', $car->engine_size ??'')}}"
    required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
    @error('engine_size')
    <p class="text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
    <label for="transmission_type" class="block text-sm text-gray-700">Transmission Type</label>
    <input
        type="text" 
        name="transmission_type"
        id="transmission_type"
        value="{{ old('transmission_type', $car->transmission_type ??'')}}"
    required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
    @error('transmission_type')
    <p class="text-sm text-red-600">{{ $message }}</p>
@enderror
</div> 

<div class="mb-4">
    <label for="colour" class="block text-sm text-gray-700">Colour</label>
    <input
        type="text" 
        name="colour"
        id="colour"
        value="{{ old('colour', $car->colour ??'')}}"
    required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
    @error('colour')
    <p class="text-sm text-red-600">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
    <label for="registration_year" class="block text-sm text-gray-700">Registration Year</label>
    <input
        type="text" 
        name="registration_year"
        id="registration_year"
        value="{{ old('registration_year', $car->registration_year ??'')}}"
    required
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
    @error('registration_year')
    <p class="text-sm text-red-600">{{ $message }}</p>
@enderror
</div> 





@error('image')
<p class="text-sm text-red-600">{{ $message }}</p>
@enderror
</div>


@isset($car->image)
<div class="mb-4">
<img src="{{ asset($car->image) }}" alt="Car cover" class="w-24 h-32 object-cover">
</div>
@endisset  

<div>
<x-primary-button>
{{ isset($car) ? 'Update Car' : 'Add Car' }} 
</x-primary-button> 
</div> 
</form>  




