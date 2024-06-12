@extends('guest.layouts.app')

@section('title', env('APP_NAME') .' | Best Forex, Commodity, Indices, Share Trading Platform')

@section('content')
    <div class="page_spread" data-v-971fb12a="">
        <div class="div1 padding_50 bg_FAFAFA" data-v-971fb12a="">
            <div class="wrap" data-v-971fb12a="">
                <h1 class="text_1" data-v-971fb12a="">Investment Plans</h1>
            </div>
        </div>
       
        <div class="div3 padding_50" data-v-971fb12a="">
            <div class="wrap" data-v-971fb12a="">
                @include('guest.layouts.investment-plans', ['plans' => $plans])
            </div>
        </div>
    </div>
@endsection

@push('top')
    <link rel="stylesheet" href="{{ asset('guest/css/faqs.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/investment-table.css') }}" />
@endpush