@extends('layouts.ship')
@section('content')
    <!-- BEGIN: General Report -->
    <div class="col-span-12 mt-8">
        <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                SHIPPER
            </h2>
            <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-lucide="credit-card" class="report-box__icon text-pending"></i>

                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{$count}}</div>
                        <div class="text-base text-slate-500 mt-1">Đơn hàng chờ bạn giao</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="overflow-x-auto mt-8" >
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th class="whitespace-nowrap">ID</th>
                <th class="whitespace-nowrap">TÊN KHÁCH HÀNG</th>
                <th class="whitespace-nowrap">THANH TOÁN</th>
                <th class="whitespace-nowrap">TỔNG TIỀN</th>
                <th class="whitespace-nowrap">TRẠNG THÁI</th>
                <th class="whitespace-nowrap"></th>

            </tr>
            </thead>
            <tbody>
            @forelse($data as $each)
            <tr>
                <td>{{$each->id}}</td>
                <td>{{$each->user->full_name}}</td>
                <td>{{$each->payment_method()}}</td>
                <td>{{number_format($each->total, 0, '', '.')}}</td>
                <td class="text-success">{{$each->status()}}</td>
                <td><div class="flex justify-center items-center">

                        <a class="flex items-center text-primary whitespace-nowrap mr-5" href="{{route('invoice',$each->id)}}"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Xem hóa đơn </a>
                        <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview{{$each->id}}"> <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Thay đổi </a>
                    </div></td>
                <div id="header-footer-modal-preview{{$each->id}}" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- BEGIN: Modal Header -->
                            <div class="modal-header">
                                <h2 class="font-medium text-base mr-auto">Thay đổi trạng thái</h2>

                            </div> <!-- END: Modal Header -->
                            <!-- BEGIN: Modal Body -->
                            <form method="post" action="{{route('order.change',$each->id)}}">
                                @csrf

                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                    <div class="col-span-12 sm:col-span-6"> <label for="modal-form-6" class="form-label">Trạng thái</label> <select id="modal-form-6" class="form-select" name="status_change">


                                            <option value="Confirmed"{{$each->status=== 'Confirmed' ? 'selected':''}}>Đã xác nhận</option>
                                            <option value="Completed" {{$each->status === 'Completed' ? 'selected':''}}>Đã giao hàng</option>
                                            <option value="Canceled"{{$each->status=== 'Canceled' ? 'selected':''}}>Đã hủy</option>
                                        </select> </div>
                                </div> <!-- END: Modal Body -->

                                <!-- BEGIN: Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Hủy</button>
                                    <button type="submit" class="btn btn-primary w-20">OK</button>
                                </div> <!-- END: Modal Footer -->
                            </form>
                        </div>
                    </div>

            </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Không có đơn hàng nào</td>
                    </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <!-- END: General Report -->
@endsection
