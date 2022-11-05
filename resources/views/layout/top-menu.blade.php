@extends('../layout/main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    @include('../layout/components/mobile-menu')
    <!-- BEGIN: Top Bar -->
    <div class="border-b border-white/[0.08] mt-[2.2rem] md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
        <div class="top-bar-boxed flex items-center">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('build/assets/images/logo.svg') }}">
                <span class="text-white text-lg ml-3">
                    Rubick
                </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                    <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                </div>
                <a class="notification notification--light sm:hidden" href="">
                    <i data-lucide="search" class="notification__icon dark:text-slate-500"></i>
                </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-lucide="inbox"></i>
                                </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-lucide="users"></i>
                                </div>
                                <div class="ml-3">Users & Permissions</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-lucide="credit-card"></i>
                                </div>
                                <div class="ml-3">Transactions Report</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            @foreach (array_slice($fakers, 0, 4) as $faker)
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                                    </div>
                                    <div class="ml-3">{{ $faker['users'][0]['name'] }}</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">{{ $faker['users'][0]['email'] }}</div>
                                </a>
                            @endforeach
                        </div>
                        <div class="search-result__content__title">Products</div>
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $faker['images'][0]) }}">
                                </div>
                                <div class="ml-3">{{ $faker['products'][0]['name'] }}</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">{{ $faker['products'][0]['category'] }}</div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-4 sm:mr-6">
                <div class="dropdown-toggle notification notification--light notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i>
                </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-content">
                        <div class="notification-content__title">Notifications</div>
                        @foreach (array_slice($fakers, 0, 5) as $key => $faker)
                            <div class="cursor-pointer relative flex items-center {{ $key ? 'mt-5' : '' }}">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">{{ $faker['users'][0]['name'] }}</a>
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">{{ $faker['times'][0] }}</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">{{ $faker['news'][0]['short_content'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[9]['photos'][0]) }}">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                        <li class="p-2">
                            <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                            <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                        </li>
                        <li><hr class="dropdown-divider border-white/[0.08]"></li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help
                            </a>
                        </li>
                        <li><hr class="dropdown-divider border-white/[0.08]"></li>
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
        <ul>
            @foreach ($top_menu as $menuKey => $menu)
                <li>
                    <a href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}" class="{{ $first_level_active_index == $menuKey ? 'top-menu top-menu--active' : 'top-menu' }}">
                        <div class="top-menu__icon">
                            <i data-lucide="{{ $menu['icon'] }}"></i>
                        </div>
                        <div class="top-menu__title">
                            {{ $menu['title'] }}
                            @if (isset($menu['sub_menu']))
                                <i data-lucide="chevron-down" class="top-menu__sub-icon"></i>
                            @endif
                        </div>
                    </a>
                    @if (isset($menu['sub_menu']))
                        <ul class="{{ $first_level_active_index == $menuKey ? 'top-menu__sub-open' : '' }}">
                            @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                <li>
                                    <a href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}" class="top-menu">
                                        <div class="top-menu__icon">
                                            <i data-lucide="activity"></i>
                                        </div>
                                        <div class="top-menu__title">
                                            {{ $subMenu['title'] }}
                                            @if (isset($subMenu['sub_menu']))
                                                <i data-lucide="chevron-down" class="top-menu__sub-icon"></i>
                                            @endif
                                        </div>
                                    </a>
                                    @if (isset($subMenu['sub_menu']))
                                        <ul class="{{ $second_level_active_index == $subMenuKey ? 'top-menu__sub-open' : '' }}">
                                            @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                <li>
                                                    <a href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}" class="top-menu">
                                                        <div class="top-menu__icon">
                                                            <i data-lucide="zap"></i>
                                                        </div>
                                                        <div class="top-menu__title">{{ $lastSubMenu['title'] }}</div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
    <!-- END: Top Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        @yield('subcontent')
    </div>
    <!-- END: Content -->
@endsection
