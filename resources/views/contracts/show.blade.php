@extends('layouts.layout')

@section('title', 'Contract')

@section('content')
<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')     
    </div>

    <div class="col-6">
        <h4>Contract page</h4>
    </div>
    <div class="col-3">
        @include('shared.top-deals')
    </div>
</div>
@endsection