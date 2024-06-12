<!-- Main Sidebar Container -->
<aside class="main-sidebar bg-light-primary elevation-4 ">
    <!-- Brand Logo -->
    <div>
        <a href="{{ route('landingpage') }}" class="brand-link">
            <img src="{{ asset('/img/k.png') }}" alt="AdminLTE Logo" class="brand-image img-circle ">
            <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">HOME</li>

                {{-- Role Admin --}}
                @if (Auth::check() && Auth::user()->role_id == '1')
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <img class="nav-icon" src="{{ asset('img/dashboard.png') }}" alt="logo">
                            <p>Dashboard</p>
                        </a>
                    </li>
                @endif

                {{-- Role User --}}
                @if (Auth::check() && Auth::user()->role_id == '2')
                    <li class="nav-item">
                        <a href="{{ route('user.dashboard') }}" class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
                            <img class="nav-icon" src="{{ asset('img/dashboard.png') }}" alt="logo">
                            <p>Dashboard</p>
                        </a>
                    </li>
                @endif

                <li class="nav-header">INTERFACE</li>

                {{-- Role Admin --}}
                @if (Auth::check() && Auth::user()->role_id == '1')
                    <li class="nav-item {{ request()->is('admin/aruskas*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/aruskas*') ? 'active' : '' }}">
                            <img class="nav-icon" src="{{ asset('img/chart.png') }}" alt="logo">
                            <p>
                                Arus Kas
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview bg-light-primary">
                            <li class="nav-item">
                                <a href="{{ route('aruskas.index') }}" class="nav-link {{ request()->routeIs('aruskas.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Catatan Keuangan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.kategori.index') }}" class="nav-link {{ request()->routeIs('admin.kategori.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- Role User --}}
                @if (Auth::check() && Auth::user()->role_id == '2')
                    <li class="nav-item">
                        <a href="{{ route('aruskas.index') }}" class="nav-link {{ request()->routeIs('aruskas.index') ? 'active' : '' }}">
                            <img class="nav-icon" src="{{ asset('img/chart.png') }}" alt="logo">
                            <p>Arus Kas</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="{{ route('labarugi.index') }}" class="nav-link {{ request()->routeIs('labarugi.index') ? 'active' : '' }}">
                        <img class="nav-icon" src="{{ asset('img/laba.png') }}" alt="logo">
                        <p>Laba/Rugi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('perubahanmodal.index') }}" class="nav-link {{ request()->routeIs('perubahanmodal.index') ? 'active' : '' }}">
                        <img class="nav-icon" src="{{ asset('img/bar-chart.png') }}" alt="logo">
                        <p>Perubahan Modal</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('neraca.index') }}" class="nav-link {{ request()->routeIs('neraca.index') ? 'active' : '' }}">
                        <img class="nav-icon" src="{{ asset('img/neraca.png') }}" alt="logo">
                        <p>Neraca</p>
                    </a>
                </li>

                <li>
                    <hr class="solid" style="border-top: 1px solid #b1a9a9;">
                </li>

                {{-- Role Admin --}}
                @if (Auth::check() && Auth::user()->role_id == '1')
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
                            <img class="nav-icon" src="{{ asset('img/user.png') }}" alt="logo">
                            <p>Manajemen Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.contact.index') }}" class="nav-link {{ request()->routeIs('admin.contact.index') ? 'active' : '' }}">
                            <img class="nav-icon" src="{{ asset('img/email.png') }}" alt="logo">
                            <p>Contact Messages</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                        @csrf
                    </form>
                    <a href="javascript:void(0)" class="nav-link" onclick="$('#logout-form').submit();">
                        <img class="nav-icon" src="{{ asset('img/logout.png') }}" alt="logo">
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
