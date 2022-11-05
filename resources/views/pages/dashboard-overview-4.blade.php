@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Enigma - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 xl:col-span-9 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="report-box-2 intro-y mt-5">
                        <div class="box grid grid-cols-12">
                            <div class="col-span-12 lg:col-span-4 px-8 py-12 flex flex-col justify-center">
                                <i data-lucide="pie-chart" class="w-10 h-10 text-pending"></i>
                                <div class="justify-start flex items-center text-slate-600 dark:text-slate-300 mt-12">
                                    My Total Assets
                                    <i data-lucide="alert-circle" class="tooltip w-4 h-4 ml-1.5" title="Total value of your sales: $158.409.416"></i>
                                </div>
                                <div class="flex items-center justify-start mt-4">
                                    <div class="relative text-2xl font-medium pl-3 ml-0.5">
                                        <span class="absolute text-xl font-medium top-0 left-0 -ml-0.5">$</span> 1,413,102.02
                                    </div>
                                    <a class="text-slate-500 ml-4" href="">
                                        <i data-lucide="refresh-ccw" class="w-4 h-4"></i>
                                    </a>
                                </div>
                                <div class="mt-4 text-slate-500 text-xs">Last updated 1 hour ago</div>
                                <button class="btn btn-outline-secondary relative justify-start rounded-full mt-12">
                                    Download Reports
                                    <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="col-span-12 lg:col-span-8 p-8 border-t lg:border-t-0 lg:border-l border-slate-200 dark:border-darkmode-300 border-dashed">
                                <ul
                                    class="
                                        nav
                                        nav-pills
                                        w-60
                                        border
                                        border-slate-300
                                        dark:border-darkmode-300
                                        border-dashed
                                        rounded-md
                                        mx-auto
                                        p-1
                                        mb-8
                                    "
                                    role="tablist"
                                >
                                    <li id="weekly-report-tab" class="nav-item flex-1" role="presentation">
                                        <button
                                            class="nav-link w-full py-1.5 px-2 active"
                                            data-tw-toggle="pill"
                                            data-tw-target="#weekly-report"
                                            type="button"
                                            role="tab"
                                            aria-controls="weekly-report"
                                            aria-selected="true"
                                        >
                                            Weekly
                                        </button>
                                    </li>
                                    <li id="monthly-report-tab" class="nav-item flex-1" role="presentation">
                                        <button
                                            class="nav-link w-full py-1.5 px-2"
                                            data-tw-toggle="pill"
                                            data-tw-target="#monthly-report"
                                            type="button"
                                            role="tab"
                                            aria-selected="false"
                                        >
                                            Monthly
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content px-5 pb-5">
                                    <div class="tab-pane active grid grid-cols-12 gap-y-8 gap-x-10" id="weekly-report" role="tabpanel" aria-labelledby="weekly-report-tab">
                                        <div class="col-span-6 sm:col-span-6 md:col-span-4">
                                            <div class="text-slate-500">Unpaid Loan</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">4.501</div>
                                                <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2" title="2% Lower than last month">
                                                    2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                            <div class="text-slate-500">Active Partner</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">2</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                            <div class="text-slate-500">Paid Installment</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">$72.000</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                            <div class="text-slate-500">Disbursement</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">$54.000</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                            <div class="text-slate-500">Success Payment</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">2.500</div>
                                                <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="52% Higher than last month">
                                                    52% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                            <div class="text-slate-500">Unpaid Loan</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">$72.000</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                            <div class="text-slate-500">Posted Campaign</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">4.501</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                            <div class="text-slate-500">Social Media</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">2</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                            <div class="text-slate-500">Net Margin</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">$72.000</div>
                                                <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="49% Higher than last month">
                                                    49% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3 row-start-4 lg:row-start-3 xl:row-start-auto mt-6 xl:mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="report-box-2 before:hidden xl:before:block intro-y mt-5">
                        <div class="box p-5">
                            <div class="mt-3">
                                <div class="h-[196px]">
                                    <canvas id="report-donut-chart"></canvas>
                                </div>
                            </div>
                            <div class="w-52 sm:w-auto mx-auto mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span class="truncate">17 - 30 Years old</span>
                                    <span class="font-medium ml-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span class="truncate">31 - 50 Years old</span>
                                    <span class="font-medium ml-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                    <span class="truncate">>= 50 Years old</span>
                                    <span class="font-medium ml-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 xl:col-span-8 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Official Store</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-lucide="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="form-control sm:w-56 box pl-10" placeholder="Filter by city">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                        <div class="report-maps mt-5 bg-slate-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/build/assets/json/location.json"></div>
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 lg:col-span-8 xl:col-span-4 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Best Sellers</h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                </div>
                            </div>
                        @endforeach
                        <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: Visitors -->
                <div class="col-span-12 md:col-span-6 lg:col-span-4 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Visitors</h2>
                        <select class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </select>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex text-slate-500 border-b border-slate-200 dark:border-darkmode-300 border-dashed pb-3 mb-3">
                            <div>Parameters</div>
                            <div class="ml-auto">Report Values</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Site Visits</div>
                                <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2" title="49% Higher than last month">
                                    -2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                </div>
                            </div>
                            <div class="ml-auto">4.500</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Unique Visitors</div>
                            </div>
                            <div class="ml-auto">21</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Page Views</div>
                                <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="49% Higher than last month">
                                    5% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                </div>
                            </div>
                            <div class="ml-auto">500</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Bounce Rate</div>
                            </div>
                            <div class="ml-auto">3.420</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>% New Visits</div>
                                <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2" title="49% Higher than last month">
                                    -9% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                </div>
                            </div>
                            <div class="ml-auto">32%</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Average Tim On Site</div>
                            </div>
                            <div class="ml-auto">1.5M</div>
                        </div>
                        <button class="btn btn-outline-secondary w-full border-slate-300 dark:border-darkmode-300 border-dashed relative justify-start mb-2">
                            <span class="truncate mr-5">View Full Report</span>
                            <span class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <!-- END: Visitors -->
                <!-- BEGIN: Most Viewed Pages -->
                <div class="col-span-12 md:col-span-6 lg:col-span-4 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Most Viewed Pages</h2>
                        <select class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </select>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex text-slate-500 border-b border-slate-200 dark:border-darkmode-300 border-dashed pb-3 mb-3">
                            <div>Page Names</div>
                            <div class="ml-auto">Page Views</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/letz-lara…review/2653</div>
                            <div class="ml-auto">472</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/midone…review/1674</div>
                            <div class="ml-auto">294</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/profile…review/46789</div>
                            <div class="ml-auto">500</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/profile…review/24357</div>
                            <div class="ml-auto">3.420</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/letz-lara…review/2653</div>
                            <div class="ml-auto">83</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/icewall…review/1674</div>
                            <div class="ml-auto">21</div>
                        </div>
                        <button class="btn btn-outline-secondary w-full border-slate-300 dark:border-darkmode-300 border-dashed relative justify-start mb-2">
                            <span class="truncate mr-5">View Full Report</span>
                            <span class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <!-- END: Most Viewed Pages -->
                <!-- BEGIN: Top Search Items -->
                <div class="col-span-12 md:col-span-6 lg:col-span-4 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Top Search Items</h2>
                        <select class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </select>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex text-slate-500 border-b border-slate-200 dark:border-darkmode-300 border-dashed pb-3 mb-3">
                            <div>Keywords</div>
                            <div class="ml-auto">Searched</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Laravel 8</div>
                            <div class="ml-auto">200</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Eloquent</div>
                            <div class="ml-auto">50</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>CKEditor Source Build</div>
                            <div class="ml-auto">31</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Midone Docs</div>
                            <div class="ml-auto">405</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Vue 3 Release Date</div>
                            <div class="ml-auto">201</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Install Vite Vue</div>
                            <div class="ml-auto">42</div>
                        </div>
                        <button class="btn btn-outline-secondary w-full border-slate-300 dark:border-darkmode-300 border-dashed relative justify-start mb-2">
                            <span class="truncate mr-5">View Full Report</span>
                            <span class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <!-- END: Top Search Items -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Products</h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                            </button>
                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                            </button>
                        </div>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">IMAGES</th>
                                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                                    <th class="text-center whitespace-nowrap">STOCK</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{ asset('build/assets/images/' . $faker['images'][0]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{ asset('build/assets/images/' . $faker['images'][1]) }}" title="Uploaded at {{ $faker['dates'][1] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{ asset('build/assets/images/' . $faker['images'][2]) }}" title="Uploaded at {{ $faker['dates'][2] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $faker['products'][0]['category'] }}</div>
                                        </td>
                                        <td class="text-center">{{ $faker['stocks'][0] }}</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="">
                                                    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                                </a>
                                                <a class="flex items-center text-danger" href="">
                                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-lucide="chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-lucide="chevron-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-lucide="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
                            <a href="" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[9]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[9]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[8]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[8]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[0]['products'][0]['name'] }}">
                                                <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="{{ asset('build/assets/images/' . $fakers[8]['images'][0]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[1]['products'][0]['name'] }}">
                                                <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="{{ asset('build/assets/images/' . $fakers[8]['images'][1]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[2]['products'][0]['name'] }}">
                                                <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="{{ asset('build/assets/images/' . $fakers[8]['images'][2]) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[7]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[7]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[7]['products'][0]['name'] }}</a> price and description</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[6]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[6]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[6]['products'][0]['name'] }}</a> description</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                        </div>
                                        <div class="{{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">{{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}</div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Schedules -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Schedules</h2>
                            <a href="" class="ml-auto text-primary truncate flex items-center">
                                <i data-lucide="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
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
                                </div>
                                <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">VueJs Frontend Development</span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
@endsection
