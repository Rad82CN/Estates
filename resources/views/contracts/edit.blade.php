@extends('layouts.layout')

@section('title', 'Edit Contract')

@section('content')
<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')     
    </div>

    <div class="col-6">

        @include('shared.success-msg')

        <div class="mt-3">
            @include('contracts.shared.edit-contract')
        </div>

    </div>

    <div class="col-3">
        @include('shared.top-users')
    </div>
</div>
@endsection