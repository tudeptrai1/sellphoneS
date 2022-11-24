@extends('layouts.admin')

@section('content')
    @if(session('message'))
        <div id="basic-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center"> <i data-lucide="check-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">{{session('message')}}</div>
                            <div class="text-slate-500 mt-2"></div>
                        </div>
                        <div class="px-5 pb-8 text-center"> <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button> </div>
                    </div>
                </div>
            </div>

        </div> <!-- END: Modal Content -->
    @endif

    <h2 class="intro-y text-lg font-medium mt-10">
        Color
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{route('memory.create')}}">  <button class="btn btn-primary shadow-md mr-2">Thêm mới </button></a>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> In </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Xuất file Excel </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Xuất file PDF </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">    </div>
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
                    <th class="whitespace-nowrap"></th>
                    <th class="whitespace-nowrap">GIÁ TRỊ</th>
                    <th class="whitespace-nowrap"></th>
                    <th class="text-center whitespace-nowrap"></th>
                    <th class="text-center whitespace-nowrap">HÀNH ĐỘNG</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $each)
                    <tr class="intro-x">
                        <td class="w-40"></td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{$each['value']}}</a>
                        </td>
                        <td>

                        </td>

                        <td class="w-40"></td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a href="{{route('memory.edit',$each['id'])}}" class="flex items-center mr-3" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Sửa </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal{{$each['id']}}"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Xóa </a>
                            </div>
                        </td>
                    </tr>
                    <!-- BEGIN: Delete Confirmation Modal -->
                    <div id="delete-confirmation-modal{{$each['id']}}" class="modal" tabindex="-1" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <form method="post" action="{{route('memory.destroy',$each['id'])}}">
                                        @csrf
                                        @method('delete')
                                        <div class="p-5 text-center">
                                            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Bạn chắc chứ?</div>
                                            <div class="text-slate-500 mt-2">
                                                Bạn thật sự muốn xóa bản ghi này sao ??
                                                <br>
                                                Hành động này không thể hoàn tác.
                                            </div>
                                        </div>

                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Hủy</button>
                                            <button type="submit" class="btn btn-danger w-24">Xóa</button>
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

    </div>
    <div class="">{{$data->links('vendor.pagination.bootstrap-4')}}</div>



    <script>

    </script>
@endsection
