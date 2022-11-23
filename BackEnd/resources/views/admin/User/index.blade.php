@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Content -->

        <h2 class="intro-y text-lg font-medium mt-10">
            User List
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">

                <div class="hidden xl:block mx-auto text-slate-500"></div>
                <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                    </div>

                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                    <tr>

                        <th class="whitespace-nowrap">USER</th>
                        <th class="text-center whitespace-nowrap">PHONE</th>
                        <th class="text-center whitespace-nowrap">Address</th>
                        <th class="text-center whitespace-nowrap">TOTAL ORDERS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr class="intro-x">
                        <td class="!py-3.5">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <a href="" class="font-medium whitespace-nowrap">{{$user->full_name}}</a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$user->email}}</div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center"> <a class="flex items-center justify-center decoration-dotted" href="javascript:;">{{$user->phone}}</a> </td>

                        <td class="w-40">
                            <div class="flex items-center justify-center "> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{$user->address}} </div>
                        </td>
                        <td class="text-center">{{$user->total}}</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">

                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal{{$user->id}}"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                    <!-- BEGIN: Delete Confirmation Modal -->
                    <div id="delete-confirmation-modal{{$user->id}}" class="modal" tabindex="-1" aria-hidden="true">
                        <form method="post" action="{{route('user.destroy',$user->id)}}">
                            @csrf
                            @method('delete')
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Are you sure?</div>
                                        <div class="text-slate-500 mt-2">
                                            Do you really want to delete these records?
                                            <br>
                                            This process cannot be undone.
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                        <button type="submit" class="btn btn-danger w-24">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>

                    <!-- END: Delete Confirmation Modal -->
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->

        </div>


    <!-- END: Content -->
@endsection
