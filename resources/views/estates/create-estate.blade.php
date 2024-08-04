@extends('layouts.layout')

@section('title', 'Share an Estate')

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        <div class="mt-3">
            <h4>Creating your post</h4>
            <hr>
            @include('estates.shared.create-estate-card')
        </div>

    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.top-users')
    </div>
</div>

@endsection