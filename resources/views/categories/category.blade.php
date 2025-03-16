<x-layout>
    <x-slot:title>View {{$category["name"]}}</x-slot:title>
    {{ $category["name"] }}
    <br>
    {{ $category["description"] }}
    <div class="flex flex-row gap-x-5">
        <a class="px-6 py-4 bg-blue-500 text-white rounded-full" href="/categories/edit/{{$category->id}}">Edit</a>
        <form method="POST" action="/categories/delete/{{$category->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-6 py-4 bg-red-500 text-white rounded-full">Delete</button>
        </form>
    </div>
</x-layout>
