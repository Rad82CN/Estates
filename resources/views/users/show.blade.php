@extends('layouts.layout')

@section('title', $user->name)

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">

        @include('shared.success-msg')

        <div class="mt-3">
            @include('users.shared.user-card')       
        </div>

    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.top-deals')
    </div>
</div>

@endsection