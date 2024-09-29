
@extends('layouts.app')
@section('content')
@include('subview.create')

<div class="container py-3">
    <h3 class="text-center">Create Todo</h3>
    <div class="row">
        <div class="col-xl-12 text-end">
        <a href="javascript:void(0)" id="create-todo-btn" class="btn btn-primary"> Create Todo </a>
        </div>
    </div>

</div>

@endsection
