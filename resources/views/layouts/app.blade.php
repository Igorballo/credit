<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{$nombanque}} </title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
<div class="se-pre-con"></div>
<section>
    <!-- sidebar menu start -->
    <div class="sidebar-menu sticky-sidebar-menu">

        <!-- logo start -->
        <div class="logo">
            <h1><a href="/">Collective</a></h1>
        </div>

        <!-- if logo is image enable this -->
        <!-- image logo --
        <div class="logo">
          <a href="index.html">
            <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
          </a>
        </div>
        <!-- //image logo -->

        <div class="logo-icon text-center">
            <a href="/" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
        </div>
        <!-- //logo end -->

        <div class="sidebar-menu-inner">

            <!-- sidebar nav start -->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="/"><i class="fa fa-tachometer"></i><span> Mes comptes</span></a>
                </li>
                <li class="menu-list">
                    <a href="/cartes" class="mb-1"><i class="fa fa-cogs"></i>
                        <span class="">Comptes et cartes <i class="lnr lnr-chevron-right"></i></span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/operations" class="">Opérations</a> </li>
                    </ul>
                </li>
                <li><a href="/virements"><i class="fa fa-table"></i><span class="">Virements</span></a></li>
                <li><a href="/rib"><i class="fa fa-th"></i> <span>RIB</span></a></li>
                <li><a href="/cartes"><i class="fa fa-file-text"></i> <span>Cartes</span></a></li>
            </ul>
            <!-- //sidebar nav end -->


            <!-- toggle button start -->
            <a class="toggle-btn">
                <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
                <i class="fa fa-angle-double-right menu-collapsed__right"></i>
            </a>
            <!-- //toggle button end -->
        </div>
    </div>
    <!-- //sidebar menu end -->
    <!-- header-starts -->
    <div class="header sticky-header">

        <!-- notification menu start -->
        <div class="menu-right">
            <div class="navbar user-panel-top">
                <!-- <div class="search-box">
                  <form action="#search-results.html" method="get">
                    <input class="search-input" placeholder="Tapez ici..." type="search" id="search">
                    <button class="search-submit" value=""><span class="fa fa-search"></span></button>
                  </form>
                </div> -->
                <span class="fw-bolder text-uppercase fs-1 text-primary" style="text-decoration-line: underline; letter-spacing: 3px;">crédit lyonnaise </span>
                <div class="user-dropdown-details d-flex">
                    <div class="profile_details_left">
                        <ul class="nofitications-dropdown">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-bell-o"></i><span class="badge blue">0</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#all" class="bg-primary">Aucun message</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-comment-o"></i><span class="badge blue">0</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_bottom">
                                            <a class="bg-primary">Aucune notification</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                                   aria-expanded="false">
                                    <div class="profile_img">
                                        <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" class="rounded-circle" alt="" />
                                        <div class="user-active">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                                    <li class="user-info">
                                        <h5 class="user-name"> {{ $customer }}</h5>
                                        <span class="status ml-2">Disponible</span>
                                    </li>
                                    <li class="logout"> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Déconnexion</a> </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--notification menu end -->
    </div>
    <!-- //header-ends -->
    <!-- main content start -->
    <div class="main-content">

        @yield('content')
    </div>
</section>
<!--footer section start-->
<footer class="dashboard">
    <p>&copy 2022 Collective. All Rights Reserved | Design by <a href="#" target="_blank"
                                                                 class="text-primary">creditlyonnaise</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
    <span class="fa fa-angle-up"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- /move top -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="assets/js/bar.js"></script>
<script src="assets/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- close script -->
<script>
    var closebtns = document.getElementsByClassName("close-grid");
    var i;

    for (i = 0; i < closebtns.length; i++) {
        closebtns[i].addEventListener("click", function () {
            this.parentElement.style.display = 'none';
        });
    }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
    $(function () {
        $('.sidebar-menu-collapsed').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll when navbar is in active -->

<!-- loading-gif Js -->
<script src="assets/js/modernizr.js"></script>
<script>
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
<!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>

