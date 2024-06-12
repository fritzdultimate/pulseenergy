@extends('guest.layouts.app')

@section('title', env('APP_NAME') . ' | Best Forex, Commodity, Indices, Share Trading Platform')

@section('content')
<div class="forex_trading_box" data-v-5ec21712="">
    <div class="product_banner padding_100" data-v-5ec21712="">
        <div class="wrap" data-v-5ec21712="">
            <div class="banner-con" data-v-5ec21712="">
                <div class="dl" data-v-5ec21712="">
                    <h1 class="pub_banner_tit" data-v-5ec21712="">
                        What is stock trading?
                    </h1>
                    <p data-v-5ec21712="">
                        Stock trading refers to trading behavior of investors buying and selling shares of companies that have been issued and listed at market prices. When investors buy or sell stocks, the price
                        difference creates profit chances during stock price fluctuation.
                    </p>
                    
                </div>
                <div class="dr" data-v-5ec21712=""><img src="{{ asset('guest/img/stocks.2d4cc98.png') }}" alt="" data-v-5ec21712="" /></div>
            </div>
        </div>
        <img src="{{ asset('guest/img/stocks.2d4cc98.png') }}" alt="" class="banner-2" data-v-5ec21712="" /> <img src="{{ asset('guest/img/stocks-m.cda968b.png') }}" alt="" class="banner-m" data-v-5ec21712="" />
    </div>

    <div class="product_table bg_FAFAFA padding_100" data-v-5ec21712="">
        <div class="wrap" data-v-5ec21712="">
            <h2 class="h2_tit" data-v-5ec21712="">Stock Trading Market</h2>
            <p class="p_des" data-v-5ec21712="">
                Different countries have their own stock trading markets. From the perspective of global stock investment markets, these well-known stocks are: Apple, Amazon, Facebook, American Express, Microsoft,
                Intel, IBM, Cisco, etc.
            </p>
            <div class="symbol-list d-flex justify-content-center border-0" data-v-21a7c375="" data-v-5ec21712="">
                <!-- TradingView Widget BEGIN -->
                <div style="height: 500px" class="w-100">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                        {
                        "colorTheme": "light",
                        "dateRange": "12M",
                        "exchange": "US",
                        "showChart": true,
                        "locale": "en",
                        "largeChartUrl": "",
                        "isTransparent": false,
                        "showSymbolLogo": false,
                        "showFloatingTooltip": false,
                        "width": "100%",
                        "height": "100%",
                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                        "gridLineColor": "rgba(240, 243, 250, 0)",
                        "scaleFontColor": "rgba(106, 109, 120, 1)",
                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                    }
                        </script>
                    </div>
                </div>
                <!-- TradingView Widget END -->
            </div>
           
        </div>
    </div>
    <div class="product_why padding_50" data-v-5ec21712="">
        <div class="wrap" data-v-5ec21712="">
            <div class="product_why_con" data-v-5ec21712="">
                <div class="dl" data-v-5ec21712="">
                    <h2 class="h2_tit" data-v-5ec21712="">Why do we invest in the stock market?</h2>
                    <p class="p_des" data-v-5ec21712="">
                        The stock investment and the market has many advantages for retail investors. Investors can trade at any time, the stock market is transparent and fair, and investors' benefits can be
                        protected. More importantly, stock trading can be traded bi-directional, it provides a higher chance to make a profit during both price rise and fall, investors can also &quot;Gain big with
                        small capital&quot; under the high leverage and low transaction cost.
                    </p>
                </div>
                <div class="dr" data-v-5ec21712=""><img src="{{ asset('guest/img/stock_img.7c8a545.png') }}" alt="" data-v-5ec21712="" /></div>
            </div>
        </div>
    </div>
    <div class="product_how padding_100" data-v-5ec21712="">
        <div class="wrap" data-v-5ec21712="">
            <h2 class="h2_tit" data-v-5ec21712="">How to learn and invest in stock trading?</h2>
            <p class="p_des" data-v-5ec21712="">
                For those who are beginners in the stock trading market, the learning direction for stock trading and investment should start with basic concepts on different stocks, video demonstration and guideline
                on different stocks, study the stock market news on different stocks and the stock strategy analysis on different stocks as well.
            </p>
           
        </div>
    </div>
    
</div>
@endsection
@push('top')
    <link rel="stylesheet" href="{{ asset('guest/css/forex-trading.css') }}" />
@endpush