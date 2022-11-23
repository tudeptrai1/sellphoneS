@extends('layouts.admin')
@section('content')


    <h2 class="intro-y text-lg font-medium mt-10">
        Order List
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">


        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">

            <div class="flex w-full sm:w-auto">
                <form method="get" class="flex w-full sm:w-auto" >
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search by invoice...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                <div class="relative pl-1 mx-auto w-full">
                    <input class="form-control" type="date"  name="date" value="{{Request::get('date') ?? date('Y-m-d')}}">
                </div>
                <select class="form-select box ml-2" name="status">

                    <option value="">Status</option>
                    <option value="Waiting for confirm" {{Request::get('status')=== 'Waiting for confirm' ? 'selected':''}} >Waiting For Confirm</option>
                    <option value="Confirmed"{{Request::get('status')=== 'Confirmed' ? 'selected':''}}>Confirmed</option>=
                    <option value="Completed"{{Request::get('status')=== 'Completed' ? 'selected':''}}>Completed</option>
                    <option value="Canceled"{{Request::get('status')=== 'Canceled' ? 'selected':''}}>Canceled</option>
                </select>
                    <button class="ml-3 btn btn-primary shadow-md mr-2 w-48" type="submit">Filter</button>
            </form>
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
                @forelse($order as $each)
                <tr class="intro-x">

                    <td class="w-40 !py-4"> <a href="" class="underline decoration-dotted whitespace-nowrap">#ODR-{{$each->id}}</a> </td>
                    <td class="w-40">
                        <a href="" class="font-medium whitespace-nowrap">{{$each->user->full_name}}</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$each->address->province}}</div>
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
                            <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview{{$each->id}}"> <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status </a>
                        </div>
                    </td>
                </tr>
                <!-- BEGIN: Modal Toggle -->

                <!-- BEGIN: Modal Content -->
                <div id="header-footer-modal-preview{{$each->id}}" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- BEGIN: Modal Header -->
                            <div class="modal-header">
                                <h2 class="font-medium text-base mr-auto">Change Status</h2>

                            </div> <!-- END: Modal Header -->
                            <!-- BEGIN: Modal Body -->
                            <form method="post" action="{{route('order.status',$each->id)}}">
                            @csrf

                            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                <div class="col-span-12 sm:col-span-6"> <label for="modal-form-6" class="form-label">Status</label> <select id="modal-form-6" class="form-select" name="status_change">

                                        <option value="Waiting for confirm" {{$each->status === 'Waiting for Confirm' ? 'selected':''}}>Waiting For Confirm</option>
                                        <option value="Confirmed"{{$each->status=== 'Confirmed' ? 'selected':''}}>Confirmed</option>=
                                        <option value="Completed"{{$each->status=== 'Completed' ? 'selected':''}}>Completed</option>
                                        <option value="Canceled"{{$each->status=== 'Canceled' ? 'selected':''}}>Canceled</option>
                                    </select> </div>
                            </div> <!-- END: Modal Body -->

                            <!-- BEGIN: Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                             <button type="submit" class="btn btn-primary w-20">Change</button>
                            </div> <!-- END: Modal Footer -->
                            </form>
                        </div>
                    </div>
                </div> <!-- END: Modal Content -->
                @empty
                    <td class="flex justify-center items-center">
                        <p>No Order Available</p>
                    </td>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->

    </div>



@endsection
