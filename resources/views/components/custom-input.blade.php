@props(['inputName', 'inputLabel', 'inputValue'])

<div>
    <label for="{{$inputName}}">{{$inputLabel}}</label>
    <input type="text" name="{{$inputName}}" class="border border-gray-200 rounded w-full font-light" value="{{$inputValue}}"/>

    @error($inputName)
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
</div>