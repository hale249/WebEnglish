<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/" target="_blank">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cogs"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ABC English</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(\Request::is('/')) active @endif">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tổng quan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(\Request::is('admin/users') || \Request::is('admin/users/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-user-management" aria-expanded="true" aria-controls="menu-user-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Người dùng</span>
        </a>
        <div id="menu-user-management" class="collapse @if(\Request::is('admin/users') || \Request::is('admin/users/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/users')) active @endif" href="{{ route('admin.users.index') }}">Danh sách người dùng</a>
                <a class="collapse-item @if(\Request::is('admin/users/create')) active @endif" href="{{ route('admin.users.create') }}">Tạo người dùng</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(\Request::is('admin/categories') || \Request::is('admin/categories/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-category-management" aria-expanded="true" aria-controls="menu-category-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Danh mục</span>
        </a>
        <div id="menu-category-management" class="collapse @if(\Request::is('admin/categories') || \Request::is('admin/categories/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/categories')) active @endif" href="{{ route('admin.category.index') }}">Danh mục</a>
                <a class="collapse-item @if(\Request::is('admin/categories/create')) active @endif" href="{{ route('admin.category.create') }}">Tạo danh mục</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(\Request::is('admin/sliders') || \Request::is('admin/sliders/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-slider-management" aria-expanded="true" aria-controls="menu-slider-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Slider</span>
        </a>
        <div id="menu-slider-management" class="collapse @if(\Request::is('admin/sliders') || \Request::is('admin/sliders/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/sliders')) active @endif" href="{{ route('admin.slider.index') }}">Slider</a>
                <a class="collapse-item @if(\Request::is('admin/sliders/create')) active @endif" href="{{ route('admin.slider.create') }}">Tạo Slider</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(\Request::is('admin/blog') || \Request::is('admin/blog/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-blog-management" aria-expanded="true" aria-controls="menu-blog-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Tin tức</span>
        </a>
        <div id="menu-blog-management" class="collapse @if(\Request::is('admin/blog') || \Request::is('admin/blog/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/blog')) active @endif" href="{{ route('admin.blog.index') }}">Danh sách</a>
                <a class="collapse-item @if(\Request::is('admin/blog/create')) active @endif" href="{{ route('admin.blog.create') }}">Tạo mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(\Request::is('admin/video') || \Request::is('admin/video/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-video-management" aria-expanded="true" aria-controls="menu-video-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Học qua video</span>
        </a>
        <div id="menu-video-management" class="collapse @if(\Request::is('admin/video') || \Request::is('admin/video/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/video/category')) active @endif" href="{{ route('admin.video.category.index') }}">Danh mục</a>
                <a class="collapse-item @if(\Request::is('admin/video')) active @endif" href="{{ route('admin.video.index') }}">Danh sách bài học</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(\Request::is('admin/student') || \Request::is('admin/student/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-student-management" aria-expanded="true" aria-controls="menu-student-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Tiếng anh THCS</span>
        </a>
        <div id="menu-student-management" class="collapse @if(\Request::is('admin/book') || \Request::is('admin/book/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/book')) active @endif" href="{{ route('admin.book.index') }}">Sách</a>
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
