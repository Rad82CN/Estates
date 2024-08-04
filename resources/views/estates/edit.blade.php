@extends('layouts.layout')

@section('title', 'Edit an Estate')

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        <div class="mt-3">
            <h4>Editing your post</h4>
            <hr>
            @include('estates.shared.edit-estate')
        </div>

    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.top-users')
    </div>
</div>

@endsection