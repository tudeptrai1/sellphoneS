@extends('../layout/' . $layout)

@section('subhead')
    <title>Alert - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Alert</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Alert -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-secondary show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-success show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-warning show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-pending show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-danger show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-dark show mb-2" role="alert">Awesome simple alert</div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-secondary show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-success show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-warning show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-pending show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-danger show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-dark show mb-2" role="alert">Awesome simple alert</div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Alert -->
            <!-- BEGIN: Icon's Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Icon Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#icon-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="icon-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-secondary show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-success show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-warning show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-pending show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-danger show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-dark show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-icon-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-secondary show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-success show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-warning show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-pending show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-danger show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-dark show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Icon's Alert -->
            <!-- BEGIN: Additional Content Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Additional Content Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#additional-content-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="additional-content-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-secondary show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-success show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-warning show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-pending show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-danger show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-dark show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-additional-content-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-additional-content-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-secondary show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-success show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-warning show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-pending show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-danger show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-dark show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Additional Content Alert -->
            <!-- BEGIN: Icon & Dismiss Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Icon & Dismiss Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#icon-dismiss-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="icon-dismiss-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-warning alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-pending alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-dark alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-dismiss-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-icon-dismiss-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-warning alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-pending alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-dark alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Icon & Dismiss Alert -->
            <!-- BEGIN: Outline Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Outline Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#outline-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="outline-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-outline-primary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-secondary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-success alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-warning alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-pending alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-danger alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-dark alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-outline-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-outline-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-outline-primary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-secondary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-success alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-warning alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-pending alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-danger alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-dark alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Outline Alert -->
            <!-- BEGIN: Soft Color Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Soft Color Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#softcolor-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="softcolor-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-secondary-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-success-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-warning-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-pending-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-dark-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-softcolor-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-softcolor-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-secondary-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-success-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-warning-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-pending-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-dark-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Soft Color Alert -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Methods -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Methods</h2>
                </div>
                <div class="p-5">
                    <div class="text-base font-medium">Get or Create Instance</div>
                    <div class="mt-2">Static method which allows you to get the alert instance associated with a DOM element, or create a new one in case it wasn’t initialized.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myAlert = tailwind.Alert.getOrCreateInstance(document.querySelector("#myAlert"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Get Instance</div>
                    <div class="mt-2">Static method which allows you to get the alert instance associated with a DOM element.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myAlert = tailwind.Alert.getInstance(document.querySelector("#myAlert"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Hide</div>
                    <div class="mt-2">Manually hides an alert. Returns to the caller before the alert has actually been hidden (i.e. before the <span class="text-red-500">hidden.tw.alert</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myAlert.hide();
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Show</div>
                    <div class="mt-2">Manually opens an alert. Returns to the caller before the alert has actually been shown (i.e. before the <span class="text-red-500">shown.tw.alert</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myAlert.show();
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Toggle</div>
                    <div class="mt-2">Manually toggles an alert. Returns to the caller before the alert has actually been shown or hidden (i.e. before the <span class="text-red-500">shown.tw.alert</span> or <span class="text-red-500">hidden.tw.alert</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myAlert.toggle();
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
            <!-- END: Methods -->
            <!-- BEGIN: Events -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Events</h2>
                </div>
                <div class="p-5">
                    Midone’s alert class exposes a few events for hooking into alert functionality. All alert events are fired at the alert itself (i.e. at the <span class="text-red-500">&lt;div class="alert"&gt;</span>).
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Event type</th>
                                <th class="whitespace-nowrap">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-top text-red-500">show.tw.alert</td>
                                <td class="align-top">This event fires immediately when the <span class="text-red-500">show</span> instance method is called.</td>
                            </tr>
                            <tr>
                                <td class="align-top text-red-500">hide.tw.alert</td>
                                <td class="align-top">This event is fired immediately when the <span class="text-red-500">hide</span> instance method has been called.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myAlertEl = document.getElementById('myAlert')
                                myAlertEl.addEventListener('hidden.tw.alert', function (event) {
                                    // do something...
                                })
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
            <!-- END: Events -->
        </div>
    </div>
@endsection
