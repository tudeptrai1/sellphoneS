@extends('../layout/' . $layout)

@section('subhead')
    <title>Notification - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Notification</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Notification -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Notification</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-textual-notification" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-textual-notification" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="basic-non-sticky-notification-content" class="toastify-content hidden flex flex-col sm:flex-row">
                                <div class="font-medium">Yay! Updates Published!</div>
                                <a class="font-medium text-primary dark:text-slate-400 mt-1 sm:mt-0 sm:ml-40" href="">Review Changes</a>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="basic-non-sticky-notification-toggle" class="btn btn-primary mr-1">Show Non Sticky Notification</button>
                            <button id="basic-sticky-notification-toggle" class="btn btn-primary mt-2 sm:mt-0">Show Sticky Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-textual-notification-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-textual-notification-html" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Notification Content -->
                                        <div id="basic-non-sticky-notification-content" class="toastify-content hidden flex">
                                            <div class="font-medium">Yay! Updates Published!</div>
                                            <a class="font-medium text-primary dark:text-slate-400 mt-1 sm:mt-0 sm:ml-40" href="">Review Changes</a>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="basic-non-sticky-notification-toggle" class="btn btn-primary mr-1">Show Non Sticky Notification</button>
                                        <button id="basic-sticky-notification-toggle" class="btn btn-primary mt-2 sm:mt-0">Show Sticky Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-basic-textual-notification-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-textual-notification-js" class="source-preview">
                                <code class="javascript">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        // Basic non sticky notification
                                        $("#basic-non-sticky-notification-toggle").on("click", function () {
                                            Toastify({
                                                node: $("#basic-non-sticky-notification-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: 3000,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                backgroundColor: "white",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });

                                        // Basic sticky notification
                                        $("#basic-sticky-notification-toggle").on("click", function () {
                                            Toastify({
                                                node: $("#basic-non-sticky-notification-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                backgroundColor: "white",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Notification -->
            <!-- BEGIN: Success Notification -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Success Notification</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#success-notification" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="success-notification" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="success-notification-content" class="toastify-content hidden flex">
                                <i class="text-success" data-lucide="check-circle"></i>
                                <div class="ml-4 mr-4">
                                    <div class="font-medium">Message Saved!</div>
                                    <div class="text-slate-500 mt-1">The message will be sent in 5 minutes.</div>
                                </div>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="success-notification-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-success-notification-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-success-notification-html" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Notification Content -->
                                        <div id="success-notification-content" class="toastify-content hidden flex">
                                            <i class="text-success" data-lucide="check-circle"></i>
                                            <div class="ml-4 mr-4">
                                                <div class="font-medium">Message Saved!</div>
                                                <div class="text-slate-500 mt-1">The message will be sent in 5 minutes.</div>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="success-notification-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-success-notification-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-success-notification-js" class="source-preview">
                                <code class="javascript">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        // Success notification
                                        $("#success-notification-toggle").on("click", function () {
                                            Toastify({
                                                node: $("#success-notification-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Success Notification -->
            <!-- BEGIN: Notification With Actions -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Notification With Actions</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#notification-with-actions" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="notification-with-actions" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="notification-with-actions-content" class="toastify-content hidden flex">
                                <i data-lucide="hard-drive"></i>
                                <div class="ml-4 mr-4">
                                    <div class="font-medium">Storage Removed!</div>
                                    <div class="text-slate-500 mt-1">The server will restart in 30 seconds, don't make<br> changes during the update process!</div>
                                    <div class="font-medium flex mt-1.5">
                                        <a class="text-primary dark:text-slate-400" href="">Restart Now</a>
                                        <a class="text-slate-500 ml-3" href="">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="notification-with-actions-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-notification-with-actions-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-actions-html" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Notification Content -->
                                        <div id="notification-with-actions-content" class="toastify-content hidden flex">
                                            <i data-lucide="hard-drive"></i>
                                            <div class="ml-4 mr-4">
                                                <div class="font-medium">Storage Removed!</div>
                                                <div class="text-slate-500 mt-1">The server will restart in 30 seconds, don\'t make<br> changes during the update process!</div>
                                                <div class="font-medium flex mt-1.5">
                                                    <a class="text-primary dark:text-slate-400" href="">Restart Now</a>
                                                    <a class="text-slate-500 ml-3" href="">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="notification-with-actions-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-notification-with-actions-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-actions-js" class="source-preview">
                                <code class="javascript">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        // Notification with actions
                                        $("#notification-with-actions-toggle").on("click", function () {
                                            Toastify({
                                                node: $("#notification-with-actions-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- END: Notification With Actions -->
            <!-- BEGIN: Notification With Avatar -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Notification With Avatar</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#notification-with-avatar" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="notification-with-avatar" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="notification-with-avatar-content" class="toastify-content hidden flex">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                                </div>
                                <div class="ml-4 sm:mr-28">
                                    <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                                    <div class="text-slate-500 mt-1">See you later! 😃😃😃</div>
                                </div>
                                <a data-dismiss="notification" class="absolute top-0 bottom-0 right-0 flex items-center px-6 border-l border-slate-200/60 dark:border-darkmode-400 font-medium text-primary dark:text-slate-400" href="javascript:;">Reply</a>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="notification-with-avatar-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-notification-with-avatar-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-avatar-html" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Notification Content -->
                                        <div id="notification-with-avatar-content" class="toastify-content hidden flex">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone - HTML Admin Template" src="' . asset('build/assets/images/' . $fakers[0]['photos'][0]) . '">
                                            </div>
                                            <div class="ml-4 sm:mr-28">
                                                <div class="font-medium">' . $fakers[0]['users'][0]['name'] . '</div>
                                                <div class="text-slate-500 mt-1">See you later! 😃😃😃</div>
                                            </div>
                                            <a data-dismiss="notification" class="absolute top-0 bottom-0 right-0 flex items-center px-6 border-l border-slate-200/60 dark:border-darkmode-400 font-medium text-primary dark:text-slate-400" href="javascript:;">Reply</a>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="notification-with-avatar-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-notification-with-avatar-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-avatar-js" class="source-preview">
                                <code class="javascript">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        // Notification with avatar
                                        $("#notification-with-avatar-toggle").on("click", function () {
                                            // Init toastify
                                            let avatarNotification = Toastify({
                                                node: $("#notification-with-avatar-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: false,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();

                                            // Close notification event
                                            $(avatarNotification.toastElement)
                                                .find(\'[data-dismiss="notification"]\')
                                                .on("click", function () {
                                                    avatarNotification.hideToast();
                                                });
                                        });
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notification With Avatar -->
            <!-- BEGIN: Notification With Split Buttons -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Notification With Split Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#notification-with-split-buttons" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="notification-with-split-buttons" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="notification-with-split-buttons-content" class="toastify-content hidden flex">
                                <div class="sm:mr-40">
                                    <div class="font-medium">Introducing new theme</div>
                                    <div class="text-slate-500 mt-1">Release version 2.3.3</div>
                                </div>
                                <div class="absolute top-0 bottom-0 right-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400">
                                    <a class="flex-1 flex items-center justify-center px-6 font-medium text-primary dark:text-slate-400 border-b border-slate-200/60 dark:border-darkmode-400" href="javascript:;">View Details</a>
                                    <a data-dismiss="notification" class="flex-1 flex items-center justify-center px-6 font-medium text-slate-500" href="javascript:;">Dismiss</a>
                                </div>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="notification-with-split-buttons-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-notification-with-split-buttons-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-split-buttons-html" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Notification Content -->
                                        <div id="notification-with-split-buttons-content" class="toastify-content hidden flex">
                                            <div class="sm:mr-40">
                                                <div class="font-medium">Introducing new theme</div>
                                                <div class="text-slate-500 mt-1">Release version 2.3.3</div>
                                            </div>
                                            <div class="absolute top-0 bottom-0 right-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400">
                                                <a class="flex-1 flex items-center justify-center px-6 font-medium text-primary dark:text-slate-400 border-b border-slate-200/60 dark:border-darkmode-400" href="javascript:;">View Details</a>
                                                <a data-dismiss="notification" class="flex-1 flex items-center justify-center px-6 font-medium text-slate-500" href="javascript:;">Dismiss</a>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="notification-with-split-buttons-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-notification-with-split-buttons-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-split-buttons-js" class="source-preview">
                                <code class="javascript">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        // Notification with split buttons
                                        $("#notification-with-split-buttons-toggle").on("click", function () {
                                            // Init toastify
                                            let splitButtonsNotification = Toastify({
                                                node: $("#notification-with-split-buttons-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: false,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();

                                            // Close notification event
                                            $(splitButtonsNotification.toastElement)
                                                .find(\'[data-dismiss="notification"]\')
                                                .on("click", function () {
                                                    splitButtonsNotification.hideToast();
                                                });
                                        });
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notification With Split Buttons -->
            <!-- BEGIN: Notification With Buttons Below -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Notification With Buttons Below</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#notification-with-buttons-below" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="notification-with-buttons-below" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="notification-with-buttons-below-content" class="toastify-content hidden flex">
                                <i data-lucide="file-text"></i>
                                <div class="ml-4 mr-5 sm:mr-20">
                                    <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                                    <div class="text-slate-500 mt-1">Sent you new documents.</div>
                                    <div class="mt-2.5">
                                        <a class="btn btn-primary py-1 px-2 mr-2" href="">Preview</a>
                                        <a class="btn btn-outline-secondary py-1 px-2" href="">Download</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="notification-with-buttons-below-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-notification-with-buttons-below-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-buttons-below-html" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <!-- BEGIN: Notification Content -->
                                        <div id="notification-with-buttons-below-content" class="toastify-content hidden flex">
                                            <i data-lucide="file-text"></i>
                                            <div class="ml-4 mr-5 sm:mr-20">
                                                <div class="font-medium">' . $fakers[0]['users'][0]['name'] . '</div>
                                                <div class="text-slate-500 mt-1">Sent you new documents.</div>
                                                <div class="mt-2.5">
                                                    <a class="btn btn-primary py-1 px-2 mr-2" href="">Preview</a>
                                                    <a class="btn btn-outline-secondary py-1 px-2" href="">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="notification-with-buttons-below-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-notification-with-buttons-below-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-buttons-below-js" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        // Notification with buttons below
                                        $("#notification-with-buttons-below-toggle").on("click", function () {
                                            // Init toastify
                                            Toastify({
                                                node: $("#notification-with-buttons-below-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notification With Buttons Below -->
        </div>
    </div>
@endsection
