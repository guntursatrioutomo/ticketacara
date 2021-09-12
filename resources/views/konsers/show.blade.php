@extends('layouts.master')

@section('content')

<div class="bg-soft p-xs-y-7 full-height">
    <div class="container">
       
        @include('konsers.partials.card-no-poster', ['konser' => $konser])
    </div>
</div>
@endsection

@push('beforeScripts')
    <script src="https://checkout.stripe.com/checkout.js"></script>
@endpush 