<div class="header-nav-m" data-v-bd520568="">
    <div class="wrap" data-v-bd520568="">
        <div class="flex_sb_cen" data-v-bd520568="">
            <a href="{{ route('guest.index') }}" aria-current="page" class="logo-link nuxt-link-exact-active nuxt-link-active" data-v-bd520568="">
                <img src="{{ asset('guest/img/logo-desktop-dark1.png') }}" alt="" class="logo-img" data-v-bd520568="" /> 
                <!-- <img src="{{ asset('guest/img/logo-m.2e2e371.png') }}" alt="" class="logo-img-m" data-v-bd520568="" /> -->
                <img src="{{ asset('guest/img/logo-desktop-dark1.png') }}" style="width:140px; height:25px;" alt="" class="logo-img-m" data-v-bd520568="" />
            </a>
            <div class="dr" data-v-bd520568="">
                <a href="@guest {{ route('login') }} @else  {{ route('user.dashboard') }} @endguest" class="btn_sty nav-login" data-v-bd520568="">
                    @guest Log In @else Dashboard @endguest
                </a>
                <div class="meun-btn" data-v-bd520568="">
                    <div class="css-570oto epdric71" data-v-bd520568="">
                        <div class="css-who1rx epdric72" data-v-bd520568=""></div>
                        <div class="css-who1rx epdric72" data-v-bd520568=""></div>
                        <div class="css-who1rx epdric72" data-v-bd520568=""></div>
                        <div class="css-who1rx epdric72" data-v-bd520568=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-menu animate__animate" data-v-bd520568="">
        <div role="tablist" aria-multiselectable="true" class="el-collapse header_collapse" data-v-bd520568="">
            <div class="el-collapse-item" data-v-bd520568="">
                <div role="tab" aria-controls="el-collapse-content-8530" aria-describedby="el-collapse-content-8530">
                    <a href="/" role="button" id="el-collapse-head-8530" tabindex="0" class="el-collapse-item__header">
                        Home
                        {{-- <i class="el-collapse-item__arrow el-icon-arrow-right"></i> --}}
                    </a>
                </div>
          
            </div>
            <div class="el-collapse-item" data-v-bd520568="">
                <div role="tab" aria-controls="el-collapse-content-5669" aria-describedby="el-collapse-content-5669">
                    <a href="/faq" role="button" id="el-collapse-head-5669" tabindex="0" class="el-collapse-item__header">FAQ
                        {{-- <i class="el-collapse-item__arrow el-icon-arrow-right"></i> --}}
                    </a>
                </div>
            
            </div>
            <div class="el-collapse-item" data-v-bd520568="">
                <a href="/plans" role="tab" aria-controls="el-collapse-content-5669" aria-describedby="el-collapse-content-5669">
                    <div role="button" id="el-collapse-head-5669" tabindex="0" class="el-collapse-item__header">Plans
                        {{-- <i class="el-collapse-item__arrow el-icon-arrow-right"></i> --}}
                    </div>
                </a>
            </div>
            
            
            <div class="el-collapse-item" data-v-bd520568="">
                <div role="tab" aria-controls="el-collapse-content-5400" aria-describedby="el-collapse-content-5400">
                    <div  role="button" id="el-collapse-head-5400" tabindex="0" class="el-collapse-item__header">About Us<i class="el-collapse-item__arrow el-icon-arrow-right"></i></div>
                </div>
                <div role="tabpanel" aria-hidden="true" aria-labelledby="el-collapse-head-5400" id="el-collapse-content-5400" class="el-collapse-item__wrap" style="display: none;">
                    <div class="el-collapse-item__content">
                        <div class="header_m_top" data-v-bd520568="">
                            <div class="font_1" data-v-bd520568="">About {{ env('APP_NAME') }}</div>
                            <div class="font_2" data-v-bd520568="">
                                {{ env('APP_NAME') }} sets high standards to its services because quality is just as decisive for us as for our clients. We believe that versatile financial services require versatility in thinking and a unified policy of business principles.
                                Our mission is to keep pace with global market demands and approach our clients’ investment goals with an open mind.
                            </div>
                        </div>
                        <div class="header_m_bot" data-v-bd520568="">
                            <ul data-v-bd520568="">
                                <li data-v-bd520568="">
                                    <a href="{{ route('guest.about-us') }}" data-v-bd520568="">
                                        About Us
                                    </a>
                                </li>
                                <li data-v-bd520568="">
                                    <a href="{{ route('guest.funds-protection') }}" data-v-bd520568="">
                                        Client Funds Protection
                                    </a>
                                </li>
                                <li data-v-bd520568="">
                                    <a href="{{ route('guest.terms') }}" data-v-bd520568="">
                                        Terms & Conditions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="el-collapse-item" data-v-bd520568="">
                <div role="tab" aria-controls="el-collapse-content-9056" aria-describedby="el-collapse-content-9056">
                    <div role="button" id="el-collapse-head-9056" tabindex="0" class="el-collapse-item__header">
                        <style>
                            #yt-widget[data-theme="light"] .yt-servicelink, #yt-widget[data-theme="light"] .yt-servicelink:first-letter{
                                display : none !important;
                            }
                        </style>
                        <div id="ytWidget" class="hidden-sm"></div>
                        <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=true" type="text/javascript"></script>
                    </div>
                </div>
                
            </div>
            <div class="el-collapse-item right_none m_header_menu" data-v-bd520568="">
                <div role="tab" aria-controls="el-collapse-content-8753" aria-describedby="el-collapse-content-8753">
                    <div role="button" id="el-collapse-head-8753" tabindex="0" class="el-collapse-item__header">
                        <div class="m_bot_header" data-v-bd520568=""><a class="a2" data-v-bd520568="">Trader</a> <span data-v-bd520568="">|</span> <a class="a1" data-v-bd520568="">Partners</a></div>
                        <i class="el-collapse-item__arrow el-icon-arrow-right"></i>
                    </div>
                </div>
                <div role="tabpanel" aria-hidden="true" aria-labelledby="el-collapse-head-8753" id="el-collapse-content-8753" class="el-collapse-item__wrap" style="display: none;">
                    <div class="el-collapse-item__content"></div>
                </div>
            </div>
        </div>
    </div>
</div>