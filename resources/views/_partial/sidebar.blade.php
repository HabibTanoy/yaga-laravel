<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" /> <span
                    class="logo-name">{{ env("APP_NAME") }}</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown @if (Route::is('home')) active @endif">
                <a href="{{ route('home') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Slider Upload</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="{{route('slider-view')}}">Slider</a></li>
                </ul>
            </li>
            {{-- THIS IS FOR DUMMY ONLY, CHANGE IT AS YOU NEED --}}
            <li class="dropdown @if (Route::is('home.*')) active @endif" style="visibility: hidden;">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-capsules"></i>
                    <span>Home</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
