<x-layout>
    <x-slot:title>Products</x-slot:title>
    @foreach($products as $product)
    <a class="font-underline text-red-700" href="/product/{{$product->id}}">{{ $product->company }} {{ $product->model }}</a>
    <br>
    @endforeach
</x-layout>
