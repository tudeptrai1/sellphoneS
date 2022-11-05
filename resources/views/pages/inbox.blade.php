@extends('../layout/' . $layout)

@section('subhead')
    <title>Inbox - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-8">
        <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
            <h2 class="intro-y text-lg font-medium mr-auto mt-2">Inbox</h2>
            <!-- BEGIN: Inbox Menu -->
            <div class="intro-y box bg-primary p-5 mt-6">
                <button type="button" class="btn text-slate-600 dark:text-slate-300 w-full bg-white dark:bg-darkmode-300 dark:border-darkmode-300 mt-1">
                    <i class="w-4 h-4 mr-2" data-lucide="edit-3"></i> Compose
                </button>
                <div class="border-t border-white/10 dark:border-darkmode-400 mt-6 pt-6 text-white">
                    <a href="" class="flex items-center px-3 py-2 rounded-md bg-white/10 dark:bg-darkmode-700 font-medium">
                        <i class="w-4 h-4 mr-2" data-lucide="mail"></i> Inbox
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-lucide="star"></i> Marked
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-lucide="inbox"></i> Draft
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-lucide="send"></i> Sent
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-lucide="trash"></i> Trash
                    </a>
                </div>
                <div class="border-t border-white/10 dark:border-darkmode-400 mt-4 pt-4 text-white">
                    <a href="" class="flex items-center px-3 py-2 truncate">
                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div> Custom Work
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-success rounded-full mr-3"></div> Important Meetings
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div> Work
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div> Design
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-danger rounded-full mr-3"></div> Next Week
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <i class="w-4 h-4 mr-2" data-lucide="plus"></i> Add New Label
                    </a>
                </div>
            </div>
            <!-- END: Inbox Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
            <!-- BEGIN: Inbox Filter -->
            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500" data-lucide="search"></i>
                    <input type="text" class="form-control w-full sm:w-64 box px-10" placeholder="Search mail">
                    <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
                        <i class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown" data-lucide="chevron-down"></i>
                        <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                            <div class="dropdown-content">
                                <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                                    <div class="col-span-6">
                                        <label for="input-filter-1" class="form-label text-xs">From</label>
                                        <input id="input-filter-1" type="text" class="form-control flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-2" class="form-label text-xs">To</label>
                                        <input id="input-filter-2" type="text" class="form-control flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-3" class="form-label text-xs">Subject</label>
                                        <input id="input-filter-3" type="text" class="form-control flex-1" placeholder="Important Meeting">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-4" class="form-label text-xs">Has the Words</label>
                                        <input id="input-filter-4" type="text" class="form-control flex-1" placeholder="Job, Work, Documentation">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-5" class="form-label text-xs">Doesn't Have</label>
                                        <input id="input-filter-5" type="text" class="form-control flex-1" placeholder="Job, Work, Documentation">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-6" class="form-label text-xs">Size</label>
                                        <select id="input-filter-6" class="form-select flex-1">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="col-span-12 flex items-center mt-3">
                                        <button class="btn btn-secondary w-32 ml-auto">Create Filter</button>
                                        <button class="btn btn-primary w-32 ml-2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-auto flex">
                    <button class="btn btn-primary shadow-md mr-2">Start a Video Call</button>
                    <div class="dropdown">
                        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i class="w-4 h-4" data-lucide="plus"></i>
                            </span>
                        </button>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-lucide="user" class="w-4 h-4 mr-2"></i> Contacts
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Inbox Filter -->
            <!-- BEGIN: Inbox Content -->
            <div class="intro-y inbox box mt-5">
                <div class="p-5 flex flex-col-reverse sm:flex-row text-slate-500 border-b border-slate-200/60">
                    <div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-slate-200/60 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                        <input class="form-check-input" type="checkbox">
                        <div class="dropdown ml-1" data-tw-placement="bottom-start">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="chevron-down" class="w-5 h-5"></i>
                            </a>
                            <div class="dropdown-menu w-32">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">All</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">None</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">Read</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">Unread</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">Starred</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">Unstarred</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-lucide="refresh-cw"></i>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-lucide="more-horizontal"></i>
                        </a>
                    </div>
                    <div class="flex items-center sm:ml-auto">
                        <div class="">1 - 50 of 5,238</div>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-lucide="chevron-left"></i>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-lucide="settings"></i>
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto sm:overflow-x-visible">
                    @foreach ($fakers as $faker)
                        <div class="intro-y">
                            <div class="inbox__item{{ $faker['true_false'][0] ? ' inbox__item--active' : '' }} inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                                <div class="flex px-5 py-3">
                                    <div class="w-72 flex-none flex items-center mr-5">
                                        <input class="form-check-input flex-none" type="checkbox" {{ !$faker['true_false'][0] ? 'checked' : '' }}>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400">
                                            <i class="w-4 h-4" data-lucide="star"></i>
                                        </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400">
                                            <i class="w-4 h-4" data-lucide="bookmark"></i>
                                        </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">{{ $faker['users'][0]['name'] }}</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate">
                                        <span class="inbox__item--highlight">{{ $faker['news'][0]['super_short_content'] }}</span> {{ $faker['news'][0]['short_content'] }}
                                    </div>
                                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">{{ $faker['times'][0] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-slate-500">
                    <div>4.41 GB (25%) of 17 GB used Manage</div>
                    <div class="sm:ml-auto mt-2 sm:mt-0">Last account activity: 36 minutes ago</div>
                </div>
            </div>
            <!-- END: Inbox Content -->
        </div>
    </div>
@endsection
