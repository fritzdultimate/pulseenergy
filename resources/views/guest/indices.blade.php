@extends('guest.layouts.app')

@section('title', env('APP_NAME') . ' | Indices')

@section('content')
<div class="forex_trading_box" data-v-95023dce="">
    <div class="product_banner padding_100" data-v-95023dce="">
        <div class="wrap" data-v-95023dce="">
            <div class="banner-con" data-v-95023dce="">
                <div class="dl" data-v-95023dce="">
                    <h1 class="pub_banner_tit" data-v-95023dce="">
                        What is index trading?
                    </h1>
                    <p data-v-95023dce="">
                        Index trading refers to those well-known indices that investors trade on a global scale. An index reflects the average price trend of a particular stock portfolio, and it can reflect the
                        performance of stocks in different markets. Investors can trade the fluctuation of the index price with buy and sell in order to make profit from the price difference.
                    </p>
                   
                </div>
                <div class="dr" data-v-95023dce=""><img src="{{ asset('guest/img/indices.a16d9e9.png') }}" alt="" data-v-95023dce="" /></div>
            </div>
        </div>
        <img src="{{ asset('guest/img/indices.a16d9e9.png') }}" alt="" class="banner-2" data-v-95023dce="" /> <img src="{{ asset('guest/img/indices-m.8e5ea1f.png') }}" alt="" class="banner-m" data-v-95023dce="" />
    </div>

    <div class="product_table bg_FAFAFA padding_100" data-v-95023dce="">
        <div class="wrap" data-v-95023dce="">
            <h2 class="h2_tit" data-v-95023dce="">Index Trading Market</h2>
            <p class="p_des" data-v-95023dce="">
                The index trading market has different regional indices such as Nikkei index and Germany DAX30 index or so, there are also different industry indice such as foreign exchange index and commodity index
                or so; the well-known global indice are Dow Jones index, Nasdaq index, France FRA40 Index, Standard &amp; Poor's Index, Taiwan Index, etc.
            </p>
            <div class="symbol-list d-flex justify-content-center border-0" data-v-21a7c375="" data-v-95023dce="">
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                    {
                    "width": 770,
                    "height": 450,
                    "symbolsGroups": [
                    {
                        "name": "Indices",
                        "originalName": "Indices",
                        "symbols": [
                        {
                            "name": "FOREXCOM:SPXUSD",
                            "displayName": "S&P 500"
                        },
                        {
                            "name": "FOREXCOM:NSXUSD",
                            "displayName": "US 100"
                        },
                        {
                            "name": "FOREXCOM:DJI",
                            "displayName": "Dow 30"
                        },
                        {
                            "name": "INDEX:NKY",
                            "displayName": "Nikkei 225"
                        },
                        {
                            "name": "INDEX:DEU40",
                            "displayName": "DAX Index"
                        },
                        {
                            "name": "FOREXCOM:UKXGBP",
                            "displayName": "UK 100"
                        }
                        ]
                    }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "light",
                    "isTransparent": false,
                    "locale": "en"
                }
                    </script>
                </div>
            </div>
           
        </div>
    </div>
    <div class="product_why padding_50" data-v-95023dce="">
        <div class="wrap" data-v-95023dce="">
            <div class="product_why_con" data-v-95023dce="">
                <div class="dl" data-v-95023dce="">
                    <h2 class="h2_tit" data-v-95023dce="">Why do we invest in an index market?</h2>
                    <p class="p_des" data-v-95023dce="">
                        The Index investment and the market has many advantages for retail investors. Since the Forex trading market operates in 24 hours, investors can trade at any time, the index trading market has
                        a huge trading volume, the index market is transparent and fair, and investors' benefits can be protected. More importantly, Index trading can be traded bi-directional, it provides a higher
                        chance to make a profit during both price rise and fall, investors can also &quot;Gain big with small capital&quot; under the high leverage and low transaction cost.
                    </p>
                </div>
                <div class="dr" data-v-95023dce=""><img src="{{ asset('guest/img/indices_img.fc1e6a2.png') }}" alt="" data-v-95023dce="" /></div>
            </div>
        </div>
    </div>
    <div class="product_how padding_100" data-v-95023dce="">
        <div class="wrap" data-v-95023dce="">
            <h2 class="h2_tit" data-v-95023dce="">How to learn and invest in index trading?</h2>
            <p class="p_des" data-v-95023dce="">
                For those who are beginners in the index trading market, the learning direction for index trading and investment should start with basic concepts on various indices, video demonstration and guideline
                on various indices, study the Index market news on various indices and the Index strategy analysis on various indices as well.
            </p>
            
        </div>
    </div>
  
</div>
@endsection
@push('top')
    <link rel="stylesheet" href="{{ asset('guest/css/forex-trading.css') }}" />
@endpush