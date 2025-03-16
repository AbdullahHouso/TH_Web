<x-layout>
    <x-slot:title>Categories</x-slot:title>
    <div class="mb-10">
        <a class="px-6 py-4 bg-blue-500 text-white rounded-full" href="/categories/create">New Category</a>
    </div>
    <div>
        @foreach($categories as $category)
        <a class="font-underline text-red-700" href="/categories/{{$category->id}}">{{ $category->name }}</a>
        <br>
        @endforeach
    </div>
</x-layout>
