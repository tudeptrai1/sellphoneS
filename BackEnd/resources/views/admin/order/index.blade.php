@extends('layouts.admin')
@section('content')


    <h2 class="intro-y text-lg font-medium mt-10">
        Order List
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search by invoice...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                <select class="form-select box ml-2">

                    <option>All</option>
                    <option>Confirmed</option>
                    <option>Delivered</option>
                    <option>Completed</option>
                    <option>Canceled</option>
                </select>
            </div>
            <div class="hidden xl:block mx-auto text-slate-500"></div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                <button class="btn btn-primary shadow-md mr-2"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </button>
                <button class="btn btn-primary shadow-md mr-2"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </button>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                <tr>

                    <th class="whitespace-nowrap">ORDER ID</th>
                    <th class="whitespace-nowrap">BUYER NAME</th>
                    <th class="text-center whitespace-nowrap">STATUS</th>
                    <th class="whitespace-nowrap">PAYMENT</th>
                    <th class="text-right whitespace-nowrap">
                        <div class="pr-16">TOTAL TRANSACTION</div>
                    </th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $each)
                <tr class="intro-x">

                    <td class="w-40 !py-4"> <a href="" class="underline decoration-dotted whitespace-nowrap">#ODR-{{$each->id}}</a> </td>
                    <td class="w-40">
                        <a href="" class="font-medium whitespace-nowrap">{{$each->user->full_name}}</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$each->user->email}}</div>
                    </td>
                    <td class="text-center">
                        <div class="flex items-center justify-center whitespace-nowrap "> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>{{$each->status}} </div>
                    </td>
                    <td>
                        <div class="whitespace-nowrap">{{$each->payment_method}}</div>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$each->Date()}}</div>
                    </td>
                    <td class="w-40 text-right">
                        <div class="pr-16">{{number_format($each->total, 0, '', '.')}}</div>
                    </td>
                    <td class="table-report__action">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center text-primary whitespace-nowrap mr-5" href="{{route('order.view',$each->id)}}"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details </a>
                            <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status </a>
                        </div>
                    </td>
                </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->

    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
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
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->


@endsection
