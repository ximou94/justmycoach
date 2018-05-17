@extends('welcome')

@section('title', $page->meta_title)
@section('description', $page->meta_description)


@section('content')
<section class="breadcrumb-area" style="background-image: url({{ Voyager::image($page->image) }});">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>{{ $page->title }}</h1>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<section class="breadcrumb-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="left pull-left">
                    <ul>
			<li><a href="http://justmycoach.fr/index.php">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
		                  <li><a href="/{{$category}}">{{$formatedCategory2}}</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">{{ $page->title }}</li>
                    </ul>
                </div>
                <!--<div class="right pull-right">
                    <a href="#">
                        <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span> 
                    </a>   
                </div>-->
            </div>
        </div>
    </div>
</section>
<section class="balance-mind-body-area">
    <div class="container">
        <div class="sec-title inline-title">
	    <h3>{{ $page->title }} :</h3>
	    <h1>{{ $page->excerpt }}</h1>
	</div>
  

{!!$page->body!!}
</div></section>
@stop