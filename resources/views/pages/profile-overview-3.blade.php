@extends('../layout/' . $layout)

@section('subhead')
    <title>Profile - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5 lg:mt-0">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ $fakers[0]['users'][0]['name'] }}</div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                        </a>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content">
                                <li>
                                    <h6 class="dropdown-header">Export Options</h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-lucide="activity" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-lucide="box" class="w-4 h-4 mr-2"></i>
                                        Indonesia
                                        <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-lucide="layout" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-lucide="sidebar" class="w-4 h-4 mr-2"></i> Indonesia
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="flex p-1">
                                        <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Personal Information
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-lucide="box" class="w-4 h-4 mr-2"></i> Account Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-lucide="settings" class="w-4 h-4 mr-2"></i> User Settings
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Email Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-lucide="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Social Networks
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Tax Information
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                </div>
            </div>
            <div class="intro-y box p-5 bg-primary text-white mt-5">
                <div class="flex items-center">
                    <div class="font-medium text-lg">Important Update</div>
                    <div class="text-xs bg-white dark:bg-primary dark:text-white text-slate-700 px-1 rounded-md ml-auto">New</div>
                </div>
                <div class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                <div class="font-medium flex mt-5">
                    <button type="button" class="btn py-1 px-2 border-white text-white dark:text-slate-300 dark:bg-darkmode-400 dark:border-darkmode-400">Take Action</button>
                    <button type="button" class="btn py-1 px-2 border-transparent text-white dark:border-transparent ml-auto">Dismiss</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $fakers[2]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Announcement -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Announcement</h2>
                        <button data-carousel="announcement" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-lucide="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="announcement" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="tiny-slider py-5" id="announcement">
                        <div class="px-5">
                            <div class="font-medium text-lg">Midone Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. <br><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s.</div>
                            <div class="flex items-center mt-5">
                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div>
                                <button class="btn btn-secondary ml-auto">View Details</button>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Midone Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. <br><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s.</div>
                            <div class="flex items-center mt-5">
                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div>
                                <button class="btn btn-secondary ml-auto">View Details</button>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Midone Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. <br><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s.</div>
                            <div class="flex items-center mt-5">
                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div>
                                <button class="btn btn-secondary ml-auto">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Announcement -->
                <!-- BEGIN: Projects -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Projects</h2>
                        <button data-carousel="projects" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-lucide="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="projects" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="tiny-slider py-5" id="projects">
                        <div class="px-5">
                            <div class="font-medium text-lg">Midone Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Midone Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Midone Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Projects -->
                <!-- BEGIN: Today Schedules -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Today Schedules</h2>
                        <button data-carousel="today-schedule" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-lucide="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="today-schedule" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="tiny-slider py-5" id="today-schedule">
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500">
                                    <i data-lucide="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market
                                </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500">
                                    <i data-lucide="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market
                                </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500">
                                    <i data-lucide="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market
                                </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Today Schedules -->
                <!-- BEGIN: Top Products -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Top Products</h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="edit-2" class="w-4 h-4 mr-2"></i> New Chat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <ul class="nav nav-boxed-tabs justify-center flex-col sm:flex-row" role="tablist">
                            <li id="top-products-laravel-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-center w-full sm:w-20 mb-2 sm:mb-0 sm:mx-2 py-2 px-0 active"
                                    data-tw-target="#top-products-laravel"
                                    aria-controls="top-products-laravel"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    <i data-lucide="box" class="block w-6 h-6 mb-2 mx-auto"></i> Laravel
                                </a>
                            </li>
                            <li id="top-products-symfony-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-center w-full sm:w-20 mb-2 sm:mb-0 sm:mx-2 py-2 px-0"
                                    data-tw-target="#top-products-symfony"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    <i data-lucide="inbox" class="block w-6 h-6 mb-2 mx-auto"></i> Symfony
                                </a>
                            </li>
                            <li id="top-products-bootstrap-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-center w-full sm:w-20 mb-2 sm:mb-0 sm:mx-2 py-2 px-0"
                                    data-tw-target="#top-products-bootstrap"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    <i data-lucide="activity" class="block w-6 h-6 mb-2 mx-auto"></i> Bootstrap
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-8">
                            <div id="top-products-laravel" class="tab-pane active" role="tabpanel" aria-labelledby="top-products-laravel-tab">
                                <div class="flex flex-col sm:flex-row items-center">
                                    <div class="mr-auto">
                                        <a href="" class="font-medium">Wordpress Template</a>
                                        <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                                    </div>
                                    <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                        <div class="bg-success/20 text-success rounded px-2 mr-5">+20%</div>
                                        <div class="progress h-1 mt-2 sm:w-40">
                                            <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center mt-5">
                                    <div class="mr-auto">
                                        <a href="" class="font-medium">Laravel Template</a>
                                        <div class="text-slate-500 mt-1">PHP, Mysql</div>
                                    </div>
                                    <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                        <div class="bg-success/20 text-success rounded px-2 mr-5">+55%</div>
                                        <div class="progress h-1 mt-2 sm:w-40">
                                            <div class="progress-bar w-2/3 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center mt-5">
                                    <div class="mr-auto">
                                        <a href="" class="font-medium">Tailwind HTML Template</a>
                                        <div class="text-slate-500 mt-1">HTML, CSS, JS</div>
                                    </div>
                                    <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                        <div class="bg-success/20 text-success rounded px-2 mr-5">+40%</div>
                                        <div class="progress h-1 mt-2 sm:w-40">
                                            <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Top Products -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#work-in-progress-new"
                                    aria-controls="work-in-progress-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#work-in-progress-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Review</div>
                                        <div>70%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-4/5 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#latest-tasks-new"
                                    aria-controls="latest-tasks-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#latest-tasks-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">11:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: General Statistics -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">General Statistics</h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block sm:hidden" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <button class="dropdown-toggle btn btn-outline-secondary font-normal hidden sm:flex" aria-expanded="false" data-tw-toggle="dropdown">
                                Export <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i>
                            </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <div class="dropdown-header">Export Tools</div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="external-link" class="w-4 h-4 mr-2"></i> Excel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> CSV
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="archive" class="w-4 h-4 mr-2"></i> PDF
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row items-center">
                            <div class="flex flex-wrap sm:flex-nowrap mr-auto">
                                <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span>Author Sales</span>
                                </div>
                                <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span>Product Profit</span>
                                </div>
                            </div>
                            <div class="dropdown mt-3 sm:mt-0 mr-auto sm:mr-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown">
                                    Filter by Month <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li>
                                            <a href="" class="dropdown-item">January</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">February</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">March</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">June</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">July</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart mt-8">
                            <div class="h-[212px]">
                                <canvas id="report-line-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Statistics -->
            </div>
        </div>
    </div>
@endsection
