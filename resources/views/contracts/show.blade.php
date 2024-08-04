@extends('layouts.layout')

@section('title', 'Contract')

@section('content')
<div class="row">

    <div class="col-2"></div>

    <div class="col-8">
        @include('shared.success-msg')

        <div class="mt-3">
            @include('contracts.shared.contract-card')
        </div>
    </div>
    
    <div class="col-2"></div>
    
</div>
@endsection