@extends('guest.layouts.app')

@section('title', env('APP_NAME') .' | Frequently Asked Questions')

@section('content')
    <div class="page_spread" data-v-971fb12a="">
        <div class="div1 padding_50 bg_FAFAFA" data-v-971fb12a="">
            <div class="wrap" data-v-971fb12a="">
                <h1 class="text_1" data-v-971fb12a="">Frequently Asked Questions</h1>
            </div>
        </div>
       
        <div class="div3 padding_50" data-v-971fb12a="">
            <div class="wrap" data-v-971fb12a="">
                <div class="text_1" data-v-971fb12a="">Frequently asked questions</div>
                <div class="div3_con" data-v-971fb12a="">
                    <div class="dl" data-v-971fb12a="">
                        <div role="tablist" aria-multiselectable="true" class="el-collapse" data-v-971fb12a="">
                            @foreach (faqs() as $id => $faq)
                            <div class="el-collapse-item" data-v-971fb12a="">
                                <div role="tab" aria-controls="el-collapse-content-{{ $id }}"
                                    aria-describedby="el-collapse-content-{{ $id }}">
                                    <div role="button" id="el-collapse-head-{{ $id }}" tabindex="0"
                                        class="el-collapse-item__header">
                                        <div class="div_x" data-v-971fb12a="">
                                            {{ $faq->question }}
                                        </div>
                                        <i class="el-collapse-item__arrow el-icon-arrow-right"></i>
                                    </div>
                                </div>
                                <div role="tabpanel" aria-hidden="true" aria-labelledby="el-collapse-head-{{ $id }}"
                                    id="el-collapse-content-{{ $id }}" class="el-collapse-item__wrap" style="display:none;">
                                    <div class="el-collapse-item__content">
                                        <div data-v-971fb12a="">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="dr" data-v-971fb12a="">
                        <div class="dr_con" data-v-971fb12a="">
                            <div class="text_2" data-v-971fb12a="">Choose a Plan that suits your budget</div>
                            <div class="text_3" data-v-971fb12a="">
                                We have highly flexible plans tailored to different income range and which you can upgrade or degrade whenever you feel like.
                            </div>
                            <a href="{{ route('register') }}" class="btn_sty btn_sx" data-v-971fb12a="">OPEN AN ACCOUNT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('top')
    <link rel="stylesheet" href="{{ asset('guest/css/faqs.css') }}" />
@endpush