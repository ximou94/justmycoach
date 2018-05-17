@extends('blog.main')

@section('title', $categorySEO->meta_title)
@section('description', $categorySEO->meta_description)

@section('blogcontent')
<div class="blog-post">
    @php
    $i = 0
    @endphp
      <div class="row">
        <!--Start single blog post-->
        @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="single-blog-item wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0" style="visibility: visible;">
                        <div class="img-holder">
                            <img src="{{Voyager::image($post->image)}}" alt="Awesome Image">
                            <div class="overlay-style-one"></div>
                            <div class="categories">
                                <a href="#">{{$post->category->name}}</a>
                            </div>
                        </div>
                        <div class="text-holder">
                            <ul class="meta-info">
                                <li><a href="#">{{$post->created_at->formatLocalized('%A %d %B %Y')}}</a></li>
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
                @php
                $i++
                @endphp

                @if ($i % 2 == 0)
                </div><div class="row">
                @endif
        @endforeach
     </div>
</div>
@stop

@section('CategoriesContent')
    <ul class="categories clearfix">
     @foreach($categories as $categorie)
            <li><a href="{{route('blog.category',['category' => $categorie->slug])}}">{{$categorie->name}}<span>({{$categorie->posts_count}})</span></a></li>
     @endforeach
     </ul>
@stop
