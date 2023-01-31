@props(['title', 'number', 'rate', 'rate_text_color'])

<div {{$attributes->merge(['class' => 'flex items-center w-56 h-28 justify-center bg-gray-100 rounded-2xl shadow-md'])}}>
    <div class="relative flex flex-col w-2/3 border-b-2 border-sky-900">
        <span class="font-bold text-gray-500">{{$title}}</span>
        <span class="text-2xl">{{$number}}</span>
        <span class="absolute bottom-0 right-0 text-sm {{$rate_text_color}}">{{$rate}}</span>
    </div>
</div>