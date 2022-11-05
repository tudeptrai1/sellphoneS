@extends('../layout/' . $layout)

@section('subhead')
    <title>Calendar - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Calendar</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print Schedule</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="share-2" class="w-4 h-4 mr-2"></i> Share
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
    <div class="grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Calendar Side Menu -->
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <div class="box p-5 intro-y">
                <button type="button" class="btn btn-primary w-full mt-2">
                    <i class="w-4 h-4 mr-2" data-lucide="edit-3"></i> Add New Schedule
                </button>
                <div class="border-t border-b border-slate-200/60 dark:border-darkmode-400 mt-6 mb-5 py-3" id="calendar-events">
                    <div class="relative">
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">VueJS Amsterdam</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span class="event__days">2</span> Days <span class="mx-1">•</span> 10:00 AM
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href="">
                            <i data-lucide="edit" class="w-4 h-4 text-slate-500"></i>
                        </a>
                    </div>
                    <div class="relative">
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">Vue Fes Japan 2019</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span class="event__days">3</span> Days <span class="mx-1">•</span> 07:00 AM
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href="">
                            <i data-lucide="edit" class="w-4 h-4 text-slate-500"></i>
                        </a>
                    </div>
                    <div class="relative">
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">Laracon 2021</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span class="event__days">4</span> Days <span class="mx-1">•</span> 11:00 AM
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href="">
                            <i data-lucide="edit" class="w-4 h-4 text-slate-500"></i>
                        </a>
                    </div>
                    <div class="text-slate-500 p-3 text-center hidden" id="calendar-no-events">No events yet</div>
                </div>
                <div class="form-check form-switch flex">
                    <label class="form-check-label" for="checkbox-events">Remove after drop</label>
                    <input class="show-code form-check-input ml-auto" type="checkbox" id="checkbox-events">
                </div>
            </div>
            <div class="box p-5 intro-y mt-5">
                <div class="flex">
                    <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i>
                    <div class="font-medium text-base mx-auto">April</div>
                    <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i>
                </div>
                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                    <div class="font-medium">Su</div>
                    <div class="font-medium">Mo</div>
                    <div class="font-medium">Tu</div>
                    <div class="font-medium">We</div>
                    <div class="font-medium">Th</div>
                    <div class="font-medium">Fr</div>
                    <div class="font-medium">Sa</div>
                    <div class="py-0.5 rounded relative text-slate-500">29</div>
                    <div class="py-0.5 rounded relative text-slate-500">30</div>
                    <div class="py-0.5 rounded relative text-slate-500">31</div>
                    <div class="py-0.5 rounded relative">1</div>
                    <div class="py-0.5 rounded relative">2</div>
                    <div class="py-0.5 rounded relative">3</div>
                    <div class="py-0.5 rounded relative">4</div>
                    <div class="py-0.5 rounded relative">5</div>
                    <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                    <div class="py-0.5 rounded relative">7</div>
                    <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                    <div class="py-0.5 rounded relative">9</div>
                    <div class="py-0.5 rounded relative">10</div>
                    <div class="py-0.5 rounded relative">11</div>
                    <div class="py-0.5 rounded relative">12</div>
                    <div class="py-0.5 rounded relative">13</div>
                    <div class="py-0.5 rounded relative">14</div>
                    <div class="py-0.5 rounded relative">15</div>
                    <div class="py-0.5 rounded relative">16</div>
                    <div class="py-0.5 rounded relative">17</div>
                    <div class="py-0.5 rounded relative">18</div>
                    <div class="py-0.5 rounded relative">19</div>
                    <div class="py-0.5 rounded relative">20</div>
                    <div class="py-0.5 rounded relative">21</div>
                    <div class="py-0.5 rounded relative">22</div>
                    <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                    <div class="py-0.5 rounded relative">24</div>
                    <div class="py-0.5 rounded relative">25</div>
                    <div class="py-0.5 rounded relative">26</div>
                    <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                    <div class="py-0.5 rounded relative">28</div>
                    <div class="py-0.5 rounded relative">29</div>
                    <div class="py-0.5 rounded relative">30</div>
                    <div class="py-0.5 rounded relative text-slate-500">1</div>
                    <div class="py-0.5 rounded relative text-slate-500">2</div>
                    <div class="py-0.5 rounded relative text-slate-500">3</div>
                    <div class="py-0.5 rounded relative text-slate-500">4</div>
                    <div class="py-0.5 rounded relative text-slate-500">5</div>
                    <div class="py-0.5 rounded relative text-slate-500">6</div>
                    <div class="py-0.5 rounded relative text-slate-500">7</div>
                    <div class="py-0.5 rounded relative text-slate-500">8</div>
                    <div class="py-0.5 rounded relative text-slate-500">9</div>
                </div>
                <div class="border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5">
                    <div class="flex items-center">
                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                        <span class="truncate">Independence Day</span>
                        <div class="h-px flex-1 border border-r border-dashed border-slate-200 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">23th</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                        <span class="truncate">Memorial Day</span>
                        <div class="h-px flex-1 border border-r border-dashed border-slate-200 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">10th</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Calendar Side Menu -->
        <!-- BEGIN: Calendar Content -->
        <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
            <div class="box p-5">
                <div class="full-calendar" id="calendar"></div>
            </div>
        </div>
        <!-- END: Calendar Content -->
    </div>
@endsection
