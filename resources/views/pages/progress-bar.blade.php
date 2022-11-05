@extends('../layout/' . $layout)

@section('subhead')
    <title>Progress Bar - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Progressbar</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Basic Progressbar -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Progressbar</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-progressbar" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-progressbar" class="p-5">
                    <div class="preview">
                        <div class="progress">
                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-progressbar" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-progressbar" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="progress">
                                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Progressbar with Label</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#progressbar-label" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="progressbar-label" class="p-5">
                    <div class="preview">
                        <div class="progress h-4">
                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <div class="progress h-4 mt-3">
                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                        <div class="progress h-4 mt-3">
                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-progressbar-label" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-progressbar-label" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="progress h-4">
                                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress h-4 mt-3">
                                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">60%</div>
                                        </div>
                                        <div class="progress h-4 mt-3">
                                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">70%</div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Progressbar -->
        <!-- BEGIN: Progressbar Height -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Progressbar Height</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#progressbar-height" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="progressbar-height" class="p-5">
                    <div class="preview">
                        <div class="progress h-1">
                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress h-3 mt-3">
                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-progressbar-height" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-progressbar-height" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="progress h-1">
                                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress h-3 mt-3">
                                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Progressbar Color</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#progressbar-color" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="progressbar-color" class="p-5">
                    <div class="preview">
                        <div class="progress">
                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-3/4 bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-3/4 bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-progressbar-color" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-progressbar-color" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="progress">
                                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-3/4 bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-3/4 bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Progressbar Height -->
    </div>
@endsection
