@props(['tagsCsv'])

<!-- explode() to separate by comma -->
@php
$genre_tags = explode(',', $tagsCsv);
@endphp


<div>
    @foreach($genre_tags as $tag)
    <div class="text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 rounded-full bg-white text-gray-700 border mr-2">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </div>
    @endforeach
</div>