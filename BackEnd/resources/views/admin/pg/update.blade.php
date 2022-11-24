@extends('layouts.admin')

@section('content')

    <div class="intro-y flex items-center mt-8">

        <h2 class="text-lg font-medium mr-auto">
            Sửa
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form method="post" action="{{route('pg.update',$pg['id'])}}">

                @csrf
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Tên</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" value="{{$pg->name}}" name="name">
                        @if($errors->has('name'))
                            <div class="text-danger ">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Nhãn hàng </label>
                        <select class="tom-select w-full" name="brand_id">
                            @foreach ($brand as $each)
                                @if ($each->id === $pg->brand_id)
                                    <option value="{{$each->id}}" selected="true" >{{$each->name}}</option>
                                @endif
                                <option value="{{$each->id}}" >{{$each->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('brand_id'))
                            <div class=" text-danger">{{ $errors->first('brand_id') }}</div>
                        @endif
                    </div>
                    <div class="mt-3">
                        <label>Mô tả</label>
                        <div class="mt-2 " >
                            <textarea name="description" class="form-control" cols="64px" rows="6"></textarea>
                        </div>
                        @if($errors->has('description'))
                            <div class="text-danger ">{{ $errors->first('description') }}</div>
                        @endif
                    </div>
                    <!-- BEGIN: Multiple File Upload -->
                    <div class="intro-y box mt-5">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Upload ảnh
                            </h2>
                        </div>
                        <div class="mt-5">
                            @foreach($color as $each)
                                <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                    <div class="form-label xl:w-64 xl:!mr-10">
                                        <div class="text-left ml-6">
                                            <div class="flex items-center">
                                                <div class="font-medium ">{{$each->name}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full mt-3 xl:mt-0 flex-1">
                                        <div id="multiple-file-upload" class="p-5">
                                            <input name="{{$each->id}}_image[]" type="file" multiple accept="image/*"/>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                    <!-- END: Multiple File Upload -->

                    <!-- BEGIN: Product Variant -->
                    <div class="intro-y box p-5 mt-5">
                        <div class=" input_fields_wrap border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Cấu hình sản phẩm </div>
                            <div class="mt-5">
                                <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                    <div class="form-label sm:!mr-10">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Cấu hình sản phẩm</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-5">
                                @foreach($tech_spec as $each)
                                    <div class="sm:grid grid-cols-6 gap-2 p-3">
                                        <div class="input-group">

                                            <div id="input-group-email" class="input-group-text"> <i data-lucide="phone" class="w-5 h-5"></i> </div> <input type="text" class="form-control" placeholder="{{$each->name}}" @if(isset($ts)) @foreach(array_keys($ts) as $temp) @if($temp===$each->name) value="{{$ts[$temp]}}" @endif  @endforeach @endif name="tech[{{$each->id}}]">

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- END: Product Variant -->

                    <div class="text-right mt-5">
                        <a href="{{route('pg')}}" class="btn btn-outline-secondary w-24 mr-1">Hủy</a>
                        <button type="submit" class="btn btn-primary w-24">Lưu</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>

@endsection

