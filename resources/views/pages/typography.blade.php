@extends('../layout/' . $layout)

@section('subhead')
    <title>Typography - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Typography</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: HEADING -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Heading</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#heading" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="heading" class="p-5">
                    <div class="preview">
                        <div>
                            <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
                            <h2 class="text-3xl font-medium leading-none mt-3">h2. Heading 2</h2>
                            <h3 class="text-2xl font-medium leading-none mt-3">h3. Heading 3</h3>
                            <h4 class="text-xl font-medium leading-none mt-3">h4. Heading 4</h4>
                            <h5 class="text-lg font-medium leading-none mt-3">h5. Heading 5</h5>
                            <h6 class="font-medium leading-none mt-3">h6. Heading 6</h6>
                        </div>
                        <div class="mt-5">
                            <h1 class="text-4xl text-primary font-medium leading-none">h1. Heading 1</h1>
                            <h2 class="text-3xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">h2. Heading 2</h2>
                            <h3 class="text-2xl text-success font-medium leading-none mt-3">h3. Heading 3</h3>
                            <h4 class="text-xl text-warning font-medium leading-none mt-3">h4. Heading 4</h4>
                            <h5 class="text-lg text-danger font-medium leading-none mt-3">h5. Heading 5</h5>
                            <h6 class="text-slate-500 font-medium leading-none mt-3">h6. Heading 6</h6>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-heading" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-heading" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div>
                                            <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
                                            <h2 class="text-3xl font-medium leading-none mt-3">h2. Heading 2</h2>
                                            <h3 class="text-2xl font-medium leading-none mt-3">h3. Heading 3</h3>
                                            <h4 class="text-xl font-medium leading-none mt-3">h4. Heading 4</h4>
                                            <h5 class="text-lg font-medium leading-none mt-3">h5. Heading 5</h5>
                                            <h6 class="font-medium leading-none mt-3">h6. Heading 6</h6>
                                        </div>
                                        <div class="mt-5">
                                            <h1 class="text-4xl text-primary font-medium leading-none">h1. Heading 1</h1>
                                            <h2 class="text-3xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">h2. Heading 2</h2>
                                            <h3 class="text-2xl text-success font-medium leading-none mt-3">h3. Heading 3</h3>
                                            <h4 class="text-xl text-warning font-medium leading-none mt-3">h4. Heading 4</h4>
                                            <h5 class="text-lg text-danger font-medium leading-none mt-3">h5. Heading 5</h5>
                                            <h6 class="text-slate-500 font-medium leading-none mt-3">h6. Heading 6</h6>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: HEADING -->
            <!-- BEGIN: TEXT SETTINGS -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Text Settings</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#text-settings" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="text-settings" class="p-5">
                    <div class="preview">
                        <div>
                            <div class="font-normal">Example text</div>
                            <div class="font-medium">Example medium text</div>
                            <div class="font-semibold">Example semibold text</div>
                            <div class="font-bold">Example bolder text</div>
                            <div class="font-extrabold">Example boldest text</div>
                        </div>
                        <div class="mt-5">
                            <div class="uppercase">Example uppercase text</div>
                            <div class="lowercase">Example lowercase text</div>
                            <div class="capitalize">Example capitalized text</div>
                            <div class="normal-case">Example cursive text</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-text-settings" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-text-settings" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div>
                                            <div class="font-normal">Example text</div>
                                            <div class="font-medium">Example medium text</div>
                                            <div class="font-semibold">Example semibold text</div>
                                            <div class="font-bold">Example bolder text</div>
                                            <div class="font-extrabold">Example boldest text</div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="uppercase">Example uppercase text</div>
                                            <div class="lowercase">Example lowercase text</div>
                                            <div class="capitalize">Example capitalized text</div>
                                            <div class="normal-case">Example cursive text</div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: TEXT SETTINGS -->
            <!-- BEGIN: COMMON ELEMENTS -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Common Elements</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#common-elements" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="common-elements" class="p-5">
                    <div class="preview">
                        <div>You can use the mark tag to <mark class="p-1 bg-yellow-200">highlight</mark> text.</div>
                        <del class="block mt-1">This line of text is meant to be treated as deleted text.</del>
                        <s class="block mt-1">This line of text is meant to be treated as no longer accurate.</s>
                        <ins class="block mt-1">This line of text is meant to be treated as an addition to the document.</ins>
                        <u class="block mt-1">This line of text will render as underlined</u>
                        <small class="block mt-1">This line of text is meant to be treated as fine print.</small>
                        <strong class="block mt-1">This line rendered as bold text.</strong>
                        <em class="block mt-1">This line rendered as italicized text.</em>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-common-elements" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-common-elements" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div>You can use the mark tag to <mark class="p-1 bg-yellow-200">highlight</mark> text.</div>
                                        <del class="block mt-1">This line of text is meant to be treated as deleted text.</del>
                                        <s class="block mt-1">This line of text is meant to be treated as no longer accurate.</s>
                                        <ins class="block mt-1">This line of text is meant to be treated as an addition to the document.</ins>
                                        <u class="block mt-1">This line of text will render as underlined</u>
                                        <small class="block mt-1">This line of text is meant to be treated as fine print.</small>
                                        <strong class="block mt-1">This line rendered as bold text.</strong>
                                        <em class="block mt-1">This line rendered as italicized text.</em>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: COMMON ELEMENTS -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: BADGES -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Badges</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#badge" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="badge" class="p-5">
                    <div class="preview">
                        <div class="font-medium">Basic Badge</div>
                        <div class="mt-2">
                            <span class="text-xs px-1 rounded-full bg-primary text-white mr-1">1</span>
                            <span class="text-xs px-1 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="text-xs px-1 rounded-full bg-success text-white mr-1">3</span>
                            <span class="text-xs px-1 rounded-full bg-warning text-white mr-1">4</span>
                            <span class="text-xs px-1 rounded-full bg-danger text-white mr-1">5</span>
                            <span class="text-xs px-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="font-medium mt-6">Badge Sizes</div>
                        <div class="mt-3">
                            <span class="px-2 py-1 rounded-full bg-primary text-white mr-1">1</span>
                            <span class="px-2 py-1 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="px-2 py-1 rounded-full bg-success text-white mr-1">3</span>
                            <span class="px-2 py-1 rounded-full bg-warning text-white mr-1">4</span>
                            <span class="px-2 py-1 rounded-full bg-danger text-white mr-1">5</span>
                            <span class="px-2 py-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="mt-4">
                            <span class="px-3 py-2 rounded-full bg-primary text-white mr-1">1</span>
                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="px-3 py-2 rounded-full bg-success text-white mr-1">3</span>
                            <span class="px-3 py-2 rounded-full bg-warning text-white mr-1">4</span>
                            <span class="px-3 py-2 rounded-full bg-danger text-white mr-1">5</span>
                            <span class="px-3 py-2 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="mt-6">
                            <span class="px-4 py-3 rounded-full bg-primary text-white mr-1">1</span>
                            <span class="px-4 py-3 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="px-4 py-3 rounded-full bg-success text-white mr-1">3</span>
                            <span class="px-4 py-3 rounded-full bg-warning text-white mr-1">4</span>
                            <span class="px-4 py-3 rounded-full bg-danger text-white mr-1">5</span>
                            <span class="px-4 py-3 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="font-medium mt-10">Square Badge</div>
                        <div class="mt-2">
                            <span class="text-xs px-1 bg-primary text-white mr-1">1</span>
                            <span class="text-xs px-1 border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="text-xs px-1 bg-success text-white mr-1">3</span>
                            <span class="text-xs px-1 bg-warning text-white mr-1">4</span>
                            <span class="text-xs px-1 bg-danger text-white mr-1">5</span>
                            <span class="text-xs px-1 bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="font-medium mt-6">Outline Badge</div>
                        <div class="mt-4">
                            <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1">1</span>
                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="px-3 py-2 rounded-full border border-success text-success dark:border-success mr-1">3</span>
                            <span class="px-3 py-2 rounded-full border border-warning text-warning dark:border-warning mr-1">4</span>
                            <span class="px-3 py-2 rounded-full border border-danger text-danger dark:border-danger mr-1">5</span>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-badge" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-badge" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="font-medium">Basic Badge</div>
                                        <div class="mt-2">
                                            <span class="text-xs px-1 rounded-full bg-primary text-white mr-1">1</span>
                                            <span class="text-xs px-1 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="text-xs px-1 rounded-full bg-success text-white mr-1">3</span>
                                            <span class="text-xs px-1 rounded-full bg-warning text-white mr-1">4</span>
                                            <span class="text-xs px-1 rounded-full bg-danger text-white mr-1">5</span>
                                            <span class="text-xs px-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="font-medium mt-6">Badge Sizes</div>
                                        <div class="mt-3">
                                            <span class="px-2 py-1 rounded-full bg-primary text-white mr-1">1</span>
                                            <span class="px-2 py-1 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="px-2 py-1 rounded-full bg-success text-white mr-1">3</span>
                                            <span class="px-2 py-1 rounded-full bg-warning text-white mr-1">4</span>
                                            <span class="px-2 py-1 rounded-full bg-danger text-white mr-1">5</span>
                                            <span class="px-2 py-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="mt-4">
                                            <span class="px-3 py-2 rounded-full bg-primary text-white mr-1">1</span>
                                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="px-3 py-2 rounded-full bg-success text-white mr-1">3</span>
                                            <span class="px-3 py-2 rounded-full bg-warning text-white mr-1">4</span>
                                            <span class="px-3 py-2 rounded-full bg-danger text-white mr-1">5</span>
                                            <span class="px-3 py-2 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="mt-6">
                                            <span class="px-4 py-3 rounded-full bg-primary text-white mr-1">1</span>
                                            <span class="px-4 py-3 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="px-4 py-3 rounded-full bg-success text-white mr-1">3</span>
                                            <span class="px-4 py-3 rounded-full bg-warning text-white mr-1">4</span>
                                            <span class="px-4 py-3 rounded-full bg-danger text-white mr-1">5</span>
                                            <span class="px-4 py-3 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="font-medium mt-10">Square Badge</div>
                                        <div class="mt-2">
                                            <span class="text-xs px-1 bg-primary text-white mr-1">1</span>
                                            <span class="text-xs px-1 border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="text-xs px-1 bg-success text-white mr-1">3</span>
                                            <span class="text-xs px-1 bg-warning text-white mr-1">4</span>
                                            <span class="text-xs px-1 bg-danger text-white mr-1">5</span>
                                            <span class="text-xs px-1 bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="font-medium mt-6">Outline Badge</div>
                                        <div class="mt-4">
                                            <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1">1</span>
                                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="px-3 py-2 rounded-full border border-success text-success dark:border-success mr-1">3</span>
                                            <span class="px-3 py-2 rounded-full border border-warning text-warning dark:border-warning mr-1">4</span>
                                            <span class="px-3 py-2 rounded-full border border-danger text-danger dark:border-danger mr-1">5</span>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: BADGES -->
            <!-- BEGIN: SEPARATOR -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Separator</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#separator" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="separator" class="p-5">
                    <div class="preview">
                        <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 border-dashed"></div>
                        <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 mt-5"></div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-separator" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-separator" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 border-dashed"></div>
                                        <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 mt-5"></div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: SEPARATOR -->
            <!-- BEGIN: Devider -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Devider</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#devider" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="devider" class="p-5">
                    <div class="preview">
                        <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-2">
                            <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">or</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-devider" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-devider" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-2">
                                            <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">or</div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Devider -->
            <!-- BEGIN: Links -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Links</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#link" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="link" class="p-5">
                    <div class="preview">
                        <div>
                            <a href="" class="text-primary block font-normal">Example text</a>
                            <a href="" class="text-primary block font-medium">Example medium text</a>
                            <a href="" class="text-primary block font-semibold">Example semibold text</a>
                            <a href="" class="text-primary block font-bold">Example bolder text</a>
                            <a href="" class="text-primary block font-extrabold">Example boldest text</a>
                        </div>
                        <div class="mt-5">
                            <a href="" class="text-primary block">Primary state</a>
                            <a href="" class="text-slate-600 dark:text-slate-500 block">Secondary state</a>
                            <a href="" class="text-success block">Success state</a>
                            <a href="" class="text-warning block">Warning state</a>
                            <a href="" class="text-danger block">Danger state</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-link" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-link" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div>
                                            <a href="" class="text-primary block font-normal">Example text</a>
                                            <a href="" class="text-primary block font-medium">Example medium text</a>
                                            <a href="" class="text-primary block font-semibold">Example semibold text</a>
                                            <a href="" class="text-primary block font-bold">Example bolder text</a>
                                            <a href="" class="text-primary block font-extrabold">Example boldest text</a>
                                        </div>
                                        <div class="mt-5">
                                            <a href="" class="text-primary block">Primary state</a>
                                            <a href="" class="text-slate-600 dark:text-slate-500 block">Secondary state</a>
                                            <a href="" class="text-success block">Success state</a>
                                            <a href="" class="text-warning block">Warning state</a>
                                            <a href="" class="text-danger block">Danger state</a>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Links -->
        </div>
    </div>
@endsection
