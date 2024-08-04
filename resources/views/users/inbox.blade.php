@extends('layouts.layout')

@section('title', 'Inbox')

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        
        @forelse ( $requests as $request )
            <div class="mt-3">
                @include('users.shared.request')
            </div>
        @empty
            <p class="text-center mt-3">No results has been found!</p>
        @endforelse

    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.top-users')
    </div>
</div>

@endsection