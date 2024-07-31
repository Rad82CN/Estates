@extends('layouts.layout')

@section('title', 'All Contracts')

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        
        @forelse ( $contracts as $contract )
            <div class="mt-3">
                @include('contracts.shared.request-card')
            </div>
        @empty
            <p class="text-center mt-3">No results has been found!</p>
        @endforelse

    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.top-deals')
    </div>
</div>

@endsection