@props(['title', 'price', 'release year', 'engine size', 'transmission type', 'colour', 'registration year'])

<div class="border rounded-lg shadow-nd p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="">{{$title}}</h4>
    <p class="">{{ $price }}</p>
    <p class="">{{ $release_year }}</p>
    <p class="">{{ $engine_size }}</p>
    <p class="">{{ $transmission_type }}</p>
    <p class="">{{ $colour }}</p>
    <p class="">{{ $registration_year }}</p>
</div>


<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto"> <!-- Limit the overall container width to make the component more compact --> 

<!-- Car Title --> 
<h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $title }}</h1> <!-- Heading with larger text and color --> 

<!-- Price --> 
<h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Price: {{ $price }}</h2> <!-- Emphasizing price with italics and smaller text --> 

<!-- Car Release Year --> 
<h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Release Year</h3> <!-- Subheading for description --> 
<p class="text-gray-700 leading-relaxed">{{ $release_year }}</p> <!-- Text is spaced out for readability -->

<!-- Car Engine Size --> 
<h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Engine Size</h3> <!-- Subheading for description --> 
<p class="text-gray-700 leading-relaxed">{{ $engine_size }}</p> <!-- Text is spaced out for readability --> 

<!-- Car Transmisision Type --> 
<h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Transmission Type</h3> <!-- Subheading for description --> 
<p class="text-gray-700 leading-relaxed">{{ $transmission_type }}</p> <!-- Text is spaced out for readability --> 

<!-- Car Colour --> 
<h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Colour</h3> <!-- Subheading for description --> 
<p class="text-gray-700 leading-relaxed">{{ $colour }}</p> <!-- Text is spaced out for readability --> 

<!-- Car Registration Year --> 
<h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Registration Year</h3> <!-- Subheading for description --> 
<p class="text-gray-700 leading-relaxed">{{ $registration_year }}</p> <!-- Text is spaced out for readability --> 

</div> 