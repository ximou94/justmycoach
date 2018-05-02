@extends('welcome')
@section('content')

<section id="blog-area" class="blog-large-area blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                @yield('blogcontent')
            </div>
            @include('partials/_sidebar')
         </div>
    </div>
</section>

@stop
