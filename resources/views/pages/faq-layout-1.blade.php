@extends('../layout/' . $layout)

@section('subhead')
    <title>FAQ - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: FAQ Menu -->
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10 border-2 border-primary dark:border-primary">
            <i data-lucide="shield" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Single Application</div>
            <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
            <i data-lucide="send" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Multi Application</div>
            <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
            <i data-lucide="trending-up" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Custom License</div>
            <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-1" class="accordion p-5">
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
            <div class="box mt-6">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-2" class="accordion p-5">
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
                        <div id="faq-accordion-content-8" class="accordion-header" >
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
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-3" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-9" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-9" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-10" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-10" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-11" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-11" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-12" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-12" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box mt-6">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-4" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-13" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-13" aria-expanded="true" aria-controls="faq-accordion-collapse-13">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-13" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-13" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-14" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-14" aria-expanded="false" aria-controls="faq-accordion-collapse-14">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-14" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-15" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-15" aria-expanded="false" aria-controls="faq-accordion-collapse-15">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-15" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-16" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-16" aria-expanded="false" aria-controls="faq-accordion-collapse-16">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-16" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>
@endsection
