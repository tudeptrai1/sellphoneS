@extends('layouts.admin')

@section('content')
    <!-- BEGIN: Content -->

        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Chi tiết đơn hàng
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md mr-2">  <a href="{{route('invoice',$order->id)}}" class="dropdown-item"> Xuất file PDF </a></button>

            </div>
        </div>
        <!-- BEGIN: Transaction Details -->
        <div class="intro-y grid grid-cols-11 gap-5 mt-5">
            <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
                <div class="box p-5 rounded-md">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Chi tiết đơn hàng</div>
                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview" class="flex items-center ml-auto text-primary"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Thay đổi </a>
                    </div>
                    <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> ID: <a href="" class="underline decoration-dotted ml-1">{{$order['id']}}</a> </div>
                    <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Ngày đặt hàng: {{$order->date()}} </div>
                    <div class="flex items-center mt-3"> <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i> Trạng thái đơn: {{$order->status()}} </div>
                </div>
                <div class="box p-5 rounded-md mt-5">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Chi tiết khách hàng</div>
                        <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Chi tiết </a>
                    </div>
                    <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>Tên: <a href="" class="underline decoration-dotted ml-1">{{$order->address->receive_name}}</a> </div>
                    <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Số điện thoại: {{$order->address->receive_phone}} </div>
                    <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Địa chỉ : {{$order->abc()}} </div>
                </div>
                <div class="box p-5 rounded-md mt-5">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Chi tiết thanh toán</div>
                    </div>
                    <div class="flex items-center">
                        <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Phương thức thanh toán:
                        <div class="ml-auto">{{$order->payment_method()}}</div>
                    </div>
                    <div class="flex items-center mt-3">
                        <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Tổng tiền ({{$order->quantity}} sản phẩm):
                        <div class="ml-auto">{{number_format($order->total, 0, '', '.')}} VND</div>
                    </div>
                    <div class="flex items-center mt-3">
                        <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Tiền ship :
                        <div class="ml-auto">0</div>
                    </div>
                    <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
                        <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Tổng tiền:
                        <div class="ml-auto">{{number_format($order->total, 0, '', ',')}} VND</div>
                    </div>
                </div>
                <div class="box p-5 rounded-md mt-5">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Thông tin giao hàng</div>
                        <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="map-pin" class="w-4 h-4 mr-2"></i> Thông tin </a>
                    </div>
                    <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>  Rocket Express </div>
                    <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Tracking Number: {{$order->id}}<i data-lucide="copy" class="w-4 h-4 text-slate-500 ml-2"></i> </div>
                    <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Địa chỉ: 54/9 Dao Duy Anh </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
                <div class="box p-5 rounded-md">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Chi tiết đơn hàng</div>
                        <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="plus" class="w-4 h-4 mr-2"></i>  </a>
                    </div>
                    <div class="overflow-auto lg:overflow-visible -mt-3">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="whitespace-nowrap !py-5">Sản phẩm</th>
                                <th class="whitespace-nowrap text-right">Giá</th>
                                <th class="whitespace-nowrap text-right">Số lượng</th>
                                <th class="whitespace-nowrap text-right">Tổng tiền</th>
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
                    <h2 class="font-medium text-base mr-auto">Thay đổi trạng thái</h2>

                </div> <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <form method="post" action="{{route('order.status',$order->id)}}">
                    @csrf

                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-6"> <label for="modal-form-6" class="form-label">Trạng thái</label> <select id="modal-form-6" class="form-select" name="status_change">

                                <option value="Waiting for confirm" {{$order->status === 'Waiting for Confirm' ? 'selected':''}}>Chờ xác nhận</option>
                                <option value="Confirmed"{{$order->status=== 'Confirmed' ? 'selected':''}}>Đã xác nhận</option>

                                <option value="Canceled"{{$order->status=== 'Canceled' ? 'selected':''}}>Đã hủy</option>
                            </select> </div>
                    </div> <!-- END: Modal Body -->

                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Hủy</button>
                        <button type="submit" class="btn btn-primary w-20">Thay đổi</button>
                    </div> <!-- END: Modal Footer -->
                </form>
            </div>
        </div>
    </div> <!-- END: Modal Content -->
        <!-- END: Transaction Details -->

    <!-- END: Content -->
@endsection
