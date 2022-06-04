











<x-layout>



@if(session('success'))
<div class="alert alert-success text-center">

    {{ session('success') }}
</div>
@endif
    


    <!-- navbar -->
  
    <!-- hero section -->
    <x-hero></x-hero>
    <!-- blogs section -->
<x-blogs-section :blogs="$blogs"  />
    <!-- subscribe new blogs --> 
<x-subscribe></x-subscribe>
    <!-- footer -->
    </x-layout>