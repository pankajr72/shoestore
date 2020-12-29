<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('imgs/download.png') }}"
             alt="AdminLTE Logo"
             class="user-image img-circle elevation-2" width=50px>
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.adminmenu')
            </ul>
        </nav>
    </div>

</aside>
