@extends('layouts.admin')
@section('content')
        <h2 class="intro-y text-lg font-medium mt-10">
            Product List
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{route('product.create')}}">    <button class="btn btn-primary shadow-md mr-2">Add New Product</button></a>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-slate-500"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-slate-500">
                        <form action="">
                            <input type="text" class="form-control w-56 box pr-10" placeholder="Search..." name="search">
                            <button class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" ><i class="w-4 h-4 absolute my-auto inset-y-0 " data-lucide="search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                    <tr>
                        <th class="whitespace-nowrap">IMAGES</th>
                        <th class="whitespace-nowrap">PRODUCT NAME</th>
                        <th class="text-center whitespace-nowrap">STOCK</th>
                        <th class="text-center whitespace-nowrap">PRICE</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $each)
                    <tr class="intro-x">

                        <td class="w-40">
                            <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="img" class="tooltip rounded-full" src="dist/images/preview-10.jpg" title="img" >
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="img" class="tooltip rounded-full" src="dist/images/preview-1.jpg" title="img">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="img" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="img">
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{$each['name']}}</a>
{{--                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>--}}
                        </td>
                        <td class="text-center">{{$each['amount']}}</td>
                        <td class="text-center">{{number_format($each['sell_price'], 0, '', ',')}}</td>
                        @if($each['status']===0)
                        <td class="w-40">
                            <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                        </td>
                        @else
                            <td class="w-40">
                                <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                            </td>
                        @endif
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="{{route('product.update',$each['id'])}}"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal{{$each['id']}}"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                    <!-- BEGIN: Delete Confirmation Modal -->
                    <div id="delete-confirmation-modal{{$each['id']}}" class="modal" tabindex="-1" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <form method="post" action="">
                                        @csrf
                                        @method('delete')
                                        <div class="p-5 text-center">
                                            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Are you sure?</div>
                                            <div class="text-slate-500 mt-2">
                                                Do you really want to delete these records?
                                                <br>
                                                This process cannot be undone.
                                            </div>
                                        </div>

                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                            <button type="submit" class="btn btn-danger w-24">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- END: Delete Confirmation Modal -->

                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <div class="">{{$data->links('vendor.pagination.bootstrap-4')}}</div>
        </div>

@endsection
