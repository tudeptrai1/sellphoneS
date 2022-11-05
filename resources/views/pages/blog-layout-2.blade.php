@extends('../layout/' . $layout)

@section('subhead')
    <title>Blog - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Blog Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Add New Post</button>
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
                                <i data-lucide="share-2" class="w-4 h-4 mr-2"></i> Share Post
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="download" class="w-4 h-4 mr-2"></i> Download Post
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->
        @foreach (array_slice($fakers, 0, 6) as $faker)
            <div class="intro-y col-span-12 md:col-span-6 box">
                <div class="h-[320px] before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black/90 before:to-black/10 image-fit">
                    <img alt="Midone - HTML Admin Template" class="rounded-t-md" src="{{ asset('build/assets/images/' . $faker['images'][0]) }}">
                    <div class="absolute w-full flex items-center px-5 pt-6 z-10">
                        <div class="w-10 h-10 flex-none image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                        </div>
                        <div class="ml-3 text-white mr-auto">
                            <a href="" class="font-medium">{{ $faker['users'][0]['name'] }}</a>
                            <div class="text-xs mt-0.5">{{ $faker['formatted_times'][0] }}</div>
                        </div>
                        <div class="dropdown ml-3">
                            <a href="javascript:;" class="bg-white/20 dropdown-toggle w-8 h-8 flex items-center justify-center rounded-full" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-vertical" class="w-4 h-4 text-white"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="edit-2" class="w-4 h-4 mr-2"></i> Edit Post
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                        <span class="bg-white/20 px-2 py-1 rounded">{{ $faker['products'][0]['category'] }}</span>
                        <a href="" class="block font-medium text-xl mt-3">{{ $faker['news'][0]['title'] }}</a>
                    </div>
                </div>
                <div class="p-5 text-slate-600 dark:text-slate-500">{{ $faker['news'][0]['short_content'] }}</div>
                <div class="flex items-center px-5 py-3 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500 mr-2 tooltip" title="Bookmark">
                        <i data-lucide="bookmark" class="w-3 h-3"></i>
                    </a>
                    <div class="intro-x flex mr-2">
                        <div class="intro-x w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}" title="{{ $faker['users'][0]['name'] }}">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="Midone - HTML Admin Template" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('build/assets/images/' . $faker['photos'][1]) }}" title="{{ $faker['users'][1]['name'] }}">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="Midone - HTML Admin Template" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('build/assets/images/' . $faker['photos'][2]) }}" title="{{ $faker['users'][2]['name'] }}">
                        </div>
                    </div>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300 ml-auto tooltip" title="Share">
                        <i data-lucide="share-2" class="w-3 h-3"></i>
                    </a>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-primary text-white ml-2 tooltip" title="Download PDF">
                        <i data-lucide="share" class="w-3 h-3"></i>
                    </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-full flex text-slate-500 text-xs sm:text-sm">
                        <div class="mr-2">
                            Comments: <span class="font-medium">{{ $faker['totals'][0] }}</span>
                        </div>
                        <div class="mr-2">
                            Views: <span class="font-medium">{{ $faker['totals'][1] }}k</span>
                        </div>
                        <div class="ml-auto">
                            Likes: <span class="font-medium">{{ $faker['totals'][2] }}k</span>
                        </div>
                    </div>
                    <div class="w-full flex items-center mt-3">
                        <div class="w-8 h-8 flex-none image-fit mr-3">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                        </div>
                        <div class="flex-1 relative text-slate-600 dark:text-slate-200">
                            <input type="text" class="form-control form-control-rounded border-transparent bg-slate-100 pr-10" placeholder="Post a comment...">
                            <i data-lucide="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagiantion -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
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
        <!-- END: Pagiantion -->
    </div>
@endsection
