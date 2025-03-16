<x-layout>
    <x-slot:title>Edit Category: {{$category->name}}</x-slot:title>
    <form method="POST" action="/categories/edit/{{$category->id}}">
        @csrf
        @method('PATCH')
        <div class="flex flex-col mb-10">
            <label for="name">Name</label>
          ♥  <input class="border border-gray-600" type="text" id="name" name="name"
            value="{{ $category->name }}"/>
            @error('name')
            <div class="text-xs text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col mb-10">
            <label for="description">Description</label>
            <textarea class="border border-gray-600" id="description" name="description">{{ $category->description }}</textarea>
            @error('description')
            <div class="text-xs text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div>
            <button type="submit" class="px-6 py-4 bg-blue-500 text-white rounded-full">Submit</button>
        </div>
    </form>
</x-layout>
