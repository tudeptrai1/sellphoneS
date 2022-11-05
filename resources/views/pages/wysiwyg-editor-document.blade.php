@extends('../layout/' . $layout)

@section('subhead')
    <title>Wysiwyg Editor - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">CKEditor</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Document Editor -->
        <div class="col-span-12">
            <div class="box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Document Editor</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#document-editor" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="document-editor">
                    <div class="preview">
                        <div class="editor document-editor">
                            <div class="document-editor__toolbar"></div>
                            <div class="document-editor__editable-container">
                                <div class="document-editor__editable">
                                    <p>Content of the editor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-document-editor-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-document-editor-html">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="editor document-editor">
                                            <div class="document-editor__toolbar"></div>
                                            <div class="document-editor__editable-container">
                                                <div class="document-editor__editable">
                                                    <p>Content of the editor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-document-editor-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-document-editor-js">
                                <code class="javascript">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        import DocumentEditor from "@ckeditor/ckeditor5-build-decoupled-document";

                                        $(".editor").each(function () {
                                            const el = this;
                                            DocumentEditor.create($(el).find(".document-editor__editable")[0])
                                                .then((editor) => {
                                                    $(el)
                                                        .closest(".editor")
                                                        .find(".document-editor__toolbar")
                                                        .append(editor.ui.view.toolbar.element);
                                                })
                                                .catch((error) => {
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
        <!-- END: Document Editor -->
    </div>
@endsection

@section('script')
    @vite('resources/js/ckeditor-document.js')
@endsection
