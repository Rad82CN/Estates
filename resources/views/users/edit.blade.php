@extends('layouts.layout')

@section('title', 'Edit Profile')

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        <div class="mt-3">
            @include('users.shared.user-edit-card')
        </div>

    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.top-users')
    </div>
</div>

@endsection