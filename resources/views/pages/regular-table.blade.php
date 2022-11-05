@extends('../layout/' . $layout)

@section('subhead')
    <title>Regular Table - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Regular Table</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Table -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Basic Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-dark mt-5">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-basic-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-dark mt-5">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Table -->
            <!-- BEGIN: Bordered Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Bordered Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#bordered-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="bordered-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-bordered-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-bordered-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Bordered Table -->
            <!-- BEGIN: Hoverable Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Hoverable Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#hoverable-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="hoverable-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-hoverable-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-hoverable-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Hoverable Table -->
            <!-- BEGIN: Table Row States -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Table Row States</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#row-states-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="row-states-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-primary text-white">
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr class="bg-danger text-white">
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr class="bg-warning">
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-row-states-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-row-states-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-primary text-white">
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr class="bg-danger text-white">
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr class="bg-warning">
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Table Row States -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Table Head Options -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Table Head Options</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#head-options-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="head-options-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table mt-5">
                                <thead class="table-light">
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-head-options-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-head-options-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table mt-5">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Table Head Options -->
            <!-- BEGIN: Responsive Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Responsive Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#responsive-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="responsive-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                        <th class="whitespace-nowrap">Email</th>
                                        <th class="whitespace-nowrap">Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="whitespace-nowrap">1</td>
                                        <td class="whitespace-nowrap">Angelina</td>
                                        <td class="whitespace-nowrap">Jolie</td>
                                        <td class="whitespace-nowrap">@angelinajolie</td>
                                        <td class="whitespace-nowrap">angelinajolie@gmail.com</td>
                                        <td class="whitespace-nowrap">
                                            260 W. Storm Street New York, NY 10025.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="whitespace-nowrap">2</td>
                                        <td class="whitespace-nowrap">Brad</td>
                                        <td class="whitespace-nowrap">Pitt</td>
                                        <td class="whitespace-nowrap">@bradpitt</td>
                                        <td class="whitespace-nowrap">bradpitt@gmail.com</td>
                                        <td class="whitespace-nowrap">
                                            47 Division St. Buffalo, NY 14241.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="whitespace-nowrap">3</td>
                                        <td class="whitespace-nowrap">Charlie</td>
                                        <td class="whitespace-nowrap">Hunnam</td>
                                        <td class="whitespace-nowrap">@charliehunnam</td>
                                        <td class="whitespace-nowrap">charliehunnam@gmail.com</td>
                                        <td class="whitespace-nowrap">
                                            8023 Amerige Street Harriman, NY 10926.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-responsive-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-responsive-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                        <th class="whitespace-nowrap">Email</th>
                                                        <th class="whitespace-nowrap">Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="whitespace-nowrap">1</td>
                                                        <td class="whitespace-nowrap">Angelina</td>
                                                        <td class="whitespace-nowrap">Jolie</td>
                                                        <td class="whitespace-nowrap">@angelinajolie</td>
                                                        <td class="whitespace-nowrap">angelinajolie@gmail.com</td>
                                                        <td class="whitespace-nowrap">
                                                            260 W. Storm Street New York, NY 10025.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="whitespace-nowrap">2</td>
                                                        <td class="whitespace-nowrap">Brad</td>
                                                        <td class="whitespace-nowrap">Pitt</td>
                                                        <td class="whitespace-nowrap">@bradpitt</td>
                                                        <td class="whitespace-nowrap">bradpitt@gmail.com</td>
                                                        <td class="whitespace-nowrap">
                                                            47 Division St. Buffalo, NY 14241.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="whitespace-nowrap">3</td>
                                                        <td class="whitespace-nowrap">Charlie</td>
                                                        <td class="whitespace-nowrap">Hunnam</td>
                                                        <td class="whitespace-nowrap">@charliehunnam</td>
                                                        <td class="whitespace-nowrap">charliehunnam@gmail.com</td>
                                                        <td class="whitespace-nowrap">
                                                            8023 Amerige Street Harriman, NY 10926.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Responsive Table -->
            <!-- BEGIN: Small Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Small Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#small-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="small-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-small-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-small-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Small Table -->
            <!-- BEGIN: Striped Rows -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Striped Rows</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-8">Show example code</label>
                        <input id="show-example-8" data-target="#striped-rows-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="striped-rows-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-striped-rows-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-striped-rows-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Striped Rows -->
        </div>
    </div>
@endsection
