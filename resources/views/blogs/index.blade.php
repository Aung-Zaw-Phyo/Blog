
<x-layout>
    @if(session()->get('success'))
    <div class="alert alert-success text-center h4 fst-italic">{{session('success')}}</div>
    @endif
    <x-hero/>
    <x-blogs-section :blogs='$blogs'/>
</x-layout>



