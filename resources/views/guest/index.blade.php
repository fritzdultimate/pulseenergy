@extends('guest.layouts.app')

@section('title', env('APP_NAME') . ' | Best Forex, Commodity, Indices, Share Trading Platform')

@section('content')
<div class="Content" data-v-dea1eb4e="">
    <div class="TrumpBiden_div" data-v-50e0b330="" data-v-dea1eb4e="">
        <div class="wrap" data-v-50e0b330="">
            <div class="tb_con" data-v-50e0b330="">
                <div class="text_1" data-v-50e0b330="">Trending Financial Instruments. Opportunities Are Everywhere</div>
                <div class="flex_cen_cen" data-v-50e0b330="">
                    <div class="text_left" data-v-50e0b330="">
                        <div class="text_3" data-v-50e0b330="">The stock market is soaring, missed the best investment timing?</div>
                        <div class="text_3" data-v-50e0b330="">Too many products in the financial market and don't know where to start?</div>
                        <div class="text_3" data-v-50e0b330="">Are you worried about the risks and if it is too difficult to invest in the international market?</div>
                    </div>
                </div>
                <div class="text_4" data-v-50e0b330="">{{ env('APP_NAME') }} is the world's leading financial investment platform providing one-stop investment services for millions of investors.</div>
                <a class="tb_con_btn" data-v-50e0b330="">TRADE THE VOLATILITY</a>
            </div>
        </div>
        <div class="tb_jt_close" data-v-50e0b330="">
            <img class="jt_open_icon" src="{{ asset('guest/img/trump_jt.342efd0.svg') }}" alt="" style="display: ;" data-v-50e0b330="" />
            <img
                class="jt_close_icon"
                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDQwIDIwIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGc+CiAgICAgICAgICAgIDxnPgogICAgICAgICAgICAgICAgPGc+CiAgICAgICAgICAgICAgICAgICAgPHBhdGggZmlsbD0iIzAwMCIgZD0iTTIwIDIwYzExLjA0NiAwIDIwLTguOTU0IDIwLTIwSDBjMCAxMS4wNDYgOC45NTQgMjAgMjAgMjB6IiBvcGFjaXR5PSIuODUxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtNzAwIC00MzYpIHRyYW5zbGF0ZSgwIDkwKSB0cmFuc2xhdGUoNzAwIDM0NikiLz4KICAgICAgICAgICAgICAgICAgICA8ZyBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNy4xNTUgNy4xMzlsLS4wMi0uMDIxYy0uMDItLjAxNS0uMDQtLjAyOS0uMDYzLS4wNEwuMzI3IDEuMjQ2Qy4yMTYgMS4xNS4xNTMgMS4wMTkuMTUzLjg4My4xNTIuNzQ3LjIxMy42MTYuMzIzLjUyLjQzMy40MjIuNTgzLjM2Ny43NC4zNjdjLjE1NiAwIC4zMDMuMDUzLjQxMy4xNWw2LjM5MyA1LjUyNUwxMy44MjEuNDg0Yy4xMS0uMTAzLjI2NC0uMTYuNDI1LS4xNi4xNTIgMCAuMjk3LjA1LjQwNi4xNDMuMTEzLjA5NC4xNzguMjI0LjE4LjM2LjAwNC4xMzYtLjA1NS4yNjgtLjE2My4zNjZMNy45NyA3LjEyNGMtLjExLjA5OC0uMjYuMTUzLS40MTYuMTUyLS4xNDggMC0uMjkxLS4wNDgtLjQtLjEzN3oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03MDAgLTQzNikgdHJhbnNsYXRlKDAgOTApIHRyYW5zbGF0ZSg3MDAgMzQ2KSBtYXRyaXgoMSAwIDAgLTEgMTIuNSAxMCkiLz4KICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPgo="
                alt=""
                style="display: none;"
                data-v-50e0b330=""
            />
        </div>
    </div>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="IndexBanner first-slide" data-v-34c28f3f="" data-v-dea1eb4e="">
                <div class="banner-wrap" data-v-34c28f3f="">
                    <div class="IndexBanner_con" data-v-34c28f3f="">
                        <div class="dl" data-v-34c28f3f="">
                            <h2 class="h2_tit" data-v-34c28f3f="">
                                Your Investment Future Starts Here
                            </h2>
                            <h4 class="lead mt-4">
                                We are here to help you reach your financial goals. We offer a variety of investment options, so you can find the perfect fit for your needs. We also have a team of experts who can help you make informed investment decisions
                            </h4>
                            @guest
                            <div class="banner_btns" data-v-34c28f3f="">
                                <a href="{{ route('register') }}" class="a1" data-v-34c28f3f="">Join Now</a>
                                <a href="{{ route('login') }}" class="a2" data-v-34c28f3f="">Log In</a>
                            </div>
                            @endguest
                        </div>
                        <div class="dr" data-v-34c28f3f="">
                            <img src="{{ asset('guest/img/banner_2.5a3648e.png') }}" alt="" class="animate__animated animate__fadeInUp img_down" data-v-34c28f3f="" />
                            <img src="{{ asset('guest/img/banner_3.273c1b4.png') }}" alt="" class="animate__animated animate__fadeInDown img_up" data-v-34c28f3f="" />
                            <img src="{{ asset('guest/img/banner_1.673784a.png') }}" alt="" class="img_big" data-v-34c28f3f="" />
                        </div>
                    </div>
                </div>
                <!-- <img src="https://images.unsplash.com/photo-1615992174118-9b8e9be025e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="img_m" data-v-34c28f3f="" /> -->
            </div>
        </div>
        <div class="item">
            <div class="IndexBanner second-slide" data-v-34c28f3f="" data-v-dea1eb4e="">
                <div class="banner-wrap" data-v-34c28f3f="">
                    <div class="IndexBanner_con" data-v-34c28f3f="">
                        <div class="dl" data-v-34c28f3f="">
                            <h2 class="h2_tit" data-v-34c28f3f="">
                                Make Investments with a new level of confidence
                            </h2>
                            <h4 class="lead mt-4">
                                With our secured platform you can invest with confidence knowing that your return are being added to your account and that We are committed to providing our clients with the best possible investment experience. We are always innovating to improve our platform and services.
                            </h4>
                            @guest                                
                            <div class="banner_btns" data-v-34c28f3f="">
                                <a href="{{ route('register') }}" class="a1" data-v-34c28f3f="">Join Now</a>
                                <a href="{{ route('login') }}" class="a2" data-v-34c28f3f="">Log In</a>
                            </div>
                            @endguest
                        </div>
                        <div class="dr" data-v-34c28f3f="">
                            <img src="{{ asset('guest/img/banner_2.5a3648e.png') }}" alt="" class="animate__animated animate__fadeInUp img_down" data-v-34c28f3f="" />
                            <img src="{{ asset('guest/img/banner_3.273c1b4.png') }}" alt="" class="animate__animated animate__fadeInDown img_up" data-v-34c28f3f="" />
                            <img src="{{ asset('guest/img/banner_1.673784a.png') }}" alt="" class="img_big" data-v-34c28f3f="" />
                        </div>
                    </div>
                </div>
                <!-- <img src="https://images.unsplash.com/photo-1615992174118-9b8e9be025e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="img_m" data-v-34c28f3f="" /> -->
            </div>
        </div>
    </div>
                                <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
        "symbols": [
        {
            "proName": "FOREXCOM:SPXUSD",
            "title": "S&P 500"
        },
        {
            "proName": "FOREXCOM:NSXUSD",
            "title": "US 100"
        },
        {
            "proName": "FX_IDC:EURUSD",
            "title": "EUR to USD"
        },
        {
            "proName": "BITSTAMP:BTCUSD",
            "title": "Bitcoin"
        },
        {
            "proName": "BITSTAMP:ETHUSD",
            "title": "Ethereum"
        }
        ],
        "showSymbolLogo": true,
        "colorTheme": "light",
        "isTransparent": false,
        "displayMode": "adaptive",
        "locale": "en"
    }
        </script>
    </div>
    <!-- TradingView Widget END -->
    <div class="Search_Symbol padding_100" data-v-471b6f6c="">
        <div class="wrap" data-v-471b6f6c="">
            <h3 class="text-center h3_tit" data-v-2d749e81="">
                Our Clients Know
            </h3>
            <p class="text-center p1 p2 lead" data-v-2d749e81="">
                {{ env('APP_NAME') }} focuses on Global execution services for Institutional Investors
            </p>
           <div class="row mt-3">
            <div class="col-md-7">
                <div class="about-us-cont">
                    At {{ env('APP_NAME') }}, we provide a cutting-edge asset management platform that opens doors to lucrative daily profits through our meticulously crafted investment strategies. Our dedicated team of seasoned experts harnesses their wealth of knowledge and experience to navigate various financial avenues, encompassing short-term trading, swaps, arbitrage, forex, currency options, and an array of other instruments.
                    <br>
                    Distinguished by its flexibility, our platform offers users different distinct investment plans, each tailored to different time horizons and boasting escalating profitability potential. With extended investment durations come amplified returns – a testament to the careful calibration of our strategies.
                    <br>
                    At the culmination of the investment cycle, the principal capital (initial deposit) is gracefully restituted to the investor, underscoring our commitment to transparency and safeguarding your resources. Further heightening convenience, we facilitate transactions and profit disbursement across a spectrum of cryptocurrencies, aligning with the contemporary preferences of our diverse clientele.
                    <br>
                    Elevate your financial journey with {{ env('APP_NAME') }}, where dynamic investment methodologies converge with a user-centric ethos, promising not just profits, but also a pathway to informed and empowered investment decisions."
                </div>
            </div>
            <div class="col-md-5">
                <img class="about-us-img img-fluid" src="{{ asset('guest/img/sps-universal-MnPF-0DTQ5c-unsplash.jpg') }}">
            </div>
           </div>
        </div>
    </div>
    <div class="scroll_letterList" data-v-dea1eb4e="">
        <div class="wrap" data-v-dea1eb4e="">
            <div class="el-carousel el-carousel--vertical" data-v-dea1eb4e="">
                <div class="el-carousel__container" style="height: 40px;"><!----><!----></div>
                <!---->
            </div>
        </div>
    </div>
    <div class="ActivityList" data-v-0489c498="" data-v-dea1eb4e=""></div>
    <div class="Search_Symbol padding_100 bg_FAFAFA" data-v-2d749e81="" data-v-dea1eb4e="">
        <div class="wrap" data-v-2d749e81="">
            <div class="flex_sb_cen" data-v-2d749e81="">
                <div class="dl" data-v-2d749e81="">
                    <h3 class="h3_tit" data-v-2d749e81="">Trade Popular Assets Grasp Investment Opportunities</h3>
                    <p class="p1 p2" data-v-2d749e81="">Become one of the millions investors in the world and invest in global trending products</p>
                    <ul data-v-2d749e81="">
                        <li data-v-2d749e81="">
                            Forex Market: Includes major global currencies such as the US dollar, Euro, Japan Yen, Pound Sterling, Australian dollar, Canadian dollar, New Zealand dollar, Swiss Franc and so on;
                        </li>
                        <li data-v-2d749e81="">Commodity Market: Includes Gold, Silver, Crude oil, Palladium, Platinum, Copper, Nickel, and natural gas;</li>
                        <li data-v-2d749e81="">Index Market: Includes trading of international stock market indices such as the United States, Europe, Asia, Australia, etc;</li>
                        <li data-v-2d749e81="">Stock Market: Includes all blue-chip stocks and high-tech companies such as Amazon, Apple, and Tesla in the states;</li>
                        <li data-v-2d749e81="">Cryptocurrency Market: Includes popular products such as Bitcoin, Ethereum, and Litecoin, etc;</li>
                    </ul>
                    <p class="p1" data-v-2d749e81="">
                        {{ env('APP_NAME') }} provides all free of charge real-time quotation on global assets, professional trading strategies of third party institutions, financial market analysis, 24-hour customer
                        support to let investor trade worry-free.
                    </p>
                    @guest                        
                    <a href="{{ route('register') }}" class="btn_sty btn_sx" data-v-2d749e81="">
                        Get started
                    </a>
                    @endguest
                </div>
                <div class="dr" data-v-2d749e81="">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "showChart": true,
                                "locale": "en",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "100%",
                                "height": "600",
                                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 0)",
                                "scaleFontColor": "rgba(106, 109, 120, 1)",
                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                "tabs": [
                                {
                                    "title": "Indices",
                                    "symbols": [
                                    {
                                        "s": "FOREXCOM:SPXUSD",
                                        "d": "S&P 500"
                                    },
                                    {
                                        "s": "FOREXCOM:NSXUSD",
                                        "d": "US 100"
                                    },
                                    {
                                        "s": "FOREXCOM:DJI",
                                        "d": "Dow 30"
                                    },
                                    {
                                        "s": "INDEX:NKY",
                                        "d": "Nikkei 225"
                                    },
                                    {
                                        "s": "INDEX:DEU40",
                                        "d": "DAX Index"
                                    },
                                    {
                                        "s": "FOREXCOM:UKXGBP",
                                        "d": "UK 100"
                                    }
                                    ],
                                    "originalTitle": "Indices"
                                },
                                {
                                    "title": "Futures",
                                    "symbols": [
                                    {
                                        "s": "CME_MINI:ES1!",
                                        "d": "S&P 500"
                                    },
                                    {
                                        "s": "CME:6E1!",
                                        "d": "Euro"
                                    },
                                    {
                                        "s": "COMEX:GC1!",
                                        "d": "Gold"
                                    },
                                    {
                                        "s": "NYMEX:CL1!",
                                        "d": "Crude Oil"
                                    },
                                    {
                                        "s": "NYMEX:NG1!",
                                        "d": "Natural Gas"
                                    },
                                    {
                                        "s": "CBOT:ZC1!",
                                        "d": "Corn"
                                    }
                                    ],
                                    "originalTitle": "Futures"
                                },
                                {
                                    "title": "Bonds",
                                    "symbols": [
                                    {
                                        "s": "CME:GE1!",
                                        "d": "Eurodollar"
                                    },
                                    {
                                        "s": "CBOT:ZB1!",
                                        "d": "T-Bond"
                                    },
                                    {
                                        "s": "CBOT:UB1!",
                                        "d": "Ultra T-Bond"
                                    },
                                    {
                                        "s": "EUREX:FGBL1!",
                                        "d": "Euro Bund"
                                    },
                                    {
                                        "s": "EUREX:FBTP1!",
                                        "d": "Euro BTP"
                                    },
                                    {
                                        "s": "EUREX:FGBM1!",
                                        "d": "Euro BOBL"
                                    }
                                    ],
                                    "originalTitle": "Bonds"
                                },
                                {
                                    "title": "Forex",
                                    "symbols": [
                                    {
                                        "s": "FX:EURUSD",
                                        "d": "EUR/USD"
                                    },
                                    {
                                        "s": "FX:GBPUSD",
                                        "d": "GBP/USD"
                                    },
                                    {
                                        "s": "FX:USDJPY",
                                        "d": "USD/JPY"
                                    },
                                    {
                                        "s": "FX:USDCHF",
                                        "d": "USD/CHF"
                                    },
                                    {
                                        "s": "FX:AUDUSD",
                                        "d": "AUD/USD"
                                    },
                                    {
                                        "s": "FX:USDCAD",
                                        "d": "USD/CAD"
                                    }
                                    ],
                                    "originalTitle": "Forex"
                                }
                                ]
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Elevating Experiences: Unveiling Our Premium Client Offerings -->
    <div class="RichInvestment padding_100 bg_FAFAFA elavating-experience" data-v-55244464="" data-v-dea1eb4e="">
        <div class="wrap" data-v-55244464="">
            <h2 class="h2_tit text_center" data-v-55244464="">
                Elevating Experiences: Unveiling Our Premium Client Offerings
            </h2>
            <p class="p_des text_center" data-v-55244464="">
                Empowering Your Journey with Tailored Excellence and Distinctive Client Care.
            </p>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="d-flex flex-column gap-3 border p-3 rounded m-3 elavating-experience-item">
                        <img class="img-fluid" style="height: 70px;" src="{{ asset('guest/img/icon_1.9b6ff8c.svg') }}" alt="" data-v-1bf88a20="">
                        <h2 class="text-center h5" data-v-1bf88a20="">Investing</h2>
                        <p class="text-center">
                            A wide selection of investment product to help build diversified portfolio
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="d-flex flex-column gap-3 border p-3 rounded m-3 elavating-experience-item">
                        <img class="img-fluid" style="height: 70px;" src="{{ asset('guest/img/icon_1.9b6ff8c.svg') }}" alt="" data-v-1bf88a20="">
                        <h2 class="text-center h5" data-v-1bf88a20="">Investment Planning</h2>
                        <p class="text-center">
                            A wide selection of investing strategies from seasoned portfolio managers
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="d-flex flex-column gap-3 border p-3 rounded m-3 elavating-experience-item">
                        <img class="img-fluid" style="height: 70px;" src="{{ asset('guest/img/icon_1.9b6ff8c.svg') }}" alt="" data-v-1bf88a20="">
                        <h2 class="text-center h5" data-v-1bf88a20="">Mutual Fund Advisor</h2>
                        <p class="text-center">
                            Specialized guidance from independent local advisor for hight-net-worth investors
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="d-flex flex-column gap-3 border p-3 rounded m-3 elavating-experience-item">
                        <img class="img-fluid" style="height: 70px;" src="{{ asset('guest/img/icon_1.9b6ff8c.svg') }}" alt="" data-v-1bf88a20="">
                        <h2 class="text-center h5" data-v-1bf88a20="">Unlimited rebalancing</h2>
                        <p class="text-center">
                            We rebalance your portfolio efficiently and automatically at no additional cost to you.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="d-flex flex-column gap-3 border p-3 rounded m-3 elavating-experience-item">
                        <img class="img-fluid" style="height: 70px;" src="{{ asset('guest/img/icon_1.9b6ff8c.svg') }}" alt="" data-v-1bf88a20="">
                        <h2 class="text-center h5" data-v-1bf88a20="">Smart portfolio</h2>
                        <p class="text-center">
                            A revolutionary, fully-automated investment advisory services
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="d-flex flex-column gap-3 border p-3 rounded m-3 elavating-experience-item">
                        <img class="img-fluid" style="height: 70px;" src="{{ asset('guest/img/icon_1.9b6ff8c.svg') }}" alt="" data-v-1bf88a20="">
                        <h2 class="text-center h5" data-v-1bf88a20="">Cost effective model</h2>
                        <p class="text-center">
                            Seamless access to top-tier investment management, minus excessive fees or account charges.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="Benefits-Trading padding_100" data-v-471b6f6c="">
        <div class="wrap" data-v-471b6f6c="">
            <p class="pub_tit_1 text_center" data-v-471b6f6c="">
                Make Profit Through {{ env('APP_NAME') }}
            </p>
            <div class="BT-con" data-v-471b6f6c="">
                <div data-v-471b6f6c="">
                    <h3 data-v-471b6f6c="">An easy to use trading platform</h3>
                    <p data-v-471b6f6c="">Respond to trading opportunities right away on a fast and powerful trading platforms and mobile app.</p>
                </div>
                <div data-v-471b6f6c="">
                    <h3 data-v-471b6f6c="">Diverse Trading Varieties</h3>
                    <p data-v-471b6f6c="">More than 80 currency pairs and precious metals are traded under optimal conditions, whether their prices are rising or falling.</p>
                </div>
                <div data-v-471b6f6c="">
                    <h3 data-v-471b6f6c="">Free Training Resources</h3>
                    <p data-v-471b6f6c="">Learn the trading skills through our training resources, including easy to understand courses that suitable for all different background and levels of investors.</p>
                </div>
                <div data-v-471b6f6c="">
                    <h3 data-v-471b6f6c="">Friendly &amp; Professional Localised Online Support</h3>
                    <p data-v-471b6f6c="">We are always ready to help you achieve your trading goals, from the moment you join {{ env('APP_NAME') }}.</p>
                </div>
                <div data-v-471b6f6c="">
                    <h3 data-v-471b6f6c="">Effective Risk Management</h3>
                    <p data-v-471b6f6c="">We Use stop loss and take profit to protect your capital and make your profit visible at any time.</p>
                </div>
                <div data-v-471b6f6c="">
                    <h3 data-v-471b6f6c="">Exclusive Customer Support Team</h3>
                    <p data-v-471b6f6c="">High volume Investors are eligible for personal account managers and customised analysis from {{ env('APP_NAME') }} analyst team.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="Benefits-Trading padding_100 bg_FAFAFA" data-v-471b6f6c="">
        <div class="wrap" data-v-471b6f6c="">
            <p class="pub_tit_1 text_center" data-v-471b6f6c="">
                Our Investment plans
            </p>
            <div class="" data-v-471b6f6c="">
                @include('guest.layouts.investment-plans', ['plans' => $plans])
            </div>
        </div>
    </div>

    <div class="FriendlyPlatform padding_100" data-v-be40b392="" data-v-dea1eb4e="">
        <div class="wrap" data-v-be40b392="">
            <div class="dt" data-v-be40b392="">
                <h2 class="h2_tit" data-v-be40b392="">
                    Nurturing Pillars
                </h2>
                <p class="p_des" data-v-be40b392="">
                    Fostering Trust, Transparency, and Lasting Connections for a Strong Foundation of Success
                </p>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="d-flex border-primar flex-column justify-content-center align-items-center p-4 gap-3 border pillers m-2">
                        <h3 class="font-weight-bold h4">
                            Accountability
                        </h3>
                        <p data-v-be40b392="">
                            Take responsibility. We learn from our failures and successes, and follow through on our promises to our team and our clients.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex border-primar flex-column justify-content-center align-items-center p-4 gap-3 border pillers m-2">
                        <h3 class="font-weight-bold h4">
                            Integrity
                        </h3>
                        <p data-v-be40b392="">
                            Do the right thing. We conduct ourselves and our work with honesty, determination and dedication to our mission.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex border-primar flex-column justify-content-center align-items-center p-4 gap-3 border pillers m-2">
                        <h3 class="font-weight-bold h4">
                            Communication
                        </h3>
                        <p data-v-be40b392="">
                            Communicate clearly and consistently. We build trusted and enduring relationships by being concise, credible, and direct.
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="MajorTrade padding_100" data-v-758fde10="" data-v-dea1eb4e="">
        <div class="wrap" data-v-758fde10="">
            <div class="MajorTrade_box flex_sb_cen" data-v-758fde10="">
                <div class="dl" data-v-758fde10="">
                    <h2 class="h2_tit" data-v-758fde10="">Trade Professional</h2>
                    <p class="p_des" data-v-758fde10="">{{ env('APP_NAME') }} - Join together the global financial market</p>
                    <ul data-v-758fde10="">
                        <li data-v-758fde10="">Millions of virtual fund to practice trading skills</li>
                        <li data-v-758fde10="">Share trading skills with millions of investors</li>
                        <li data-v-758fde10="">Practical trading to seize your investment opportunities</li>
                        <li data-v-758fde10="">Get your trading question solved right away with our 24 hours customer representative</li>
                    </ul>
                    <a href="{{ route('guest.about-us') }}" data-v-758fde10="">
                        More
                    </a>
                </div>
                <div class="dr" data-v-758fde10=""><img src="{{ asset('guest/img/major_bg.d9cdccd.png') }}" alt="" data-v-758fde10="" /></div>
            </div>
        </div>
    </div>
    <div class="RichInvestment padding_100 bg_FAFAFA" data-v-55244464="" data-v-dea1eb4e="">
        <div class="wrap" data-v-55244464="">
            <h2 class="h2_tit text_center" data-v-55244464="">
                Rich Investment Analysis
            </h2>
            <p class="p_des text_center" data-v-55244464="">
                Various knowledge systems such as financial data analysis, trading indicators, risk management, etc.
            </p>
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-transparent bg-non flush border-0 shadow-s">
                        <img class="card-img-top" src="{{ asset('guest/img/RichInvestment_1.13af1b6.png') }}" alt="" data-v-55244464="" />
                        <div class="card-body px-0">
                            <div class="card-text a2">
                                Expert strategy analysis, advance market layout.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent bg-non flush border-0 shadow-s">
                        <img class="card-img-top" src="{{ asset('guest/img/RichInvestment_2.954fc51.png') }}" alt="" data-v-55244464="" />
                        <div class="card-body px-0">
                            <div class="card-text a2">
                                Key information analysis to grasp profit opportunities.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent bg-non flush border-0 shadow-s">
                        <img class="card-img-top" src="{{ asset('guest/img/RichInvestment_3.221616b.png') }}" alt="" data-v-55244464="" />
                        <div class="card-body px-0">
                            <div class="card-text a2">
                                Basic investment learning and trading skills improvement.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent bg-non flush border-0 shadow-s">
                        <img class="card-img-top" src="{{ asset('guest/img/RichInvestment_4.5c22f67.png') }}" alt="" data-v-55244464="" />
                        <div class="card-body px-0">
                            <div class="card-text a2">
                                Online video learning skills are fully mastered.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Get_started padding_100" data-v-758ab95e="" data-v-dea1eb4e="">
        <div class="wrap" data-v-758ab95e="">
            <h2 class="h2_tit" data-v-758ab95e="">Start Trading In 3 Simple Steps</h2>
            <div class="Get_started_con" data-v-758ab95e="">
                <div class="dt" data-v-758ab95e="">
                    <div class="d1" data-v-758ab95e="">
                        <img
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iODAiIHZpZXdCb3g9IjAgMCA2MCA4MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyLjk2MjEgNC43NTQwNUg0MS4yNjIxVjc0LjY1NDFIMjYuMjYyMVYxOC4wNTRIMTIuOTYyMVY0Ljc1NDA1WiIgZmlsbD0iIzEyNUNCOSIvPgo8L3N2Zz4K"
                            alt=""
                            data-v-758ab95e=""
                        />
                        <div class="d1_b" data-v-758ab95e="">
                            <p class="p1" data-v-758ab95e="">Register</p>
                            <p class="p2" data-v-758ab95e="">Register an account with phone your e-mail address </p>
                        </div>
                    </div>
                    <div class="d2" data-v-758ab95e=""></div>
                    <div class="d1" data-v-758ab95e="">
                        <img
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iODAiIHZpZXdCb3g9IjAgMCA2MCA4MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTI2LjIzOTcgNDMuMjc2NUMzMC4zNzMgMzkuMDc2NSAzMy4zMDY0IDM1Ljc0MzEgMzUuMDM5NyAzMy4yNzY1QzM2LjgzOTcgMzAuNzQzMSAzNy43Mzk3IDI4LjMwOTggMzcuNzM5NyAyNS45NzY1QzM3LjczOTcgMjMuNjQzMSAzNi45NzMgMjEuNzA5OCAzNS40Mzk3IDIwLjE3NjVDMzMuOTA2NCAxOC41NzY1IDMxLjkzOTcgMTcuNzc2NSAyOS41Mzk3IDE3Ljc3NjVDMjUuMTM5NyAxNy43NzY1IDIwLjk3MyAyMC45MDk4IDE3LjAzOTcgMjcuMTc2NUw0LjUzOTcgMTkuNzc2NUM3LjgwNjM2IDE0LjcwOTggMTEuMzczIDEwLjg3NjUgMTUuMjM5NyA4LjI3NjQ2QzE5LjE3MyA1LjY3NjQ2IDI0LjEzOTcgNC4zNzY0NiAzMC4xMzk3IDQuMzc2NDZDMzYuMjA2NCA0LjM3NjQ2IDQxLjUwNjQgNi4zMDk4IDQ2LjAzOTcgMTAuMTc2NUM1MC42Mzk3IDEzLjk3NjUgNTIuOTM5NyAxOS4xNzY1IDUyLjkzOTcgMjUuNzc2NUM1Mi45Mzk3IDI5LjM3NjUgNTIuMDA2NCAzMi44NDMxIDUwLjEzOTcgMzYuMTc2NUM0OC4zMzk3IDM5LjQ0MzEgNDQuOTczIDQzLjY0MzEgNDAuMDM5NyA0OC43NzY1TDI3LjQzOTcgNjEuODc2NUg1NS4wMzk3Vjc1Ljg3NjVINS43Mzk3VjY0LjI3NjVMMjYuMjM5NyA0My4yNzY1WiIgZmlsbD0iIzEyNUNCOSIvPgo8L3N2Zz4K"
                            alt=""
                            data-v-758ab95e=""
                        />
                        <div class="d1_b" data-v-758ab95e="">
                            <p class="p1" data-v-758ab95e="">Verification</p>
                            <p class="p2" data-v-758ab95e="">
                                Verify your account by the email sent to the provided email address.
                            </p>
                        </div>
                    </div>
                    <div class="d2" data-v-758ab95e=""></div>
                    <div class="d1" data-v-758ab95e="">
                        <img
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iODAiIHZpZXdCb3g9IjAgMCA2MCA4MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTcuNDg3NDMgMTguOTI4MVY1LjYyODA3SDUwLjI4NzRWMTYuNDI4MUwzNS45ODc0IDMyLjcyODFDNDEuNTg3NCAzMy42NjE0IDQ1LjkyMDggMzYuMDI4MSA0OC45ODc0IDM5LjgyODFDNTIuMDU0MSA0My41NjE0IDUzLjU4NzQgNDcuODk0NyA1My41ODc0IDUyLjgyODFDNTMuNTg3NCA2MC4xNjE0IDUxLjA4NzQgNjUuOTI4MSA0Ni4wODc0IDcwLjEyODFDNDEuMTU0MSA3NC4yNjE0IDM0LjgyMDggNzYuMzI4MSAyNy4wODc0IDc2LjMyODFDMTkuMzU0MSA3Ni4zMjgxIDExLjUyMDggNzMuNTk0NyAzLjU4NzQzIDY4LjEyODFMOS45ODc0MyA1NS43MjgxQzE2LjU4NzQgNjAuMzk0NyAyMi40ODc0IDYyLjcyODEgMjcuNjg3NCA2Mi43MjgxQzMwLjgyMDggNjIuNzI4MSAzMy4zODc0IDYxLjk2MTQgMzUuMzg3NCA2MC40MjgxQzM3LjQ1NDEgNTguODk0NyAzOC40ODc0IDU2LjY5NDcgMzguNDg3NCA1My44MjgxQzM4LjQ4NzQgNTAuODk0NyAzNy4zMjA4IDQ4LjU5NDcgMzQuOTg3NCA0Ni45MjgxQzMyLjY1NDEgNDUuMTk0NyAyOS40MjA4IDQ0LjMyODEgMjUuMjg3NCA0NC4zMjgxQzIzLjA4NzQgNDQuMzI4MSAxOS45ODc0IDQ0Ljk2MTQgMTUuOTg3NCA0Ni4yMjgxVjM0LjcyODFMMjkuMzg3NCAxOC45MjgxSDcuNDg3NDNaIiBmaWxsPSIjMTI1Q0I5Ii8+Cjwvc3ZnPgo="
                            alt=""
                            data-v-758ab95e=""
                        />
                        <div class="d1_b" data-v-758ab95e="">
                            <p class="p1" data-v-758ab95e="">Investment</p>
                            <p class="p2" data-v-758ab95e="">
                                Select Invesment Plan, Invest to seize profit opportunities
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="reasons__account padding_100" data-v-cd66b8a2="" data-v-dea1eb4e="">
        <div class="wrap" data-v-cd66b8a2="">
            <h3 class="title_p1" data-v-cd66b8a2="">
                5 Reasons To Open An Account
            </h3>
            <div class="reason_item_list" data-v-cd66b8a2="">
                <div class="reason_item" data-v-cd66b8a2="">
                    <div data-v-cd66b8a2=""><i class="iconfont iconhelp" data-v-cd66b8a2=""></i></div>
                    <p data-v-cd66b8a2="">Multilingual 24x7 Professional Online Support</p>
                </div>
                <div class="reason_item" data-v-cd66b8a2="">
                    <div data-v-cd66b8a2=""><i class="iconfont iconlightning" data-v-cd66b8a2=""></i></div>
                    <p data-v-cd66b8a2="">Ultra fast, convenient fund withdrawal process</p>
                </div>
                
                <div class="reason_item" data-v-cd66b8a2="">
                    <div data-v-cd66b8a2=""><i class="iconfont iconcertification" data-v-cd66b8a2=""></i></div>
                    <p data-v-cd66b8a2="">Recognized by all over the globe</p>
                </div>
                <div class="reason_item" data-v-cd66b8a2="">
                    <div data-v-cd66b8a2=""><i class="iconfont icontime" data-v-cd66b8a2=""></i></div>
                    <p data-v-cd66b8a2="">Real time Interest Notification</p>
                </div>
                <div class="reason_item" data-v-cd66b8a2="">
                    <div data-v-cd66b8a2=""><i class="iconfont iconbullseye" data-v-cd66b8a2=""></i></div>
                    <p data-v-cd66b8a2="">Professional Market Analysis</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-news padding_100" data-v-01824219="" data-v-dea1eb4e="">
        <div class="wrap" data-v-01824219="">
            <div class="bottom-news-con" data-v-01824219="">
                <div class="dl" data-v-01824219="">
                    <div class="news-head" data-v-01824219=""><span data-v-01824219="">Economic Calendar</span></div>
                    <div class="calendar-list" data-v-de70479e="" data-v-01824219="">
                        <div class="calendar-body" style="height: 500px;" data-v-de70479e="">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>

                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                                        {
                                        "width": "100%",
                                        "height": "100%",
                                        "colorTheme": "light",
                                        "isTransparent": false,
                                        "locale": "en",
                                        "importanceFilter": "-1,0,1",
                                        "currencyFilter": "USD,EUR,ITL,NZD,CHF,AUD,FRF,JPY,ZAR,TRL,CAD,DEM,MXN,ESP,GBP"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
                <div class="dr" data-v-01824219="">
                    <div class="news-head" data-v-01824219=""><span data-v-01824219="">Market News</span></div>
                    <div class="art_list" style="height: 500px;" data-v-01824219="">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                    {
                                    "feedMode": "all_symbols",
                                    "colorTheme": "light",
                                    "isTransparent": false,
                                    "displayMode": "regular",
                                    "width": "100%",
                                    "height": "100%",
                                    "locale": "en"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('bottom')
<script>
    window.addEventListener("DOMContentLoaded", () => {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            smartSpeed: 1000,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            animateOut: "fadeOut",
            animateIn: "fadeIn",

            navText: ['<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9481 14.8285L10.5339 16.2427L6.29122 12L10.5339 7.7574L11.9481 9.17161L10.1196 11H17.6568V13H10.1196L11.9481 14.8285Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M4.22183 19.7782C-0.0739419 15.4824 -0.0739419 8.51759 4.22183 4.22183C8.51759 -0.0739419 15.4824 -0.0739419 19.7782 4.22183C24.0739 8.51759 24.0739 15.4824 19.7782 19.7782C15.4824 24.0739 8.51759 24.0739 4.22183 19.7782ZM5.63604 18.364C2.12132 14.8492 2.12132 9.15076 5.63604 5.63604C9.15076 2.12132 14.8492 2.12132 18.364 5.63604C21.8787 9.15076 21.8787 14.8492 18.364 18.364C14.8492 21.8787 9.15076 21.8787 5.63604 18.364Z" fill="currentColor" /></svg>', '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.0519 14.8285L13.4661 16.2427L17.7088 12L13.4661 7.7574L12.0519 9.17161L13.8804 11H6.34321V13H13.8803L12.0519 14.8285Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C24.0739 15.4824 24.0739 8.51759 19.7782 4.22183C15.4824 -0.0739417 8.51759 -0.0739417 4.22183 4.22183C-0.0739417 8.51759 -0.0739417 15.4824 4.22183 19.7782C8.51759 24.0739 15.4824 24.0739 19.7782 19.7782ZM18.364 18.364C21.8787 14.8492 21.8787 9.15076 18.364 5.63604C14.8492 2.12132 9.15076 2.12132 5.63604 5.63604C2.12132 9.15076 2.12132 14.8492 5.63604 18.364C9.15076 21.8787 14.8492 21.8787 18.364 18.364Z" fill="currentColor" /></svg>'],
        });
    });
</script>
@endpush
@push('top-override')
    <link rel="preload" as="image" href="https://images.unsplash.com/photo-1615992174118-9b8e9be025e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
    <link rel="preload" as="image" href="https://images.unsplash.com/photo-1523961131990-5ea7c61b2107?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80">

@endpush
@push('top')
    <link rel="stylesheet" href="{{ asset('guest/css/faqs.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/investment-table.css') }}" />
@endpush