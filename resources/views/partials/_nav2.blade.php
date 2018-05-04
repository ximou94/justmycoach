<div class="container">
        <div class="row">
            <div class="col-lg-12 clearfix">
                <!--Start logo-->
                <div class="logo pull-left">
                    <a href="{{route('home')}}">
                        <img src="http://justmycoach.fr/images/resources/logo-justmycoach.png" alt="Awesome Logo">
                    </a>
                </div>
                <!--End logo-->
                <!--Start mainmenu-->
                <nav class="main-menu pull-left">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            @foreach($items as $menu_item)
                                <li class="dropdown"><a href="{{ $menu_item->link()  }}">{!! $menu_item->title  !!}</a>
                                @php
                                    $submenu = $menu_item->children;
                                @endphp

                                @if(isset($submenu))
                                    <ul class="menu">
                                        @foreach($submenu as $item)
                                            <li><a href="{{$item->url}}">{{$item->title}} </a></li>
                                        @endforeach
                                    </ul>
                                @endif
                           <div class="dropdown-btn"></div></li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
                <!--End mainmenu-->
                <!--Start mainmenu right box-->
                <div class="mainmenu-right-box pull-right">
               <!-- <div class="outer-search-box">
                        <div class="seach-toggle"><i class="fa fa-search"></i></div>
                        <ul class="search-box">
                            <li>
                                <form method="post" action="index.php">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here" required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div> -->
                    <div class="appointment-button">
                        <a class="thm-btn bgclr-1" href="http://justmycoach.fr/contact.php">Me contacter</a>
                    </div>
                </div>
                <!--End mainmenu right box-->
            </div>
        </div>
    </div>
