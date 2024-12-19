<x-layout>
@if (session('success'))


    <div class="alert alert-success text-center">{{session('success')}}

   </div>

    @endif

    <x-hero />
    <!-- blogs section -->
    <x-blog-section  :blogs="$blogs"
                     />

    <!-- subscribe new blogs -->

    <!-- footer -->

</ x-layout>
