@extends('blog.main')
@section('blogcontent')

<div class="blog-post">
    <!--Start single blog post-->
    <div class="single-blog-item">
        <div class="img-holder">
            <img src="{{ Voyager::image( $post->image  )  }}" alt="Awesome Image">
            <div class="categories">
                <a href="#">Performances &nbsp;</a>
            </div>
        </div>
        <div class="text-holder">
            <ul class="meta-info">
                <li><a href="#">{{$post->created_at}}</a></li>
            </ul>
            <h1 class="blog-title">{{ $post->title  }}</h1>
            <div class="text">{!! $post->body !!}</div>
        </div>
    </div>
    <!--End single blog post-->
</div>

@stop
