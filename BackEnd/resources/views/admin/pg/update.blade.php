@extends('layouts.admin')

@section('content')

    <div class="intro-y flex items-center mt-8">

        <h2 class="text-lg font-medium mr-auto">
            Edit Product Group
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form method="post" action="{{route('pg.update',$pg['id'])}}">

                @csrf
                <div class="intro-y box p-5">

                    <div>
                        <label for="crud-form-1" class="form-label">Product Group Name</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" value="{{$pg->name}}" name="name">
                        @if($errors->has('name'))
                            <div class="text-danger ">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Brand </label>
                        <select class="tom-select w-full" name="brand_id">
                            @foreach ($data as $each)
                                @if ($each->id == $pg->id)
                                    <option value="{{$each->id}}" selected="true" >{{$each->name}}</option>
                                @endif
                                <option value="{{$each->id}}" >{{$each->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('brand_id'))
                            <div class=" text-danger">{{ $errors->first('brand_id') }}</div>
                        @endif
                    </div>

                    <div class="text-right mt-5">
                        <a href="{{route('pg')}}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>

@endsection

