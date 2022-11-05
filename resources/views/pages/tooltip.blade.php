@extends('../layout/' . $layout)

@section('subhead')
    <title>Tooltip - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Tooltip</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Tooltip -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Tooltip</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-tooltip" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-tooltip" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="text-center">
                                            <a href="javascript:;" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Tooltip -->
            <!-- BEGIN: On CLick Tooltip -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">On Click Tooltip</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#on-click-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="on-click-tooltip" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-on-click-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-on-click-tooltip" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="text-center">
                                            <a href="javascript:;" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: On CLick Tooltip -->
            <!-- BEGIN: Light Tooltip -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Light Tooltip</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#light-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="light-tooltip" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-theme="light" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-light-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-light-tooltip" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="text-center">
                                            <a href="javascript:;" data-theme="light" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Light Tooltip -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Custom Content Tooltip -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Custom Tooltip Content</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#custom-content-preview-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="custom-content-preview-tooltip" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Custom Tooltip Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                        <!-- END: Custom Tooltip Toggle -->
                        <!-- BEGIN: Custom Tooltip Content -->
                        <div class="tooltip-content">
                            <div id="custom-content-tooltip" class="relative flex items-center py-1">
                                <div class="w-12 h-12 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium dark:text-slate-200 leading-relaxed">{{ $fakers[0]['users'][0]['name'] }}</div>
                                    <div class="text-slate-500 dark:text-slate-400">Bootstrap 4 HTML Admin Template</div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Custom Tooltip Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-custom-content-preview-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-custom-content-preview-tooltip" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Custom Tooltip Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                        <!-- END: Custom Tooltip Toggle -->
                                        <!-- BEGIN: Custom Tooltip Content -->
                                        <div class="tooltip-content">
                                            <div id="custom-content-tooltip" class="relative flex items-center py-1">
                                                <div class="w-12 h-12 image-fit">
                                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="' . asset('build/assets/images/' . $fakers[0]['photos'][0]) . '">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium dark:text-slate-200 leading-relaxed">' . $fakers[0]['users'][0]['name'] . '</div>
                                                    <div class="text-slate-500 dark:text-slate-400">Bootstrap 4 HTML Admin Template</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Custom Tooltip Content -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Custom Content Tooltip -->
            <!-- BEGIN: Chart Tooltip -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Chart Tooltip</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#chart-preview-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="chart-preview-tooltip" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Custom Tooltip Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-theme="light" data-tooltip-content="#chart-tooltip" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                        <!-- END: Custom Tooltip Toggle -->
                        <!-- BEGIN: Custom Tooltip Content -->
                        <div class="tooltip-content">
                            <div id="chart-tooltip" class="py-1">
                                <div class="font-medium dark:text-slate-200">Net Worth</div>
                                <div class="flex items-center mt-2 sm:mt-0">
                                    <div class="mr-2 w-20 flex dark:text-slate-500 dark:text-slate-400">
                                        USP: <span class="ml-auto font-medium text-success">+23%</span>
                                    </div>
                                    <div class="w-24 sm:w-32 lg:w-56">
                                        <div class="h-[30px]">
                                            <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Custom Tooltip Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-chart-preview-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-chart-preview-tooltip" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Custom Tooltip Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-theme="light" data-tooltip-content="#chart-tooltip" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                        <!-- END: Custom Tooltip Toggle -->
                                        <!-- BEGIN: Custom Tooltip Content -->
                                        <div class="tooltip-content">
                                            <div id="chart-tooltip" class="py-1">
                                                <div class="font-medium dark:text-slate-200">Net Worth</div>
                                                <div class="flex items-center mt-2 sm:mt-0">
                                                    <div class="mr-2 w-20 flex dark:text-slate-500 dark:text-slate-400">
                                                        USP: <span class="ml-auto font-medium text-success">+23%</span>
                                                    </div>
                                                    <div class="w-24 sm:w-32 lg:w-56">
                                                        <div class="h-[30px]">
                                                            <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Custom Tooltip Content -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Chart Tooltip -->
        </div>
    </div>
@endsection
