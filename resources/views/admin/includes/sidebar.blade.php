<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/" target="_blank">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cogs"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(\Request::is('/')) active @endif">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>@lang('menus.admin.main_menu.dashboard')</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        @lang('menus.admin.main_menu.system')
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(\Request::is('admin/users') || \Request::is('admin/users/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-user-management" aria-expanded="true" aria-controls="menu-user-management">
            <i class="fas fa-fw fa-users"></i>
            <span>@lang('menus.admin.main_menu.users.title')</span>
        </a>
        <div id="menu-user-management" class="collapse @if(\Request::is('admin/users') || \Request::is('admin/users/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/users')) active @endif" href="{{ route('admin.users.index') }}">@lang('menus.admin.main_menu.users.list_all')</a>
                <a class="collapse-item @if(\Request::is('admin/users/create')) active @endif" href="{{ route('admin.users.create') }}">@lang('menus.admin.main_menu.users.create')</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(\Request::is('admin/categories') || \Request::is('admin/categories/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-category-management" aria-expanded="true" aria-controls="menu-category-management">
            <i class="fas fa-fw fa-users"></i>
            <span>@lang('menus.admin.main_menu.category.title')</span>
        </a>
        <div id="menu-category-management" class="collapse @if(\Request::is('admin/categories') || \Request::is('admin/categories/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/categories')) active @endif" href="{{ route('admin.category.index') }}">@lang('menus.admin.main_menu.category.list_all')</a>
                <a class="collapse-item @if(\Request::is('admin/categories/create')) active @endif" href="{{ route('admin.category.create') }}">@lang('menus.admin.main_menu.category.create')</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(\Request::is('admin/products') || \Request::is('admin/products/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-product-management" aria-expanded="true" aria-controls="menu-product-management">
            <i class="fas fa-fw fa-users"></i>
            <span>@lang('menus.admin.main_menu.product.title')</span>
        </a>
        <div id="menu-product-management" class="collapse @if(\Request::is('admin/products') || \Request::is('admin/products/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/products')) active @endif" href="{{ route('admin.product.index') }}">@lang('menus.admin.main_menu.product.list_all')</a>
                <a class="collapse-item @if(\Request::is('admin/products/create')) active @endif" href="{{ route('admin.product.create') }}">@lang('menus.admin.main_menu.product.create')</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
