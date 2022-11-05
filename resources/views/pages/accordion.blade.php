@extends('../layout/' . $layout)

@section('subhead')
    <title>Accordion - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Accordion</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Accordion -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Accordion</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-accordion" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-accordion" class="p-5">
                    <div class="preview">
                        <div id="faq-accordion-1" class="accordion">
                            <div class="accordion-item">
                                <div id="faq-accordion-content-1" class="accordion-header">
                                    <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1">
                                        OpenSSL Essentials: Working with SSL Certificates, Private Keys
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-2" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-3" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3">
                                        How To Troubleshoot Common HTTP Error Codes
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-4" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">
                                        An Introduction to Securing your Linux VPS
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-accordion" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-accordion" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div id="faq-accordion-1" class="accordion">
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-1" class="accordion-header">
                                                    <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1">
                                                        OpenSSL Essentials: Working with SSL Certificates, Private Keys
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-2" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-3" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3">
                                                        How To Troubleshoot Common HTTP Error Codes
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-4" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">
                                                        An Introduction to Securing your Linux VPS
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Accordion -->
            <!-- BEGIN: Boxed Accordion -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Boxed Accordion</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#boxed-accordion" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="boxed-accordion" class="p-5">
                    <div class="preview">
                        <div id="faq-accordion-2" class="accordion accordion-boxed">
                            <div class="accordion-item">
                                <div id="faq-accordion-content-5" class="accordion-header">
                                    <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">
                                        OpenSSL Essentials: Working with SSL Certificates, Private Keys
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-2">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-6" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-6" data-tw-parent="#faq-accordion-2">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-7" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7">
                                        How To Troubleshoot Common HTTP Error Codes
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-7" data-tw-parent="#faq-accordion-2">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-8" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">
                                        An Introduction to Securing your Linux VPS
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-8" data-tw-parent="#faq-accordion-2">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-boxed-accordion" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-boxed-accordion" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div id="faq-accordion-2" class="accordion accordion-boxed">
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-5" class="accordion-header">
                                                    <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">
                                                        OpenSSL Essentials: Working with SSL Certificates, Private Keys
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-2">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-6" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-6" data-tw-parent="#faq-accordion-2">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-7" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7">
                                                        How To Troubleshoot Common HTTP Error Codes
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-7" data-tw-parent="#faq-accordion-2">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-8" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">
                                                        An Introduction to Securing your Linux VPS
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-8" data-tw-parent="#faq-accordion-2">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Boxed Accordion -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Methods -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Methods</h2>
                </div>
                <div class="p-5">
                    <div class="text-base font-medium">Get or Create Instance</div>
                    <div class="mt-2">Static method which allows you to get the accordion instance associated with a DOM element, or create a new one in case it wasn’t initialized.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myAccordion = tailwind.Accordion.getOrCreateInstance(document.querySelector("#myAccordion"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Get Instance</div>
                    <div class="mt-2">Static method which allows you to get the accordion instance associated with a DOM element.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myAccordion = tailwind.Accordion.getInstance(document.querySelector("#myAccordion"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Hide</div>
                    <div class="mt-2">Manually hides an accordion. Returns to the caller before the accordion has actually been hidden (i.e. before the <span class="text-red-500">hidden.tw.accordion</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myAccordion.hide();
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Show</div>
                    <div class="mt-2">Manually opens an accordion. Returns to the caller before the accordion has actually been shown (i.e. before the <span class="text-red-500">shown.tw.accordion</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myAccordion.show();
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Toggle</div>
                    <div class="mt-2">Manually toggles an accordion. Returns to the caller before the accordion has actually been shown or hidden (i.e. before the <span class="text-red-500">shown.tw.accordion</span> or <span class="text-red-500">hidden.tw.accordion</span> event occurs).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myAccordion.toggle();
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
                    Midone’s accordion class exposes a few events for hooking into accordion functionality. All accordion events are fired at the accordion itself (i.e. at the <span class="text-red-500">&lt;div class="accordion"&gt;</span>).
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Event type</th>
                                <th class="whitespace-nowrap">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-top text-red-500">show.tw.accordion</td>
                                <td class="align-top">This event fires immediately when the <span class="text-red-500">show</span> instance method is called.</td>
                            </tr>
                            <tr>
                                <td class="align-top text-red-500">hide.tw.accordion</td>
                                <td class="align-top">This event is fired immediately when the <span class="text-red-500">hide</span> instance method has been called.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myAccordionEl = document.getElementById('myAccordion')
                                myAccordionEl.addEventListener('hidden.tw.accordion', function (event) {
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
