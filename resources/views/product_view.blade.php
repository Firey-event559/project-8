<x-layout>


<h1>{{ $product->Name }}</h1>
<p>{{ $product->Price }}</p>
<p>{{ $product->Description }}</p>
<img src="{{ asset($product->Image) }}" alt="{{ $product->Name }}" width="200" height="200">



</x-layout>