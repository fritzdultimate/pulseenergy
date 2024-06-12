@extends('guest.layouts.app')

@section('title', env('APP_NAME') . ' | Forex')

@section('content')
<div class="forex_trading_box" data-v-e3d36226="">
    <div class="product_banner padding_100" data-v-e3d36226="">
        <div class="wrap" data-v-e3d36226="">
            <div class="banner-con" data-v-e3d36226="">
                <div class="dl" data-v-e3d36226="">
                    <h1 class="pub_banner_tit" data-v-e3d36226="">
                        What is Forex trading?
                    </h1>
                    <p data-v-e3d36226="">
                        The basic term of Foreign Exchange is investors who exchange A country's currency to B country's currency for international commerce purposes. Forex investment and trading also refer to
                        investors who trade the Forex pairs rate to obtain the profit from the Forex trading market. Many investors also trade in the Forex market in order to hedge their risks in other financial
                        markets. Forex products are traded in the form of currency pairs, and by buying one currency while selling another currency in a group of currency pairs, investors can make a profit when the
                        price is higher than their buy in.
                    </p>
                   
                </div>
                <div class="dr" data-v-e3d36226=""><img src="{{  asset('guest/img/forex.8929845.png') }}" alt="" data-v-e3d36226="" /></div>
            </div>
        </div>
        <img src="{{  asset('guest/img/forex.8929845.png') }}" alt="" class="banner-2" data-v-e3d36226="" /> <img src="{{  asset('guest/img/forex-m.3dd6e54.png') }}" alt="" class="banner-m" data-v-e3d36226="" />
    </div>

    <div class="product_table bg_FAFAFA padding_100" data-v-e3d36226="">
        <div class="wrap" data-v-e3d36226="">
            <h2 class="h2_tit" data-v-e3d36226="">Forex Trading Market</h2>
            <p class="p_des" data-v-e3d36226="">
                Forex trading market is usually named as the ''FX market'', or ''FX'', this is a trading market for investors to trade currency pairs in different countries. Investors can invest, trade, or use
                hedging goals, etc. Forex trading markets cover almost all the currencies of mainstream countries, EUR/USD, GBP/EUR, GBP/USD, JPY/USD, CHF/USD, JPY/AUD, AUD/USD are common.
            </p>
            <div class="symbol-list border-0 d-flex justify-content-center" data-v-21a7c375="" data-v-e3d36226="">
                      <!-- TradingView Widget BEGIN -->
                      <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                        {
                        "width": "100%",
                        "height": 400,
                        "currencies": [
                        "EUR",
                        "USD",
                        "JPY",
                        "GBP",
                        "CHF",
                        "AUD",
                        "CAD",
                        "NZD"
                        ],
                        "isTransparent": false,
                        "colorTheme": "light",
                        "locale": "en"
                    }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
            </div>
            
        </div>
    </div>
    <div class="product_why padding_50" data-v-e3d36226="">
        <div class="wrap" data-v-e3d36226="">
            <div class="product_why_con" data-v-e3d36226="">
                <div class="dl" data-v-e3d36226="">
                    <h2 class="h2_tit" data-v-e3d36226="">Why do we invest in the Forex market?</h2>
                    <p class="p_des" data-v-e3d36226="">
                        The Forex investment and the market has many advantages for retail investors. Since the Forex trading market operates in 24 hours, investors can trade at any time; the Forex trading market has
                        a huge trading volume, the Forex market is transparent and fair, and benefits can be protected. More importantly, Forex trading can be traded bi-directional, it provides a higher chance to
                        make a profit during both price rise and fall, investors can also &quot;Gain big with small capital&quot; under the high leverage and low transaction cost.
                    </p>
                </div>
                <div class="dr" data-v-e3d36226=""><img src="{{  asset('guest/img/forex_img.6611f56.png') }}" alt="" data-v-e3d36226="" /></div>
            </div>
        </div>
    </div>
    <div class="product_how padding_100" data-v-e3d36226="">
        <div class="wrap" data-v-e3d36226="">
            <h2 class="h2_tit" data-v-e3d36226="">How to learn and invest in Forex trading?</h2>
            <p class="p_des" data-v-e3d36226="">
                For those who are beginners in the Forex trading market, the learning direction for Forex trading and investment should start with basic concepts, video demonstration, study the Forex markets news and
                the Forex strategy analysis, etc.
            </p>
          
        </div>
    </div>
    
@endsection
@push('top')
    <link rel="stylesheet" href="{{ asset('guest/css/forex-trading.css') }}" />
@endpush