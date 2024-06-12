@include('user_new.layouts.header')
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between-md g-3">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub">
                                <span>Welcome!</span>
                            </div>
                            <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                <div>
                                    <h2 class="nk-block-title fw-normal">{{ ucfirst($user->firstname) . ' ' . ucfirst($user->lastname) }}</h2>
                                </div>
                                <div>
                                    <a href="/user/select-plan" class="btn btn-white btn-light">My Plans <em class="icon ni ni-arrow-long-right ms-2"></em>
                                    </a>
                                </div>
                            </div>
                            <div class="nk-block-des">
                                <p>At a glance summary of your investment account. Have fun!</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content d-none d-md-block">
                            <div class="nk-slider nk-slider-s1">
                            <div class="slider-init" data-slick='{"dots": true, "arrows": false, "fade": true}'>
                                @foreach ($plans as $plan)
                                <div class="slider-item">
                                    <div class="nk-iv-wg1">
                                        <div class="nk-iv-wg1-sub sub-text">Active Plans</div>
                                        <h6 class="nk-iv-wg1-info title">{{ ucfirst($plan->name) }} - {{ $plan->interest_rate }}% for {{ $plan->duration }} Days</h6>
                                        <a href="/plans/{{ $plan->name }}/invest" class="nk-iv-wg1-link link link-light">
                                            <em class="icon ni ni-trend-up"></em>
                                            <span>Invest now</span>
                                        </a>
                                        <div class="nk-iv-wg1-progress">
                                            <div class="progress-bar bg-primary" data-progress="80"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="slider-dots"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-block d-none">
                    <div class="nk-news card card-bordered">
                        <div class="card-inner">
                            <div class="nk-news-list">
                                <a class="nk-news-item" href="#">
                                    <div class="nk-news-icon">
                                        <em class="icon ni ni-card-view"></em>
                                    </div>
                                    <div class="nk-news-text">
                                        <p>Do you know the latest update of 2022? <span> A overview of our is now available on YouTube</span></p>
                                        <em class="icon ni ni-external"></em>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-block">
                    <div class="row gy-gs">
                        <div class="col-md-6 col-lg-4">
                            <div class="nk-wg-card is-dark card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Available Balance <em class="icon ni ni-info"></em>
                                            </h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount">$ {{ number_format($user->total_balance, 2) }} <span class="change down">
                                                <span class="sign"></span>{{ number_format((((($user->total_withdrawn + $user->currently_invested + $profit_sum) <= 0 ? 1 : ($user->total_withdrawn + $user->currently_invested + $profit_sum)/ ($user->total_balance < 1 ? 1 : $user->total_balance) * 100)))) }}% </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="nk-wg-card is-s1 card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Total Invested <em class="icon ni ni-info"></em>
                                            </h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount"> $ {{ number_format($user->currently_invested, 2) }} <span class="change up">
                                                <span class="sign"></span>{{ (number_format((($user->currently_invested) * 100)/($user->total_balance <= 0 ? 1 : $user->total_balance))) }}% </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="nk-wg-card is-s3 card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Total Withdrawn <em class="icon ni ni-info"></em>
                                            </h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount"> $ {{ number_format($user->total_withdrawn, 2) }} <span class="change down">
                                                <span class="sign"></span>{{ number_format(((($user->total_withdrawn) * 100)/($user->total_balance <= 0 ? 1 : $user->total_balance))) }}% </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-block">
                    <div class="row gy-gs">
                        <div class="col-md-6 col-lg-4">
                            <div class="nk-wg-card card card-bordered h-100">
                                <div class="card-inner h-100">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Balance in Account</h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount ui-v2">$ {{ number_format($user->total_balance + $user->currently_invested, 2) }}</div>
                                            <ul class="nk-iv-wg2-list">
                                                <li>
                                                    <span class="item-label">Available Funds</span>
                                                    <span class="item-value">$ {{ number_format($user->total_balance, 2) }}</span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Invested Funds</span>
                                                    <span class="item-value">$ {{ number_format($user->currently_invested, 2) }}</span>
                                                </li>
                                                <li class="total">
                                                    <span class="item-label">Total</span>
                                                    <span class="item-value">$ {{ number_format($user->total_balance + $user->currently_invested, 2) }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-iv-wg2-cta">
                                            <a href="/user/withdraw" class="btn btn-primary btn-lg btn-block">Withdraw Funds</a>
                                            <a href="/user/select-plan" class="btn btn-trans btn-block">Deposit Funds</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="nk-wg-card card card-bordered h-100">
                                <div class="card-inner h-100">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">This Month Profit <em class="icon ni ni-info text-primary"></em>
                                            </h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount ui-v2">$ {{ number_format($total_referral_interest_this_month + $total_interest_this_month, 2) }} <span class="change up">
                                                <span class="sign"></span>{{ round((($total_referral_interest_this_month + $total_interest_this_month) * 100)/($user->total_balance <= 0 ? 1 : $user->total_balance)) }}% </span>
                                            </div>
                                            <ul class="nk-iv-wg2-list">
                                                <li>
                                                    <span class="item-label">Profits</span>
                                                    <span class="item-value">$ {{ number_format($total_interest_this_month, 2) }}</span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Referrals Rewards</span>
                                                    <span class="item-value">$ {{ number_format($total_referral_interest_this_month, 2) }}</span>
                                                </li>
                                                <li class="total">
                                                    <span class="item-label">Total Profit</span>
                                                    <span class="item-value">$ {{ number_format($total_referral_interest_this_month + $total_interest_this_month, 2) }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-iv-wg2-cta">
                                            <a href="/user/select-plan" class="btn btn-primary btn-lg btn-block">Invest & Earn</a>
                                            <div class="cta-extra">Earn up to 25$ <a href="#referrer-u-and-earn" class="link link-dark">Refer friend!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="nk-wg-card card card-bordered h-100">
                                <div class="card-inner h-100">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">My Investment</h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount ui-v2">$ {{ number_format($active_investment_amount, 2) }} <span class="sub">{{ $active_investment_count }}</span> Active </div>
                                            <ul class="nk-iv-wg2-list">
                                                @foreach ($active_investment as $investment)
                                                <li>
                                                    <span class="item-label">
                                                        <a href="#">{{ ucfirst($investment->plan->name) }}</a>
                                                        <small>- {{ ucfirst($investment->plan->interest_rate) }}% for {{ ucfirst($investment->plan->duration) }} Days</small>
                                                    </span>
                                                    <span class="item-value">{{ number_format($investment->amount, 2) }}</span>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="nk-iv-wg2-cta">
                                            <a href="/user/all-transactions" class="btn btn-light btn-lg btn-block">See all Investment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-block" id="referrer-u-and-earn">
                    <div class="card card-bordered">
                        <div class="nk-refwg">
                            <div class="nk-refwg-invite card-inner">
                                <div class="nk-refwg-head g-3">
                                    <div class="nk-refwg-title">
                                        <h5 class="title">Refer Us & Earn</h5>
                                        <div class="title-sub">Use the bellow link to invite your friends.</div>
                                    </div>
                                    <div class="nk-refwg-action">
                                        <a href="#" class="btn btn-primary">Invite</a>
                                    </div>
                                </div>
                                <div class="nk-refwg-url">
                                    <div class="form-control-wrap">
                                        <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link">
                                            <em class="clipboard-icon icon ni ni-copy"></em>
                                            <span class="clipboard-text">Copy Link</span>
                                        </div>
                                        <div class="form-icon">
                                            <em class="icon ni ni-link-alt"></em>
                                        </div>
                                        <input type="text" class="form-control copy-text" id="refUrl" value="https://{{ env('APP_NAME') }}.com/?ref={{ $user->uid }}">
                                    </div>
                                </div>
                            </div>
                            <div class="nk-refwg-stats card-inner bg-lighter">
                                <div class="nk-refwg-group g-3">
                                    <div class="nk-refwg-name">
                                        <h6 class="title">My Referral <em class="icon ni ni-info" data-bs-toggle="tooltip" data-bs-placement="right" title="Referral Informations"></em>
                                        </h6>
                                    </div>
                                    <div class="nk-refwg-info g-3">
                                        <div class="nk-refwg-sub">
                                            <div class="title">{{ $total_referrals }}</div>
                                            <div class="sub-text">Total Joined</div>
                                        </div>
                                        <div class="nk-refwg-sub">
                                            <div class="title">$ {{ number_format($total_referrer_bonus_earned, 2) }}</div>
                                            <div class="sub-text">Referral Earn</div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="nk-refwg-ck">
                                    <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('user_new.layouts.footer')