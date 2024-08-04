@extends('layouts.layout')

@section('title', 'Showing an Estate')

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">

        @include('shared.success-msg')

        <div class="mt-3">
            @include('estates.shared.estate-card')
        </div>

    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.top-users')
    </div>
</div>

@endsection