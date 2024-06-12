<header class="header-div" data-v-36ac65e2="">
    <div class="pc_top" data-v-36ac65e2="">
        <div class="wrap" data-v-36ac65e2="">
            <div class="flex_sb_cen" data-v-36ac65e2="">
                <div data-v-36ac65e2="">
                    <a class="act_link" data-v-36ac65e2="">Trader</a> <span class="pc_top_sx" data-v-36ac65e2="">|</span>
                    <a class="par_a" data-v-36ac65e2="">
                        Partners
                        <img src="{{ asset('guest/img/par_fire.ee6d185.svg') }}" alt="" data-v-36ac65e2="" />
                    </a>

                    <span class="pc_top_sx" data-v-36ac65e2="">|</span>
                    <a class="par_a" data-v-36ac65e2="">
                        Insights
                    </a>
                </div>
                <div class="pc_top_flex" data-v-36ac65e2="">
                    <ul role="menubar" class="el-menu-my el-menu--horizontal el-menu" style="background-color: ;" data-v-36ac65e2="">
                        <li role="menuitem" aria-haspopup="true" class="el-submenu">
                            <div class="el-submenu__title" style="border-bottom-color: transparent; color: ; background-color: ;">
                                <style>
                                    #yt-widget[data-theme="light"] .yt-servicelink, #yt-widget[data-theme="light"] .yt-servicelink:first-letter{
                                        display : none !important;
                                    }
                                </style>
                                <div id="ytWidget-desktop" class="hidden-sm"></div>
                                <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget-desktop&pageLang=en&widgetTheme=light&autoMode=true" type="text/javascript"></script>
                                {{-- English
                                <i class="el-submenu__icon-arrow el-icon-arrow-down"></i> --}}
                            </div>
                            {{-- <div class="el-menu--horizontal" style="display: none;">
                                <ul role="menu" class="el-menu el-menu--popup el-menu--popup-" style="background-color: ;">
                                    <!---->
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">简体中文</a>
                                    </li>
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">繁體中文</a>
                                    </li>
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">Tiếng Việt</a>
                                    </li>
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">ไทย</a>
                                    </li>
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">Indonesia</a>
                                    </li>
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">Melayu</a>
                                    </li>
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">한국어</a>
                                    </li>
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">Español</a>
                                    </li>
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">हिन्दी</a>
                                    </li>
                                    <li role="menuitem" tabindex="-1" class="el-menu-item" style="color: ; background-color: ;">
                                        <a href="index.html" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">தமிழ்</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </li>
                    </ul>
                    <a href="@guest {{ route('register') }} @else  {{ route('user.dashboard') }} @endguest" class="btn_sty btn_sx reg_link" data-v-36ac65e2="">
                        @guest Create an account @else  Go to dashboard @endguest
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav indexStyle" data-v-36ac65e2="">
        <div class="wrap" data-v-36ac65e2="">
            <div class="flex_sb_cen" data-v-36ac65e2="">
                <div class="dl" data-v-36ac65e2="" style="display: contents">
                    <a href="{{ route('guest.index') }}" aria-current="page" class="logo-link nuxt-link-exact-active nuxt-link-active" data-v-36ac65e2="">
                        <img src="{{ asset('guest/img/logo-desktop-dark1.png') }}" alt="" class="logo-img logo_white" data-v-36ac65e2="" />
                        <img src="{{ asset('guest/img/logo-desktop.png') }}" alt="" class="logo-img logo_black" data-v-36ac65e2="" />
                        <!-- <img src="{{ asset('guest/img/logo_black.891cdcf.png') }}" alt="" class="logo-img logo_black" data-v-36ac65e2="" /> -->

                    </a>
                    <nav class="top_navli" data-v-36ac65e2="">
                        <ul data-v-36ac65e2="">
                            <li data-v-36ac65e2="">
                                <a href="{{ route('guest.index') }}" class="header-topNav-link" data-v-36ac65e2="">Home</a>
                                
                            </li>
                           
                            <li data-v-36ac65e2="">
                                <a href="{{ route('guest.faqs') }}" class="header-topNav-link" data-v-36ac65e2="">FAQ</a>
                                
                            </li>
                            <li data-v-36ac65e2="">
                                <a href="{{ route('guest.plans') }}" class="header-topNav-link" data-v-36ac65e2="">
                                    Plans
                                </a>
                            </li>
                            
                            <li data-v-36ac65e2="" data-dropdown>
                                <a href="{{ route('guest.about-us') }}" class="header-topNav-link" data-v-36ac65e2="">About Us</a>
                                <div class="header-topNav-con" data-v-36ac65e2="">
                                    <div class="wrap" data-v-36ac65e2="">
                                        <div class="AboutUs HeaderPublic" data-v-62d9b576="" data-v-36ac65e2="">
                                            <div class="dl_con" data-v-62d9b576="">
                                                <div class="font_1" data-v-62d9b576="">About {{ env('APP_NAME') }}</div>
                                                <div class="font_2" data-v-62d9b576="">
                                                    {{ env('APP_NAME') }} sets high standards to its services because quality is just as decisive for us as for our clients. We believe that versatile financial services require versatility in thinking and a unified policy of business principles.

                                                    Our mission is to keep pace with global market demands and approach our clients’ investment goals with an open mind.
                                                    
                                                </div>
                                                @guest <a href="{{ route('login') }}" class="btn_sty btn_sx" data-v-62d9b576="">login</a> @endguest
                                                {{-- <div class="font_2" data-v-62d9b576=""><span data-v-62d9b576="">or</span> <Account class="underline_a" data-v-62d9b576=""> Create an Account</a></div> --}}
                                            </div>
                                            <div class="dr_con" data-v-62d9b576="">
                                                <div class="dr_item" data-v-62d9b576="">
                                                    <div class="font_3" data-v-62d9b576="">Company</div>
                                                    <ul data-v-62d9b576="">
                                                        <li data-v-62d9b576="">
                                                            <a href="{{ route('guest.about-us') }}" data-v-62d9b576="">About Us</a></li>
                                                       
                                                        <li data-v-62d9b576=""><a href="{{ route('guest.funds-protection') }}" data-v-62d9b576="">Client Funds Protection</a></li>
                                                        <li data-v-62d9b576="">
                                                            <a href="{{ route('guest.terms') }}" data-v-62d9b576="">Terms &amp; Conditions</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-v-36ac65e2="" data-dropdown>
                                <a href="#trade" class="header-topNav-link" data-v-36ac65e2="">Trade</a>
                                <div class="header-topNav-con" data-v-36ac65e2="">
                                    <div class="wrap" data-v-36ac65e2="">
                                        <div class="HeaderTrade HeaderPublic" data-v-b73ad7e6="" data-v-36ac65e2="">
                                            <div class="dl_con" data-v-b73ad7e6="">
                                                <div class="font_1" data-v-b73ad7e6="">Access To Global Market</div>
                                                <div class="font_2" data-v-b73ad7e6="">
                                                    <span data-v-b73ad7e6="">Offered 80+ trading products, including 35+ Forex currency pairs, gold, oil, stocks, indices and mainstream cryptocurrencies, etc.</span>
                                                    {{-- <a href="markets-to-trade.html" class="underline_a" data-v-b73ad7e6="">General</a> --}}
                                                </div>
                                                <a href="{{ route('register') }}" class="btn_sty btn_sx" data-v-b73ad7e6="">
                                                    Get started Now
                                                </a>
                                                
                                            </div>
                                            <div class="dr_con" data-v-b73ad7e6="">
                                                <div class="dr_item" data-v-b73ad7e6="">
                                                    <div class="font_3" data-v-b73ad7e6="">Global Market</div>
                                                    <ul data-v-b73ad7e6="">
                                                        <li data-v-b73ad7e6="">
                                                            <a href="{{ route('guest.forex') }}" data-v-b73ad7e6="">
                                                                Forex
                                                            </a>
                                                        </li>
                                                        <li data-v-b73ad7e6="">
                                                            <a href="{{ route('guest.commodities') }}" data-v-b73ad7e6="">
                                                                Commodities
                                                            </a>
                                                        </li>
                                                        <li data-v-b73ad7e6="">
                                                            <a href="{{ route('guest.indices') }}" data-v-b73ad7e6="">
                                                                Indice
                                                            </a>
                                                        </li>
                                                        <li data-v-b73ad7e6="">
                                                            <a href="{{ route('guest.stocks') }}" data-v-b73ad7e6="">
                                                                Stocks
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @guest
                            <li data-v-36ac65e2="">
                                <a href="{{ route('login') }}" class="header-topNav-link" data-v-36ac65e2="">
                                    Login
                                </a>
                            </li>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>