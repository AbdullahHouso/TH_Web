<x-layout>
    <x-slot:title>{{$product["company"]}} {{$product["model"]}}</x-slot:title>
    {{ $product["company"] }}
    <br>
    {{ $product["model"] }}
    <br>
    {{ $product["price"] }}
    <br>
</x-layout>
