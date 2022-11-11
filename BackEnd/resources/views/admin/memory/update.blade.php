@extends('layouts.admin')

@section('content')

    <div class="intro-y flex items-center mt-8">

        <h2 class="text-lg font-medium mr-auto">
            Edit Memory
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form method="post" action="{{route('memory.update',$memory['id'])}}">

                @csrf
                <div class="intro-y box p-5">

                    <div>
                        <label for="crud-form-1" class="form-label">Memory Value</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" value="{{$memory->value}}" name="name">
                        @if($errors->has('value'))
                            <div class="text-danger ">{{ $errors->first('value') }}</div>
                        @endif
                    </div>

                    <div class="text-right mt-5">
                        <a href="{{route('memory')}}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>

@endsection

