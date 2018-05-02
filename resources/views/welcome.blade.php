<!doctype html>
<html>
<head>
    @include('partials/_head')
</head>

<body>
    <div class="boxed_wrapper">
        <!--Start top bar area-->
        <section class="top-bar-area">
            @include('partials/_topBar')
        </section>
        <!--End top bar area-->

        <!--Start mainmenu area-->
        <section class="mainmenu-area stricky">
            {!! menu('Main menu','partials/_nav2') !!}
        </section>
        <!--End mainmenu area-->

            @yield('content')

            @include('partials/_footer')

    </div>
</body>

