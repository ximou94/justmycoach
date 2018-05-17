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
                        <li><a href="index.html">Home</a></li>
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
    {!! $page->body !!}
    <section class="slogan-area" style="color:#515253">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content text-center wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                    @php
                        $pageCorporate = array('renforcement','cardio-training','bien-etre');
                    @endphp
                    @if(in_array($page->slug, $pageCorporate))
                    <h1>Prenez contact avec Just My Coach, coach sportif corporate des entreprises de Montpellier.
                    Se faire rappeler, fixer un RDV téléphonique ou en savoir plus par courriel.</h1>
                    <p>Just My Coach, expert en fitness et consultant en nutrition sportive et santé à Montpellier, vous accompagne physiquement et mentalement dans la réussite de vos objectifs</p>
                    <a class="thm-btn bgclr-1" href="http://justmycoach.fr/contact.php">Contact</a>
                    @else
                    <h1>Prenez contact avec Just My Coach et profitez d’une séance d’essai offerte à Montpellier !
Faites-vous rappeler en moins de 48h par votre coach sportif privé</h1>
                    <p>Just My Coach, expert en fitness et consultant en nutrition sportive et santé, vous accompagne physiquement et mentalement dans la réussite de vos objectifs.</p>
                    <a class="thm-btn bgclr-1" href="http://justmycoach.fr/contact.php">Contact</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@stop

    