@extends('../layout/' . $layout)

@section('subhead')
    <title>Tom Select - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Tom Select</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Select -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Select</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-select" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-select" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Basic Select -->
                        <div>
                            <label>Basic</label>
                            <div class="mt-2">
                                <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                    <option value="1">Leonardo DiCaprio</option>
                                    <option value="2">Johnny Deep</option>
                                    <option value="3">Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option value="5">Morgan Freeman</option>
                                </select>
                            </div>
                        </div>
                        <!-- END: Basic Select -->
                        <!-- BEGIN: Nested Select -->
                        <div class="mt-3">
                            <label>Nested</label>
                            <div class="mt-2">
                                <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                    <optgroup label="American Actors">
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option value="2">Johnny Deep</option>
                                        <option value="3">Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </optgroup>
                                    <optgroup label="American Actresses">
                                        <option value="1">Scarlett Johansson</option>
                                        <option value="2">Jessica Alba</option>
                                        <option value="3">Jennifer Lawrence</option>
                                        <option value="4">Emma Stone</option>
                                        <option value="5">Angelina Jolie</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!-- END: Nested Select -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-select" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-select" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Basic Select -->
                                        <div>
                                            <label>Basic</label>
                                            <div class="mt-2">
                                                <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                                    <option value="1">Leonardo DiCaprio</option>
                                                    <option value="2">Johnny Deep</option>
                                                    <option value="3">Robert Downey, Jr</option>
                                                    <option value="4">Samuel L. Jackson</option>
                                                    <option value="5">Morgan Freeman</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- END: Basic Select -->
                                        <!-- BEGIN: Nested Select -->
                                        <div class="mt-3">
                                            <label>Nested</label>
                                            <div class="mt-2">
                                                <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                                    <optgroup label="American Actors">
                                                        <option value="1">Leonardo DiCaprio</option>
                                                        <option value="2">Johnny Deep</option>
                                                        <option value="3">Robert Downey, Jr</option>
                                                        <option value="4">Samuel L. Jackson</option>
                                                        <option value="5">Morgan Freeman</option>
                                                    </optgroup>
                                                    <optgroup label="American Actresses">
                                                        <option value="1">Scarlett Johansson</option>
                                                        <option value="2">Jessica Alba</option>
                                                        <option value="3">Jennifer Lawrence</option>
                                                        <option value="4">Emma Stone</option>
                                                        <option value="5">Angelina Jolie</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- END: Nested Select -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Select -->
            <!-- BEGIN: Multiple Select -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Multiple Select</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#multiple-select" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="multiple-select" class="p-5">
                    <div class="preview">
                        <select data-placeholder="Select your favorite actors" class="tom-select w-full" multiple>
                            <option value="1" selected>Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3" selected>Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-multiple-select" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-multiple-select" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <select data-placeholder="Select your favorite actors" class="tom-select w-full" multiple>
                                            <option value="1" selected>Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3" selected>Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </select>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Multiple Select -->
            <!-- BEGIN: Header -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Header</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#header" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="header" class="p-5">
                    <div class="preview">
                        <select data-placeholder="Select your favorite actors" data-header="Actors" class="tom-select w-full" multiple>
                            <option value="1">Leonardo DiCaprio</option>
                            <option value="2" selected>Johnny Deep</option>
                            <option value="3" selected>Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5" selected>Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-header" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <select data-placeholder="Select your favorite actors" data-header="Actors" class="tom-select w-full" multiple>
                                            <option value="1">Leonardo DiCaprio</option>
                                            <option value="2" selected>Johnny Deep</option>
                                            <option value="3" selected>Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5" selected>Morgan Freeman</option>
                                        </select>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Header -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input Group -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Input Group</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#input-group" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input-group" class="p-5">
                    <div class="preview">
                        <div class="flex">
                            <div class="z-30 rounded-l w-10 flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400 -mr-1">@</div>
                            <select class="tom-select w-full">
                                <option value="1">Leonardo DiCaprio</option>
                                <option value="2">Johnny Deep</option>
                                <option value="3">Robert Downey, Jr</option>
                                <option value="4">Samuel L. Jackson</option>
                                <option value="5">Morgan Freeman</option>
                            </select>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-group" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input-group" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="flex">
                                            <div class="z-30 rounded-l w-10 flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400 -mr-1">@</div>
                                            <select class="tom-select w-full">
                                                <option value="1">Leonardo DiCaprio</option>
                                                <option value="2">Johnny Deep</option>
                                                <option value="3">Robert Downey, Jr</option>
                                                <option value="4">Samuel L. Jackson</option>
                                                <option value="5">Morgan Freeman</option>
                                            </select>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Group -->
            <!-- BEGIN: Disabled -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Disabled</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#disabled" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="disabled" class="p-5">
                    <div class="preview">
                        <select class="tom-select w-full" disabled>
                            <option value="1">Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3">Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-disabled" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-disabled" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <select class="tom-select w-full" disabled>
                                            <option value="1">Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3">Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </select>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Disabled -->
            <!-- BEGIN: Disabled Option -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Disabled Option</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#disabled-option" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="disabled-option" class="p-5">
                    <div class="preview">
                        <select class="tom-select w-full">
                            <option value="1" disabled>Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3">Robert Downey, Jr</option>
                            <option value="4" disabled>Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-disabled-option" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-disabled-option" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <select class="tom-select w-full">
                                            <option value="1" disabled>Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3">Robert Downey, Jr</option>
                                            <option value="4" disabled>Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </select>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Disabled Option -->
        </div>
    </div>
@endsection
