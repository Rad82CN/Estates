@extends('layouts.layout')

@section('title', 'Create Contract')

@section('content')
<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')     
    </div>

    <div class="col-6">
        @include('contracts.shared.create-contract-card')
    </div>

    <div class="col-3">
        @include('shared.top-deals')
    </div>
</div>
@endsection