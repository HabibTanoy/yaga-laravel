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
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Sliders</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('slider.index')) active @endif"><a class="nav-link" href="{{route('slider.index')}}">All Slider</a></li>
                    <li class="@if(Request::is('slider.create')) active @endif"><a class="nav-link" href="{{route('slider.create')}}">Add Slider</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Services</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('service.index')) active @endif"><a class="nav-link" href="{{route('service.index')}}">All Services</a></li>
                    <li class="@if(Request::is('service.create')) active @endif"><a class="nav-link" href="{{route('service.create')}}">Add Service</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Client Feedback</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('client-feedback.index')) active @endif"><a class="nav-link" href="{{route('client-feedback.index')}}">All Feedback</a></li>
                    <li class="@if(Request::is('client-feedback.create')) active @endif"><a class="nav-link" href="{{route('client-feedback.create')}}">Add Feedback</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Employee</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('employee.index')) active @endif"><a class="nav-link" href="{{route('employee.index')}}">All Employee</a></li>
                    <li class="@if(Request::is('employee.create')) active @endif"><a class="nav-link" href="{{route('employee.create')}}">Add Employee</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Config</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('get_in_touch')) active @endif"><a class="nav-link" href="{{route('get_in_touch')}}">Get In Touch</a></li>
                    <li class="@if(Request::is('project')) active @endif"><a class="nav-link" href="{{route('project')}}">Project Count</a></li>
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
