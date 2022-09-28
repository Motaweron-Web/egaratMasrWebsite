

<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('site_egareat_egypt')}}">
            <img src="{{asset('assets/site/img/logo.png')}}" />
        </a>
        <!-- links in md media -->
        <div class="d-none d-md-block">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('site_egareat_egypt')}}">
                        <i class="fa-light fa-house me-1"></i> الرئيسية
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contactUs')}}">
                        <i class="fa-light fa-headset me-1"></i> اتصل بنا</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.myProfile')}}">
                        <i class="fa-light fa-user me-1"></i> حسابي
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index.reservation')}}">
                        <i class="fa-light fa-bags-shopping me-1"></i> حجوزاتي
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">
                        <i class="fa-duotone fa-arrow-right-from-bracket"></i>

                    </a>
                </li>




            </ul>
        </div>
        <!-- toggle btn -->
        <div class="sideBtn d-md-none">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- side menu -->
        <div class="sideMenu">
            <div class="sideMenuInner">
                <a class="sideMenuLink" href="index.html">
                    <i class="fa-light fa-house me-1"></i> الرئيسية
                </a>
                <a class="sideMenuLink" href="#!">
                    <i class="fa-light fa-headset me-1"></i> اتصل بنا</a
                >
                <a class="sideMenuLink" href="#!">
                    <i class="fa-light fa-user me-1"></i> حسابي
                </a>
                <div class="dropdown">
                    <a
                        class="sideMenuLink dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="fa-light fa-badge-dollar me-1"></i> العملة
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"> دولار أمريكي </a></li>
                        <li><a class="dropdown-item" href="#"> يورو </a></li>
                        <li><a class="dropdown-item" href="#"> جنيه مصـري </a></li>
                        <li><a class="dropdown-item" href="#"> ريال ســـعودي </a></li>
                    </ul>
                </div>
                <ul class="sideMenuSocials">
                    <li>
                        <a href="#!">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
    $(".sideBtn").click(function () {
        $(this).toggleClass("active");
        $(".sideMenu").toggleClass("active");
    });
</script>
