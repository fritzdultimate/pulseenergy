@extends('guest.layouts.app')

@section('title', env('APP_NAME') . ' | About Us')

@section('content')
<div class="about_us" data-v-471b6f6c="">
    <div class="top-banner" data-v-505887f7="" data-v-471b6f6c="">
        <div class="wrap" data-v-505887f7="">
            <div class="top-banner-con" data-v-505887f7="">
                <div class="dl" data-v-505887f7="">
                    <h2 class="h2-tit" data-v-505887f7="">About {{ env('APP_NAME') }}</h2>
                    <p class="top-banner-p" data-v-505887f7="">
                      Are you interested in maximizing your returns in the world of Investment? Look no further We offer a fantastic ROI Daily on your capital investment. Not only that, but we also offer rebates for those who refer others to our platform.
                      <br>
                      For every person you refer to our platform, you'll receive a minimum rebate of 5% on their investments depending on the plan invested in. This means that not only will you be earning great returns on your own investments, but you can also earn additional income by sharing the platform with others.
                      <br>
                      Our trading platform is designed to be easy to use, even for those who are new to Investments. We offer a range of investment options to suit different levels of risk tolerance, and our team of experts is always on hand to offer advice and support.
                      <br>
                      So why wait? Start investing with us today and see your returns grow daily. And don't forget to tell your friends and family about our platform so that they can benefit from our generous rebates too.
                      <br><br>
                      
                      
                     
                    </p>
                </div>
            </div>
            <img src="{{ asset('guest/img/bg1.70f84f7.png') }}" alt="" class="bg_m" data-v-505887f7="" />
        </div>
    </div>
    <div class="earth_div padding_100" data-v-471b6f6c="">
        <div class="wrap" data-v-471b6f6c="">
            <h2 class="h2_tit" data-v-471b6f6c="">{{ env('APP_NAME') }} Worldwide Service</h2>
            <p class="p_des" data-v-471b6f6c="">
                {{ env('APP_NAME') }} currently provides a full range of trading and investment services for international investors in more than 10 countries around the world, such as Malaysia, Taiwan, Vietnam, Thailand, Indonesia,
                India, South Korea, Spain, etc.
            </p>
            <img src="{{ asset('guest/img/earth_bg.b3caf02.svg') }}" alt="" class="top_bg_img" data-v-471b6f6c="" />
            <ul class="ul_list" data-v-471b6f6c="">
                <li data-v-471b6f6c="">
                    <div class="d1" data-v-471b6f6c="">Connect To Global Market</div>
                    <div class="d2" data-v-471b6f6c="">
                        <p data-v-471b6f6c="">
                            80+ Instruments
                        </p>
                        <p data-v-471b6f6c="">
                            Tight Spread &amp; No Commission
                        </p>
                        <p data-v-471b6f6c="">
                            Connect to the global market on your fingertips with lightning-fast order execution
                        </p>
                    </div>
                </li>
                <li data-v-471b6f6c="">
                    <div class="d1" data-v-471b6f6c="">Diverse Account Types</div>
                    <div class="d2" data-v-471b6f6c="">
                        <p data-v-471b6f6c="">
                            ECN Account; High Leverage Account; Islamic Account
                        </p>
                    </div>
                </li>
                <li data-v-471b6f6c="">
                    <div class="d1" data-v-471b6f6c="">Investor Fund Protection</div>
                    <div class="d2" data-v-471b6f6c="">
                        <p data-v-471b6f6c="">
                            We keep our investors' funds in the segregated accounts and regularly conduct external audits by an international accounting firm that provide negative balance protection in order to
                            reduce the trading risks.
                        </p>
                    </div>
                </li>
                <li data-v-471b6f6c="">
                    <div class="d1" data-v-471b6f6c="">Multi-languages Support</div>
                    <div class="d2" data-v-471b6f6c="">
                        <p data-v-471b6f6c="">
                            Covered multiple Languages: English, Simplified Chinese, Traditional Chinese, Thai, Vietnamese, Spanish, Malay, Korean, Indonesian, Tamil and Hindi, etc
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
   
    <div class="hg_div padding_100" data-v-471b6f6c="">
        <div class="wrap" data-v-471b6f6c="">
            <div class="hg_div_con flex_sb_cen" data-v-471b6f6c="">
                <div class="dl" data-v-471b6f6c="">
                    <h3 class="h3_tit" data-v-471b6f6c="">{{ env('APP_NAME') }} Regulator</h3>
                    <ul data-v-471b6f6c="">
                        <li data-v-471b6f6c="">{{ env('APP_NAME') }} is supervised by industry authorities and multi-institutions.</li>
                        <li data-v-471b6f6c="">
                            {{ env('APP_NAME') }} Group is registered in the Cayman Islands, PrimesGlobal is the retail brand of {{ env('APP_NAME') }} Group. Among them, PrimesGlobal PTY LTD is regulated by the Australian ASIC Authorized Regulatory (AR) Regulatory
                            Number: 001276870
                        </li>
                        <li data-v-471b6f6c="">PrimesGlobal is supervised by Vanuatu Financial Services Commission (Regulatory Number: 40436)</li>
                        <li data-v-471b6f6c="">All business operations of {{ env('APP_NAME') }} are carried out under strict supervision and comply with all regulations.</li>
                    </ul>
                </div>
                <div class="dr flex_cen_cen" data-v-471b6f6c=""><img src="{{ asset('guest/img/hg_bg.5b4ccef.png') }}" alt="" data-v-471b6f6c="" /></div>
            </div>
        </div>
    </div>
    <div class="Trophy_div padding_100" data-v-471b6f6c="">
        <div class="wrap" data-v-471b6f6c="">
            <h2 class="h2_tit" data-v-471b6f6c="">{{ env('APP_NAME') }} Achievement</h2>
            <p class="p_des" data-v-471b6f6c="">
                {{ env('APP_NAME') }} has been rated as one of the most popular emerging investment platforms for many times since its establishment and the company has brilliant development for rapid growth.
            </p>
            <p class="p_des p1" data-v-471b6f6c="">
                In 2021, {{ env('APP_NAME') }} awarded with the most fast-growing broker, the best trading platform, the best broker etc
            </p>
            <p class="p_des p2" data-v-471b6f6c="">You will enjoy high quality financial service with <i class="col_down">1,350,000+</i> investors worldwide.</p>
            <ul class="trophy_list" data-v-471b6f6c="">
                <li data-v-471b6f6c="">
                    <div class="img_box" data-v-471b6f6c=""><img src="{{ asset('guest/img/Trophy_1.c36068c.png') }}" alt="" data-v-471b6f6c="" /></div>
                    <span data-v-471b6f6c="">
                        2021<br data-v-471b6f6c="" />
                        Best Mobile Trading Platform
                    </span>
                </li>
                <li data-v-471b6f6c="">
                    <div class="img_box" data-v-471b6f6c=""><img src="{{ asset('guest/img/Trophy_2.34beffa.png') }}" alt="" data-v-471b6f6c="" /></div>
                    <span data-v-471b6f6c="">
                        2021<br data-v-471b6f6c="" />
                        Fastest Growing Broker
                    </span>
                </li>
                <li data-v-471b6f6c="">
                    <div class="img_box" data-v-471b6f6c=""><img src="{{ asset('guest/img/Trophy_3.dc5cf3f.png') }}" alt="" data-v-471b6f6c="" /></div>
                    <span data-v-471b6f6c="">
                        2021<br data-v-471b6f6c="" />
                        Best Trading Platform
                    </span>
                </li>
            </ul>
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
  @include('guest.layouts.contact-us')
</div>
@endsection