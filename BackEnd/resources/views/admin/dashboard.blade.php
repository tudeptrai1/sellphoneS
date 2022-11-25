@extends('layouts.admin')
@section('content')
    <!-- BEGIN: General Report -->
    <div class="col-span-12 mt-8">
        <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                BÁO CÁO CHUNG
            </h2>
            <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <a href="{{route('order')}}">
                        <div class="flex">
                            <i data-lucide="shopping-cart" class="report-box__icon text-primary"></i>

                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{$data['order']}}</div>
                        <div class="text-base text-slate-500 mt-1"> Đơn hàng</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <a href="{{route('new_order')}}">
                        <div class="flex">

                            <i data-lucide="credit-card" class="report-box__icon text-pending"></i>

                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{$data['new_order']}}</div>
                        <div class="text-base text-slate-500 mt-1">Đơn hàng mới</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <a href="{{route('product')}}">
                        <div class="flex">
                            <i data-lucide="monitor" class="report-box__icon text-warning"></i>

                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{$data['product']}}</div>
                        <div class="text-base text-slate-500 mt-1">Sản phẩm</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <a href="{{route('user')}}">
                        <div class="flex">
                            <i data-lucide="user" class="report-box__icon text-success"></i>

                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{$data['user']}}</div>
                        <div class="text-base text-slate-500 mt-1">Khách hàng</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">

                        <div class="flex">
                            <i data-lucide="user" class="report-box__icon text-success"></i>

                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{$data['admin']}}</div>
                        <div class="text-base text-slate-500 mt-1">Admin</div>

                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <a href="{{route('brand')}}">
                        <div class="flex">
                            <i data-lucide="database" class="report-box__icon text-danger"></i>

                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{$data['brand']}}</div>
                        <div class="text-base text-slate-500 mt-1">Tổng nhãn hàng</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">

                            <div class="flex">
                                <i data-lucide="dollar-sign" class="report-box__icon text-success"></i>

                            </div>
                            <div class="text-3xl font-medium leading-8 mt-6">{{number_format($data['total'], 0, '', '.')}} VND</div>
                            <div class="text-base text-slate-500 mt-1">Tổng doanh thu</div>

                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- END: General Report -->
@endsection
