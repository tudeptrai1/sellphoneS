@extends('../layout/' . $layout)

@section('subhead')
    <title>Add New Post - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Add New Post</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <div class="dropdown mr-2">
                <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
                    English <i class="w-4 h-4 ml-2" data-lucide="chevron-down"></i>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">English</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">Indonesian</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" class="btn box mr-2 flex items-center ml-auto sm:ml-0">
                <i class="w-4 h-4 mr-2" data-lucide="eye"></i> Preview
            </button>
            <div class="dropdown">
                <button class="dropdown-toggle btn btn-primary shadow-md flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
                    Save <i class="w-4 h-4 ml-2" data-lucide="chevron-down"></i>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> As New Post
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> As Draft
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Word
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <input type="text" class="intro-y form-control py-3 px-4 box pr-10" placeholder="Title">
            <div class="post intro-y overflow-hidden box mt-5">
                <ul class="post__tabs nav nav-tabs flex-col sm:flex-row bg-slate-200 dark:bg-darkmode-800" role="tablist">
                    <li class="nav-item">
                        <button title="Fill in the article content" data-tw-toggle="tab" data-tw-target="#content" class="nav-link tooltip w-full sm:w-40 py-4 active" id="content-tab" role="tab" aria-controls="content" aria-selected="true">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Content
                        </button>
                    </li>
                    <li class="nav-item">
                        <button title="Adjust the meta title" data-tw-toggle="tab" data-tw-target="#meta-title" class="nav-link tooltip w-full sm:w-40 py-4" id="meta-title-tab" role="tab" aria-selected="false">
                            <i data-lucide="code" class="w-4 h-4 mr-2"></i> Meta Title
                        </button>
                    </li>
                    <li class="nav-item">
                        <button title="Use search keywords" data-tw-toggle="tab" data-tw-target="#keywords" class="nav-link tooltip w-full sm:w-40 py-4" id="keywords-tab" role="tab" aria-selected="false">
                            <i data-lucide="align-left" class="w-4 h-4 mr-2"></i> Keywords
                        </button>
                    </li>
                </ul>
                <div class="post__content tab-content">
                    <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Text Content
                            </div>
                            <div class="mt-5">
                                <div class="editor">
                                    <p>Content of the editor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Caption & Images
                            </div>
                            <div class="mt-5">
                                <div>
                                    <label for="post-form-7" class="form-label">Caption</label>
                                    <input id="post-form-7" type="text" class="form-control" placeholder="Write caption">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">Upload Image</label>
                                    <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                        <div class="flex flex-wrap px-4">
                                            @foreach (array_slice($fakers, 0, 4) as $faker)
                                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                    <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $faker['images'][0]) }}">
                                                    <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                                        <i data-lucide="x" class="w-4 h-4"></i>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                            <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop
                                            <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div>
                    <label class="form-label">Written By</label>
                    <div class="dropdown">
                        <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-darkmode-800 dark:border-darkmode-800 flex items-center justify-start" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <div class="w-6 h-6 image-fit mr-3">
                                <img class="rounded" alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="truncate">{{ $fakers[0]['users'][0]['name'] }}</div>
                            <i class="w-4 h-4 ml-auto" data-lucide="chevron-down"></i>
                        </div>
                        <div class="dropdown-menu w-full">
                            <ul class="dropdown-content">
                                @foreach (array_slice($fakers, 0, 5) as $faker)
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="w-6 h-6 absolute image-fit mr-3">
                                                <img class="rounded" alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                                            </div>
                                            <div class="ml-8 pl-1">{{ $faker['users'][0]['name'] }}</div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="post-form-2" class="form-label">Post Date</label>
                    <input type="text" class="datepicker form-control" id="post-form-2" data-single-mode="true">
                </div>
                <div class="mt-3">
                    <label for="post-form-3" class="form-label">Categories</label>
                    <select data-placeholder="Select categories" class="tom-select w-full" id="post-form-3" multiple>
                        <option value="1" selected>Horror</option>
                        <option value="2">Sci-fi</option>
                        <option value="3" selected>Action</option>
                        <option value="4">Drama</option>
                        <option value="5">Comedy</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="post-form-4" class="form-label">Tags</label>
                    <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="post-form-4" multiple>
                        <option value="1" selected>Leonardo DiCaprio</option>
                        <option value="2">Johnny Deep</option>
                        <option value="3" selected>Robert Downey, Jr</option>
                        <option value="4">Samuel L. Jackson</option>
                        <option value="5">Morgan Freeman</option>
                    </select>
                </div>
                <div class="form-check form-switch flex flex-col items-start mt-3">
                    <label for="post-form-5" class="form-check-label ml-0 mb-2">Published</label>
                    <input id="post-form-5" class="form-check-input" type="checkbox">
                </div>
                <div class="form-check form-switch flex flex-col items-start mt-3">
                    <label for="post-form-6" class="form-check-label ml-0 mb-2">Show Author Name</label>
                    <input id="post-form-6" class="form-check-input" type="checkbox">
                </div>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>
@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection
