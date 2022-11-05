@extends('../layout/' . $layout)

@section('subhead')
    <title>Tab - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Tab</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Tab -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Tab</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-tab" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-tab" class="p-5">
                    <div class="preview">
                        <ul class="nav nav-tabs" role="tablist">
                            <li id="example-1-tab" class="nav-item flex-1" role="presentation">
                                <button
                                    class="nav-link w-full py-2 active"
                                    data-tw-toggle="pill"
                                    data-tw-target="#example-tab-1"
                                    type="button"
                                    role="tab"
                                    aria-controls="example-tab-1"
                                    aria-selected="true"
                                >
                                    Example Tab 1
                                </button>
                            </li>
                            <li id="example-2-tab" class="nav-item flex-1" role="presentation">
                                <button
                                    class="nav-link w-full py-2"
                                    data-tw-toggle="pill"
                                    data-tw-target="#example-tab-2"
                                    type="button"
                                    role="tab"
                                    aria-controls="example-tab-2"
                                    aria-selected="false"
                                >
                                    Example Tab 2
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content border-l border-r border-b">
                            <div id="example-tab-1" class="tab-pane leading-relaxed p-5 active" role="tabpanel" aria-labelledby="example-1-tab">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                            <div id="example-tab-2" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="example-2-tab">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-tab" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-tab" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li id="example-1-tab" class="nav-item flex-1" role="presentation">
                                                <button
                                                    class="nav-link w-full py-2 active"
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#example-tab-1"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="example-tab-1"
                                                    aria-selected="true"
                                                >
                                                    Example Tab 1
                                                </button>
                                            </li>
                                            <li id="example-2-tab" class="nav-item flex-1" role="presentation">
                                                <button
                                                    class="nav-link w-full py-2"
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#example-tab-2"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="example-tab-2"
                                                    aria-selected="false"
                                                >
                                                    Example Tab 2
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content border-l border-r border-b">
                                            <div id="example-tab-1" class="tab-pane leading-relaxed p-5 active" role="tabpanel" aria-labelledby="example-1-tab">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                            <div id="example-tab-2" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="example-2-tab">
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Tab -->
            <!-- BEGIN: Boxed Tab -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Boxed Tab</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#boxed-tab" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="boxed-tab" class="p-5">
                    <div class="preview">
                        <ul class="nav nav-boxed-tabs" role="tablist">
                            <li id="example-3-tab" class="nav-item flex-1" role="presentation">
                                <button
                                    class="nav-link w-full py-2 active"
                                    data-tw-toggle="pill"
                                    data-tw-target="#example-tab-3"
                                    type="button"
                                    role="tab"
                                    aria-controls="example-tab-3"
                                    aria-selected="true"
                                >
                                    Example Tab 1
                                </button>
                            </li>
                            <li id="example-4-tab" class="nav-item flex-1" role="presentation">
                                <button
                                    class="nav-link w-full py-2"
                                    data-tw-toggle="pill"
                                    data-tw-target="#example-tab-4"
                                    type="button"
                                    role="tab"
                                    aria-controls="example-tab-4"
                                    aria-selected="false"
                                >
                                    Example Tab 2
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content mt-5">
                            <div id="example-tab-3" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-3-tab">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                            <div id="example-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-4-tab">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-boxed-tab" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-boxed-tab" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <ul class="nav nav-boxed-tabs" role="tablist">
                                            <li id="example-3-tab" class="nav-item flex-1" role="presentation">
                                                <button
                                                    class="nav-link w-full py-2 active"
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#example-tab-3"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="example-tab-3"
                                                    aria-selected="true"
                                                >
                                                    Example Tab 1
                                                </button>
                                            </li>
                                            <li id="example-4-tab" class="nav-item flex-1" role="presentation">
                                                <button
                                                    class="nav-link w-full py-2"
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#example-tab-4"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="example-tab-4"
                                                    aria-selected="false"
                                                >
                                                    Example Tab 2
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-5">
                                            <div id="example-tab-3" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-3-tab">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                            <div id="example-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-4-tab">
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Boxed Tab -->
            <!-- BEGIN: Link Tab -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Link Tab</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#link-tab" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="link-tab" class="p-5">
                    <div class="preview">
                        <ul class="nav nav-link-tabs" role="tablist">
                            <li id="example-5-tab" class="nav-item flex-1" role="presentation">
                                <button
                                    class="nav-link w-full py-2 active"
                                    data-tw-toggle="pill"
                                    data-tw-target="#example-tab-5"
                                    type="button"
                                    role="tab"
                                    aria-controls="example-tab-5"
                                    aria-selected="true"
                                >
                                    Example Tab 1
                                </button>
                            </li>
                            <li id="example-6-tab" class="nav-item flex-1" role="presentation">
                                <button
                                    class="nav-link w-full py-2"
                                    data-tw-toggle="pill"
                                    data-tw-target="#example-tab-6"
                                    type="button"
                                    role="tab"
                                    aria-controls="example-tab-6"
                                    aria-selected="false"
                                >
                                    Example Tab 2
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content mt-5">
                            <div id="example-tab-5" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-5-tab">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                            <div id="example-tab-6" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-6-tab">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-link-tab" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-link-tab" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <ul class="nav nav-link-tabs" role="tablist">
                                            <li id="example-5-tab" class="nav-item flex-1" role="presentation">
                                                <button
                                                    class="nav-link w-full py-2 active"
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#example-tab-5"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="example-tab-5"
                                                    aria-selected="true"
                                                >
                                                    Example Tab 1
                                                </button>
                                            </li>
                                            <li id="example-6-tab" class="nav-item flex-1" role="presentation">
                                                <button
                                                    class="nav-link w-full py-2"
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#example-tab-6"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="example-tab-6"
                                                    aria-selected="false"
                                                >
                                                    Example Tab 2
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-5">
                                            <div id="example-tab-5" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-5-tab">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                            <div id="example-tab-6" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-6-tab">
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Tab -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Methods -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Methods</h2>
                </div>
                <div class="p-5">
                    <div class="text-base font-medium">Get or Create Instance</div>
                    <div class="mt-2">Static method which allows you to get the tab instance associated with a DOM element, or create a new one in case it wasn’t initialized.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myTab = tailwind.Tab.getOrCreateInstance(document.querySelector("#myTab"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Get Instance</div>
                    <div class="mt-2">Static method which allows you to get the tab instance associated with a DOM element.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myTab = tailwind.Tab.getInstance(document.querySelector("#myTab"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Show</div>
                    <div class="mt-2">Manually opens a tab. Returns to the caller before the tab has actually been shown (i.e. before the <span class="text-red-500">shown.tw.tab</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myTab.show();
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
                    Midone’s tab class exposes a few events for hooking into tab functionality. All tab events are fired at the tab itself (i.e. at the <span class="text-red-500">&lt;div class="nav"&gt;</span>).
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Event type</th>
                                <th class="whitespace-nowrap">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-top text-red-500">show.tw.tab</td>
                                <td class="align-top">This event fires immediately when the <span class="text-red-500">show</span> instance method is called.</td>
                            </tr>
                            <tr>
                                <td class="align-top text-red-500">hide.tw.tab</td>
                                <td class="align-top">This event is fired immediately when the <span class="text-red-500">hide</span> instance method has been called.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myTabEl = document.getElementById('myTab')
                                myTabEl.addEventListener('hidden.tw.tab', function (event) {
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
