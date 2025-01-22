<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top site-navbar" id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand">
                <img class="img-fluid" src="{{asset('assets/images/00-hp/top_logo.svg')}}" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('about') }}" class="nav-item nav-link">關於我們</a>
                    <a href="{{ route('exchange') }}" class="nav-item nav-link">信用卡換現金</a>
                    <a href="{{ route('bnpl') }}" class="nav-item nav-link">無卡分期額度收購</a>
                    <a href="{{ route('cases') }}" class="nav-item nav-link">成交案例</a>
                    <a href="{{ route('quick-apply') }}" class="nav-item nav-link">快速申辦</a>
                    <a href="{{ route('faq') }}" class="nav-item nav-link">常見問答</a>
                </div>
                <div class="border-start ps-4 d-none d-lg-block">
                    <!-- <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button> -->
                    <a href="">
                        <img src="{{asset('assets/images/00-hp/menu_fb.png')}}" class="img-fluid" width="50" alt="">
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
