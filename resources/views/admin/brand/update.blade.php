@extends('layouts.admin')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Add New Brand
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form method="post" action="{{route('brand.update',$brand['id'])}}">

                @csrf
                @method('PUT')
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Brand Name</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" value="{{$brand['name']}}" name="name">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Slug</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" value="{{$brand['slug']}}" aria-describedby="input-group-1" name="slug">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Active Status</label>
                        <div class="form-switch mt-2">
                            <input type="checkbox" class="form-check-input" name="status" value="{{$brand['status']}}">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Description</label>
                        <div class="mt-2 " >
                            <textarea name="description" class="form-control" cols="64px" rows="6">{{$brand['description']}}</textarea>

                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>

@endsection

