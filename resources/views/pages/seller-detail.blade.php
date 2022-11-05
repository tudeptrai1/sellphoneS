@extends('../layout/' . $layout)

@section('subhead')
    <title>Seller Detail - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Seller Details</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print</button>
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
                                <i data-lucide="file" class="w-4 h-4 mr-2"></i> Export Word
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file" class="w-4 h-4 mr-2"></i> Export PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Seller Details -->
    <div class="intro-y grid grid-cols-11 gap-5 mt-5">
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">User Details</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> More Details
                    </a>
                </div>
                <div class="flex items-center">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Unique ID: <a href="" class="underline decoration-dotted ml-1">SLR-20220217-2053411933</a>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="user" class="w-4 h-4 text-slate-500 mr-2"></i> Name: <a href="" class="underline decoration-dotted ml-1">{{ $fakers[0]['users'][0]['name'] }}</a>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Phone Number: +71828273732
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Address: 260 W. Storm Street New York, NY 10025.
                </div>
                <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
                    <button type="button" class="btn btn-outline-secondary w-full py-1 px-2">Message User</button>
                </div>
            </div>
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Store Details</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> More Details
                    </a>
                </div>
                <div class="flex items-center">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Unique ID: <a href="" class="underline decoration-dotted ml-1">STR-2053411933-20220217</a>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="shopping-bag" class="w-4 h-4 text-slate-500 mr-2"></i> Name: <a href="" class="underline decoration-dotted ml-1">Themeforest</a>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Phone Number: +71828273732
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Address: 260 W. Storm Street New York, NY 10025.
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Status: <span class="bg-success/20 text-success rounded px-2 ml-1">Active</span>
                </div>
                <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
                    <button type="button" class="btn btn-outline-secondary w-full py-1 px-2">Change Status</button>
                </div>
            </div>
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Transaction Reports</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> More Details
                    </a>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Avg. Daily Transactions: <div class="ml-auto">$1,500.00</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Avg. Monthly Transactions: <div class="ml-auto">$42,500.00</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Avg. Annually Transactions: <div class="ml-auto">$1,012,500.00</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="star" class="w-4 h-4 text-slate-500 mr-2"></i> Average Rating: <div class="ml-auto">4.9+</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="album" class="w-4 h-4 text-slate-500 mr-2"></i> Total Products: <div class="ml-auto">7,120</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="archive" class="w-4 h-4 text-slate-500 mr-2"></i> Total Transactions: <div class="ml-auto">1.512.001</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="monitor" class="w-4 h-4 text-slate-500 mr-2"></i> Active Disputes: <div class="ml-auto">1</div>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
            <div class="grid grid-cols-12 gap-5">
                @foreach (array_slice($fakers, 0, 9) as $faker)
                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-4">
                        <div class="box">
                            <div class="p-5">
                                <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                    <img alt="Midone - HTML Admin Template" class="rounded-md" src="{{ asset('build/assets/images/' . $faker['images'][0]) }}">
                                    @if ($faker['true_false'][0])
                                        <span class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                                    @endif
                                    <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                        <a href="" class="block font-medium text-base">{{ $faker['products'][0]['name'] }}</a>
                                        <span class="text-white/90 text-xs mt-3">{{ $faker['products'][0]['category'] }}</span>
                                    </div>
                                </div>
                                <div class="text-slate-600 dark:text-slate-500 mt-5">
                                    <div class="flex items-center">
                                        <i data-lucide="link" class="w-4 h-4 mr-2"></i> Price: ${{ $faker['totals'][0] }}
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <i data-lucide="layers" class="w-4 h-4 mr-2"></i> Remaining Stock: {{ $faker['stocks'][0] }}
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Status: {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <a class="flex items-center text-primary mr-auto" href="javascript:;">
                                    <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Preview
                                </a>
                                <a class="flex items-center mr-3" href="javascript:;">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- BEGIN: Pagination -->
            <div class="intro-y col-span-11 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-6">
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
            <!-- END: Pagination -->
        </div>
    </div>
    <!-- END: Seller Details -->
@endsection
