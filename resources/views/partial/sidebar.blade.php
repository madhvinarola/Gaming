 <nav class="dash-sidebar light-sidebar transprent-bg">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{asset('assets/images/logo-dark.svg')}}" alt="" class="logo logo-lg" />
                <img src="{{asset('assets/images/logo-dark.svg')}}" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="dash-navbar">
                <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i
                                class="ti ti-home"></i></span><span class="dash-mtext">Dashboard</span><span
                            class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                        <li class="dash-item">
                            <a class="dash-link" href="{{route('dashboard.index')}}">Default</a>
                        </li>
                    </ul>
                </li>
                <li class="dash-item dash-caption">
                    <label>PAGES</label>
                </li>
                <li class="dash-item dash-hasmenu">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i
                                class="ti ti-license"></i></span><span class="dash-mtext">Pages</span><span
                            class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                        <li class="dash-item dash-hasmenu">
                            <a class="dash-link" href="#">Profile<span class="dash-arrow"><i
                                        data-feather="chevron-right"></i></span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
