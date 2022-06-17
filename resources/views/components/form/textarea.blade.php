@props(['name', 'value'=>''])
<x-form.input-wrapper>
    <x-form.label :name='$name'/>
    <textarea name="{{$name}}"  class="form-control editor" cols="10" rows="5"id="{{$name}}">{!!old("$name", "$value")!!}</textarea>
    <x-error :name='$name'/>
</x-form.input-wrapper>