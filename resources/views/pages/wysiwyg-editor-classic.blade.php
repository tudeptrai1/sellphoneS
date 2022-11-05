@extends('../layout/' . $layout)

@section('subhead')
    <title>Wysiwyg Editor - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">CKEditor</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Classic Editor -->
        <div class="col-span-12">
            <div class="box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Classic Editor</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#classic-editor" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="classic-editor">
                    <div class="preview">
                        <div class="editor">
                            <p>Content of the editor.</p>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-classic-editor" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-classic-editor">
                                <code class="javascript">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

                                        $(".editor").each(function () {
                                            const el = this;
                                            ClassicEditor.create(el).catch((error) => {
                                                console.error(error);
                                            });
                                        });
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Classic Editor -->
    </div>
@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection
