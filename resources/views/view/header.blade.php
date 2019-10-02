<header class="hide-bg">
    <!-- header -->
    <div id="mainNav" class="navbar-fixed-top">
        <div class="container">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="logo"> KOB<span>one</span> </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <!--  nav  -->
                <nav class="navbar navbar-inverse navbar-default">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations=" fadeInLeft fadeInUp fadeInRight">
                        <ul class="nav navbar-nav">

                            <li class="menu-item dropdown">
                                <a href="index.html">Home</a>

                            </li>
                            <li><a href="coupons.html">COUPONS & DEALS</a></li>
                            <li><a href="{{ route('stores') }}">STORS</a></li>
                            <li><a href="categories.html">CATEGORIES</a></li>

                            <li><a href="news.html">BLOG</a></li>

                            <li><a href="contact.html">CONTACT</a></li>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".popup1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>


                        </ul>
                        <!-- /.navbar-collapse -->
                    </div>
                </nav>
                <!--  /nav  -->
                <!-- search-popup -->
                <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content search-popup">
                            <div class="search-outer">
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="text" placeholder="Search for products..." />
                                    </div>
                                    <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /search-popup -->
            </div>
        </div>
    </div>
    <!-- /header -->

    <!-- header bg -->
    <div class="header-bg">
        <div class="container">
            <div class="header-text">
                <h1 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h1>
                <h2 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h2>
                <div class="header-search">
                    <input type="text" placeholder="Search For Coupons... " />
                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </div>
                <a href="#featured" class="mouse-icon"><img src="{{URL::asset('images/mouse-icon.png')}}" alt="mouse-icon" /></a>
            </div>
        </div>
    </div>
    <!-- header bg end -->


</header>
