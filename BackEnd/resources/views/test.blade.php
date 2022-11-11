@extends('layouts.admin')
@section('content')
<!-- BEGIN: Modal Toggle -->
<div class="text-center">
    <a href="javascript:;" data-toggle="modal" data-target="#basic-modal" class="btn btn-primary" onclick="show1()">Show Modal</a>
</div>
<!-- END: Modal Toggle -->
<!-- BEGIN: Modal Content -->
<div id="basic-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-10 text-center"> This is totally awesome blank modal! </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->

@endsection
