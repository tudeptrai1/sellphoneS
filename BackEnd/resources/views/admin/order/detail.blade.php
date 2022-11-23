@extends('layouts.admin')

@section('content')
    <!-- BEGIN: Content -->

        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Order Details
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md mr-2">Print</button>
                <div class="dropdown ml-auto sm:ml-0">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="{{route('invoice',$order->id)}}" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Export PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Transaction Details -->
        <div class="intro-y grid grid-cols-11 gap-5 mt-5">
            <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
                <div class="box p-5 rounded-md">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Order Details</div>
                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview" class="flex items-center ml-auto text-primary"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Change Status </a>
                    </div>
                    <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> ID: <a href="" class="underline decoration-dotted ml-1">{{$order['id']}}</a> </div>
                    <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Purchase Date: {{$order->date()}} </div>
                    <div class="flex items-center mt-3"> <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i> Transaction Status: {{$order->status}} </div>
                </div>
                <div class="box p-5 rounded-md mt-5">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Buyer Details</div>
                        <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> View Details </a>
                    </div>
                    <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Name: <a href="" class="underline decoration-dotted ml-1">{{$order->address->receive_name}}</a> </div>
                    <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Phone Number: {{$order->address->receive_phone}} </div>
                    <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Address: {{$order->abc()}} </div>
                </div>
                <div class="box p-5 rounded-md mt-5">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Payment Details</div>
                    </div>
                    <div class="flex items-center">
                        <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Payment Method:
                        <div class="ml-auto">{{$order->payment_method}}</div>
                    </div>
                    <div class="flex items-center mt-3">
                        <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Total Price ({{$order->quantity}} items):
                        <div class="ml-auto">{{number_format($order->total, 0, '', '.')}} VND</div>
                    </div>
                    <div class="flex items-center mt-3">
                        <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Total Shipping Cost :
                        <div class="ml-auto">0</div>
                    </div>
                    <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
                        <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Grand Total:
                        <div class="ml-auto">{{number_format($order->total, 0, '', ',')}} VND</div>
                    </div>
                </div>
                <div class="box p-5 rounded-md mt-5">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Shipping Information</div>
                        <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="map-pin" class="w-4 h-4 mr-2"></i> Tracking Info </a>
                    </div>
                    <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Courier: Rocket Express </div>
                    <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Tracking Number: {{$order->id}}<i data-lucide="copy" class="w-4 h-4 text-slate-500 ml-2"></i> </div>
                    <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Address: 54/9 Dao Duy Anh </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
                <div class="box p-5 rounded-md">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Order Details</div>
                        <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Notes </a>
                    </div>
                    <div class="overflow-auto lg:overflow-visible -mt-3">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="whitespace-nowrap !py-5">Product</th>
                                <th class="whitespace-nowrap text-right">Unit Price</th>
                                <th class="whitespace-nowrap text-right">Qty</th>
                                <th class="whitespace-nowrap text-right">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($order->detail as $detail)
                            <tr>
                                <td class="!py-4">
                                    <div class="flex items-center">
                                        <a href="" class="font-medium whitespace-nowrap ml-4">{{$detail->product->name}}</a>
                                    </div>
                                </td>
                                <td class="text-right">{{number_format($detail->product->sell_price, 0, '', ',')}}</td>
                                <td class="text-right">{{$detail->quantity}}</td>
                                <td class="text-right">{{number_format($detail->quantity*$detail->product->sell_price, 0, '', ',')}}</td>
                            </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- BEGIN: Modal Content -->
    <div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Change Status</h2>

                </div> <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <form method="post" action="{{route('order.status',$order->id)}}">
                    @csrf

                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-6"> <label for="modal-form-6" class="form-label">Status</label> <select id="modal-form-6" class="form-select" name="status_change">

                                <option value="Waiting for confirm" {{$order->status === 'Waiting for Confirm' ? 'selected':''}}>Waiting For Confirm</option>
                                <option value="Confirmed"{{$order->status=== 'Confirmed' ? 'selected':''}}>Confirmed</option>=
                                <option value="Completed"{{$order->status=== 'Completed' ? 'selected':''}}>Completed</option>
                                <option value="Canceled"{{$order->status=== 'Canceled' ? 'selected':''}}>Canceled</option>
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
        <!-- END: Transaction Details -->

    <!-- END: Content -->
@endsection
