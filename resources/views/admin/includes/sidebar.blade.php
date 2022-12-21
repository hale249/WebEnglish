<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/" target="_blank">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cogs"></i>
        </div>
        <div class="sidebar-brand-text mx-3">123 Tiếng anh</div>
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

    <li class="nav-item @if(\Request::is('admin/skills') || \Request::is('admin/skills/*') || \Request::is('admin/skill/category') || \Request::is('admin/skill/category/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-skills-management" aria-expanded="true" aria-controls="menu-skills-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Học qua kỹ năng</span>
        </a>
        <div id="menu-skills-management" class="collapse @if(\Request::is('admin/skill') || \Request::is('admin/skill/*') || \Request::is('admin/skill/category') || \Request::is('admin/skill/category/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/skill/category')) active @endif" href="{{ route('admin.skill.category.index') }}">Danh mục</a>
                <a class="collapse-item @if(\Request::is('admin/skills')) active @endif" href="{{ route('admin.skill.index') }}">Danh sách kỹ năng</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(\Request::is('admin/video') || \Request::is('admin/video/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-video-management" aria-expanded="true" aria-controls="menu-video-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Học qua video</span>
        </a>
        <div id="menu-video-management" class="collapse @if(\Request::is('admin/video') || \Request::is('admin/video/*') || \Request::is('admin/categories') || \Request::is('admin/categories/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/categories')) active @endif" href="{{ route('admin.category.index') }}">Danh mục</a>
                <a class="collapse-item @if(\Request::is('admin/video')) active @endif" href="{{ route('admin.video.index') }}">Danh sách video</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(\Request::is('admin/music') || \Request::is('admin/music/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-music-management" aria-expanded="true" aria-controls="menu-music-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Học qua bài hát</span>
        </a>
        <div id="menu-music-management" class="collapse @if(\Request::is('admin/music') || \Request::is('admin/music/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/music')) active @endif" href="{{ route('admin.music.index') }}">Danh sách bài hát</a>
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

    <li class="nav-item @if(\Request::is('admin/quiz') || \Request::is('admin/quiz/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-quiz-management" aria-expanded="true" aria-controls="menu-quiz-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Quản lý câu hỏi</span>
        </a>
        <div id="menu-quiz-management" class="collapse @if(\Request::is('admin/quiz') || \Request::is('admin/quiz/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/quiz')) active @endif" href="{{ route('admin.quiz.index') }}">Quản lý câu hỏi</a>
                <a class="collapse-item @if(\Request::is('admin/quiz/create')) active @endif" href="{{ route('admin.quiz.create') }}">Tạo câu hỏi</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(\Request::is('admin/clients') || \Request::is('admin/clients/*')) active @endif">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-client-management" aria-expanded="true" aria-controls="menu-client-management">
            <i class="fas fa-fw fa-users"></i>
            <span>Quản lý học viên</span>
        </a>
        <div id="menu-client-management" class="collapse @if(\Request::is('admin/clients') || \Request::is('admin/clients/*')) show @endif" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if(\Request::is('admin/clients')) active @endif" href="{{ route('admin.clients.index') }}">Danh sách học viên</a>
            </div>
        </div>
    </li>

    @if(\Illuminate\Support\Facades\Auth::user()->role == \App\Helpers\PermissionConstant::ROLE_ADMIN)
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item @if(\Request::is('admin/users') || \Request::is('admin/users/*')) active @endif">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu-user-management" aria-expanded="true" aria-controls="menu-user-management">
                <i class="fas fa-fw fa-users"></i>
                <span>Người dùng quản trị</span>
            </a>
            <div id="menu-user-management" class="collapse @if(\Request::is('admin/users') || \Request::is('admin/users/*')) show @endif" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if(\Request::is('admin/users')) active @endif" href="{{ route('admin.users.index') }}">Danh sách người dùng</a>
                    <a class="collapse-item @if(\Request::is('admin/users/create')) active @endif" href="{{ route('admin.users.create') }}">Tạo người dùng</a>
                </div>
            </div>
        </li>
    @endif

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
