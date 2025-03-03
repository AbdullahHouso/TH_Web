@props(["path", "active" => false])

<a
    class="{{ $active ? 'text-blue-600 bg-white' : 'text-white' }} font-extrabold px-2 py-2 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300"
    href="{{ $path }}">
    {{$slot}}
</a>
