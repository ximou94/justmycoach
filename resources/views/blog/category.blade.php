@extends('blog.main')
@section('blogcontent')

<div class="blog-post">
    <div class="row">
        <!--Start single blog post-->
        @foreach($posts as $post)
        <div class="col-md-6">
            <div class="single-blog-item wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0" style="visibility: visible;">
                <div class="img-holder">
                    <img src="{{Voyager::image($post->image)}}" alt="Awesome Image">
                    <div class="overlay-style-one"></div>
                    <div class="categories">
                        <a href="#">Performances</a>
                    </div>
                </div>
                <div class="text-holder">
                    <ul class="meta-info">
                        <li><a href="#">11 avril 2018</a></li>
                        <li><a href="#">10 Comments</a></li>
                    </ul>
                    <a href="{{route('blog.show',$post->slug)}}">
                        <h3 class="blog-title">{{ $post->title  }}</h3>
                    </a>
                    <div class="text">
                        <p>{{$post->excerpt}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
     </div>
</div>

@stop
