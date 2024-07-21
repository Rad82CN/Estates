@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')     
    </div>

    <div class="col-6">

        @include('shared.success-msg')

        @include('estates.share-estate')
        
        @forelse ($estates as $estate)
            <div class="mt-3">
                @include('estates.shared.estate-card')
            </div>
        @empty
            <p class="text-center mt-3">No results has been found!</p>
        @endforelse

        <div class="mt-3">
            {{ $estates->links() }}
        </div>
    </div>
    <div class="col-3">
        @include('shared.search-bar')

        @include('shared.top-deals')
    </div>
</div>

@endsection