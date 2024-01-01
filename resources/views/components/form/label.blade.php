@props(['name'])
<label class="block uppercase text-sm mb-1"
       for="{{$name}}">
    {{ucwords($name)}}
</label>
