@extends('../layout/' . $layout)

@section('subhead')
    <title>Slide Over - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Slide Over</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Blank Slide Over -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Blank Slide Over</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#blank-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="blank-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Slide Over Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#basic-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                        </div>
                        <!-- END: Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <div id="basic-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Blank Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome blank slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-blank-slide-over" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-blank-slide-over" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Slide Over Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#basic-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                                        </div>
                                        <!-- END: Slide Over Toggle -->
                                        <!-- BEGIN: Slide Over Content -->
                                        <div id="basic-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Blank Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome blank slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Slide Over Content -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Blank Slide Over -->
            <!-- BEGIN: Slide Over Size -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Slide Over Size</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#slide-over-size" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="slide-over-size" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Small Slide Over Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#small-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Small Slide Over</a>
                            <!-- END: Small Slide Over Toggle -->
                            <!-- BEGIN: Medium Slide Over Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#medium-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Medium Slide Over</a>
                            <!-- END: Medium Slide Over Toggle -->
                            <!-- BEGIN: Large Slide Over Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Large Slide Over</a>
                            <!-- END: Large Slide Over Toggle -->
                            <!-- BEGIN: Super Large Slide Over Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Superlarge Slide Over</a>
                            <!-- END: Super Large Slide Over Toggle -->
                        </div>
                        <!-- BEGIN: Small Slide Over Content -->
                        <div id="small-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Small Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome small slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Small Slide Over Content -->
                        <!-- BEGIN: Medium Slide Over Content -->
                        <div id="medium-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Medium Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome medium slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Medium Slide Over Content -->
                        <!-- BEGIN: Large Slide Over Content -->
                        <div id="large-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Large Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome large slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Large Slide Over Content -->
                        <!-- BEGIN: Super Large Slide Over Content -->
                        <div id="superlarge-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Superlarge Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome superlarge slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Super Large Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-slide-over-size" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-slide-over-size" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="text-center">
                                            <!-- BEGIN: Small Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#small-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Small Slide Over</a>
                                            <!-- END: Small Slide Over Toggle -->
                                            <!-- BEGIN: Medium Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#medium-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Medium Slide Over</a>
                                            <!-- END: Medium Slide Over Toggle -->
                                            <!-- BEGIN: Large Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Large Slide Over</a>
                                            <!-- END: Large Slide Over Toggle -->
                                            <!-- BEGIN: Super Large Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Superlarge Slide Over</a>
                                            <!-- END: Super Large Slide Over Toggle -->
                                        </div>
                                        <!-- BEGIN: Small Slide Over Content -->
                                        <div id="small-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Small Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome small slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Small Slide Over Content -->
                                        <!-- BEGIN: Medium Slide Over Content -->
                                        <div id="medium-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Medium Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome medium slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Medium Slide Over Content -->
                                        <!-- BEGIN: Large Slide Over Content -->
                                        <div id="large-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Large Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome large slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Large Slide Over Content -->
                                        <!-- BEGIN: Super Large Slide Over Content -->
                                        <div id="superlarge-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Superlarge Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome superlarge slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Super Large Slide Over Content -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Slide Over Size -->
            <!-- BEGIN: Slide Over With Close Button -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Slide Over With Close Button</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#button-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="button-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#button-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="button-slide-over-preview" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <a data-tw-dismiss="modal" href="javascript:;">
                                        <i data-lucide="x" class="w-8 h-8 text-slate-400"></i>
                                    </a>
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Slide Over With Close Button</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome slide over with close button!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-button-slide-over" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-button-slide-over" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#button-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="button-slide-over-preview" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <a data-tw-dismiss="modal" href="javascript:;">
                                                        <i data-lucide="x" class="w-8 h-8 text-slate-400"></i>
                                                    </a>
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Slide Over With Close Button</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome slide over with close button!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Slide Over With Close Button -->
            <!-- BEGIN: Overlapping Slide Over -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#overlapping-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="overlapping-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Slide Over Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#overlapping-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                        </div>
                        <!-- END: Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <div id="overlapping-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                                    </div>
                                    <div class="modal-body px-5 py-10">
                                        <div class="text-center">
                                            <div class="mb-5">Click button bellow to show overlapping slide over!</div>
                                            <!-- BEGIN: Overlapping Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#next-overlapping-slide-over-preview" class="btn btn-primary">Show Overlapping Slide Over</a>
                                            <!-- END: Overlapping Slide Over Toggle -->
                                        </div>
                                        <!-- BEGIN: Overlapping Slide Over Content -->
                                        <div id="next-overlapping-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        This is totally awesome overlapping slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Overlapping Slide Over Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-overlapping-slide-over" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-overlapping-slide-over" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Slide Over Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#overlapping-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                                        </div>
                                        <!-- END: Slide Over Toggle -->
                                        <!-- BEGIN: Slide Over Content -->
                                        <div id="overlapping-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body px-5 py-10">
                                                        <div class="text-center">
                                                            <div class="mb-5">Click button bellow to show overlapping slide over!</div>
                                                            <!-- BEGIN: Overlapping Slide Over Toggle -->
                                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#next-overlapping-slide-over-preview" class="btn btn-primary">Show Overlapping Slide Over</a>
                                                            <!-- END: Overlapping Slide Over Toggle -->
                                                        </div>
                                                        <!-- BEGIN: Overlapping Slide Over Content -->
                                                        <div id="next-overlapping-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-5">
                                                                        <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        This is totally awesome overlapping slide over!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END: Overlapping Slide Over Content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Slide Over Content -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Overlapping Slide Over -->
            <!-- BEGIN: Header & Footer Slide Over -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Header & Footer Slide Over</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#header-footer-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="header-footer-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Slide Over Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                        </div>
                        <!-- END: Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <div id="header-footer-slide-over-preview" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <a data-tw-dismiss="modal" href="javascript:;">
                                        <i data-lucide="x" class="w-8 h-8 text-slate-400"></i>
                                    </a>
                                    <!-- BEGIN: Slide Over Header -->
                                    <div class="modal-header">
                                        <h2 class="font-medium text-base mr-auto">Broadcast Message</h2>
                                        <button class="btn btn-outline-secondary hidden sm:flex">
                                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Docs
                                        </button>
                                        <div class="dropdown sm:hidden">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                            </a>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="javascript:;" class="dropdown-item">
                                                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Slide Over Header -->
                                    <!-- BEGIN: Slide Over Body -->
                                    <div class="modal-body">
                                        <div>
                                            <label for="modal-form-1" class="form-label">From</label>
                                            <input id="modal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-2" class="form-label">To</label>
                                            <input id="modal-form-2" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-3" class="form-label">Subject</label>
                                            <input id="modal-form-3" type="text" class="form-control" placeholder="Important Meeting">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-4" class="form-label">Has the Words</label>
                                            <input id="modal-form-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-5" class="form-label">Doesn't Have</label>
                                            <input id="modal-form-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-6" class="form-label">Size</label>
                                            <select id="modal-form-6" class="form-select">
                                                <option>10</option>
                                                <option>25</option>
                                                <option>35</option>
                                                <option>50</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- END: Slide Over Body -->
                                    <!-- BEGIN: Slide Over Footer -->
                                    <div class="modal-footer w-full absolute bottom-0">
                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                        <button type="button" class="btn btn-primary w-20">Send</button>
                                    </div>
                                    <!-- END: Slide Over Footer -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header-footer-slide-over" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-header-footer-slide-over" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Slide Over Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                                        </div>
                                        <!-- END: Slide Over Toggle -->
                                        <!-- BEGIN: Slide Over Content -->
                                        <div id="header-footer-slide-over-preview" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <a data-tw-dismiss="modal" href="javascript:;">
                                                        <i data-lucide="x" class="w-8 h-8 text-slate-400"></i>
                                                    </a>
                                                    <!-- BEGIN: Slide Over Header -->
                                                    <div class="modal-header">
                                                        <h2 class="font-medium text-base mr-auto">Broadcast Message</h2>
                                                        <button class="btn btn-outline-secondary hidden sm:flex">
                                                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                        </button>
                                                        <div class="dropdown sm:hidden">
                                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                                            </a>
                                                            <div class="dropdown-menu w-40">
                                                                <ul class="dropdown-content">
                                                                    <li>
                                                                        <a href="javascript:;" class="dropdown-item">
                                                                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Slide Over Header -->
                                                    <!-- BEGIN: Slide Over Body -->
                                                    <div class="modal-body">
                                                        <div>
                                                            <label for="modal-form-1" class="form-label">From</label>
                                                            <input id="modal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-2" class="form-label">To</label>
                                                            <input id="modal-form-2" type="text" class="form-control" placeholder="example@gmail.com">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-3" class="form-label">Subject</label>
                                                            <input id="modal-form-3" type="text" class="form-control" placeholder="Important Meeting">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-4" class="form-label">Has the Words</label>
                                                            <input id="modal-form-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-5" class="form-label">Doesn\'t Have</label>
                                                            <input id="modal-form-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-6" class="form-label">Size</label>
                                                            <select id="modal-form-6" class="form-select">
                                                                <option>10</option>
                                                                <option>25</option>
                                                                <option>35</option>
                                                                <option>50</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- END: Slide Over Body -->
                                                    <!-- BEGIN: Slide Over Footer -->
                                                    <div class="modal-footer w-full absolute bottom-0">
                                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                                        <button type="button" class="btn btn-primary w-20">Send</button>
                                                    </div>
                                                    <!-- END: Slide Over Footer -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Slide Over Content -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Header & Footer Slide Over -->
            <!-- BEGIN: Programmatically Show/Hide Slide Over -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Programmatically Show/Hide Slide Over</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#programmatically-show-hide-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="programmatically-show-hide-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Show Slide Over Toggle -->
                        <div class="text-center">
                            <a id="programmatically-show-slide-over" href="javascript:;" class="btn btn-primary mr-1 mb-2">Show Slide Over</a>
                        </div>
                        <!-- END: Show Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <div id="programmatically-slide-over" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Programmatically Show/Hide Slide Over</h2>
                                    </div>
                                    <div class="modal-body p-10 text-center">
                                        <!-- BEGIN: Hide Slide Over Toggle -->
                                        <a id="programmatically-hide-slide-over" href="javascript:;" class="btn btn-primary mr-1">Hide Slide Over</a>
                                        <!-- END: Hide Slide Over Toggle -->
                                        <!-- BEGIN: Toggle Slide Over Toggle -->
                                        <a id="programmatically-toggle-slide-over" href="javascript:;" class="btn btn-primary mr-1 mt-2 sm:mt-0">Toggle Slide Over</a>
                                        <!-- END: Toggle Slide Over Toggle -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-programmatically-show-hide-slide-over-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-programmatically-show-hide-slide-over-html" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Show Slide Over Toggle -->
                                        <div class="text-center">
                                            <a id="programmatically-show-slide-over" href="javascript:;" class="btn btn-primary mr-1 mb-2">Show Slide Over</a>
                                        </div>
                                        <!-- END: Show Slide Over Toggle -->
                                        <!-- BEGIN: Slide Over Content -->
                                        <div id="programmatically-slide-over" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Programmatically Show/Hide Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body p-10 text-center">
                                                        <!-- BEGIN: Hide Slide Over Toggle -->
                                                        <a id="programmatically-hide-slide-over" href="javascript:;" class="btn btn-primary mr-1">Hide Slide Over</a>
                                                        <!-- END: Hide Slide Over Toggle -->
                                                        <!-- BEGIN: Toggle Slide Over Toggle -->
                                                        <a id="programmatically-toggle-slide-over" href="javascript:;" class="btn btn-primary mr-1 mt-2 sm:mt-0">Toggle Slide Over</a>
                                                        <!-- END: Toggle Slide Over Toggle -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Slide Over Content -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-programmatically-show-hide-slide-over-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-programmatically-show-hide-slide-over-js" class="source-preview">
                                <code class="javascript">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        // Show slide over
                                        const el = document.querySelector("#programmatically-slide-over");
                                        const slideOver = tailwind.Modal.getOrCreateInstance(el);
                                        slideOver.show();

                                        // Hide slide over
                                        const el = document.querySelector("#programmatically-slide-over");
                                        const slideOver = tailwind.Modal.getOrCreateInstance(el);
                                        slideOver.hide();

                                        // Toggle slide over
                                        const el = document.querySelector("#programmatically-slide-over");
                                        const slideOver = tailwind.Modal.getOrCreateInstance(el);
                                        slideOver.toggle();
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Programmatically Show/Hide Slide Over -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Methods -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Methods</h2>
                </div>
                <div class="p-5">
                    <div class="text-base font-medium">Get or Create Instance</div>
                    <div class="mt-2">Static method which allows you to get the slide over instance associated with a DOM element, or create a new one in case it wasn’t initialized.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const mySlideOver = tailwind.Modal.getOrCreateInstance(document.querySelector("#mySlideOver"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Get Instance</div>
                    <div class="mt-2">Static method which allows you to get the slide over instance associated with a DOM element.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const mySlideOver = tailwind.Modal.getInstance(document.querySelector("#mySlideOver"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Hide</div>
                    <div class="mt-2">Manually hides a slide over. Returns to the caller before the slide over has actually been hidden (i.e. before the <span class="text-red-500">hidden.tw.modal</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                mySlideOver.hide();
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Show</div>
                    <div class="mt-2">Manually opens a slide over. Returns to the caller before the slide over has actually been shown (i.e. before the <span class="text-red-500">shown.tw.modal</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                mySlideOver.show();
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Toggle</div>
                    <div class="mt-2">Manually toggles a slide over. Returns to the caller before the slide over has actually been shown or hidden (i.e. before the <span class="text-red-500">shown.tw.modal</span> or <span class="text-red-500">hidden.tw.modal</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                mySlideOver.toggle();
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
            <!-- END: Methods -->
            <!-- BEGIN: Methods -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Events</h2>
                </div>
                <div class="p-5">
                    Midone’s slide over class exposes a few events for hooking into slide over functionality. All slide over events are fired at the slide over itself (i.e. at the <span class="text-red-500">&lt;div class="modal modal-slide-over"&gt;</span>).
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Event type</th>
                                <th class="whitespace-nowrap">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-top text-red-500">show.tw.modal</td>
                                <td class="align-top">This event fires immediately when the <span class="text-red-500">show</span> instance method is called.</td>
                            </tr>
                            <tr>
                                <td class="align-top text-red-500">shown.tw.modal</td>
                                <td class="align-top">This event is fired when the slide over has been made visible to the user (will wait for CSS transitions to complete)</td>
                            </tr>
                            <tr>
                                <td class="align-top text-red-500">hide.tw.modal</td>
                                <td class="align-top">This event is fired immediately when the <span class="text-red-500">hide</span> instance method has been called.</td>
                            </tr>
                            <tr>
                                <td class="align-top text-red-500">hidden.tw.modal</td>
                                <td class="align-top">This event is fired when the slide over has finished being hidden from the user (will wait for CSS transitions to complete).</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const mySlideOverEl = document.getElementById('mySlideOver')
                                mySlideOverEl.addEventListener('hidden.tw.modal', function (event) {
                                    // do something...
                                })
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
            <!-- END: Methods -->
        </div>
    </div>
@endsection
