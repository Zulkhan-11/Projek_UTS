<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if (request()->is('dokter*'))
            <li class="nav-item">
                <a href="/dokter/periksa" class="nav-link {{ request()->is('dokter/periksa') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-stethoscope"></i>
                    <p>Periksa</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dokter/obat" class="nav-link {{ request()->is('dokter/obat') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-pills"></i>
                    <p>Obat</p>
                </a>
            </li>
            <li class="nav-item">
    <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin ingin logout?');">
        @csrf
        <button type="submit" class="nav-link btn btn-link text-left" style="color: #c2c7d0; width: 100%;">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </button>
    </form>
</li>

        @else
            @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
        @endif
    </ul>

</aside>
