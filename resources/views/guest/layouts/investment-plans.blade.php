<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="text_1 fw-normal text-center py-3" data-v-971fb12a="">
            Our investment plans are tailored to the level of your investment opportunities. By investing more for a longer period, you can count on higher earnings.
        </div>
    </div>
</div>
<div class="row justify-content-center" data-v-971fb12a="">
    @foreach ($plans as $id => $plan)
    <div class="col-md-3 col-sm-6 col-xs-12 mb-5 mb-md-0">
        <div class="single-table text-center">
            <div class="plan-header">
                <h3 class="text-center">{{ $plan->name }}</h3>
                <p class="text-center pb-3">Investment plan</p>
                <h5 class="plan-price text-center">
                    ${{number_format($plan->minimum_amount) }} - ${{number_format($plan->maximum_amount) }}
                </h5>
            </div>


            <ul class="plan-features text-center">
                <li class="text-center d-flex flex-column gap-1 align-items-center">
                    <small>Minimum Amount</small>
                    <b class="lead fw-bold">
                    ${{number_format($plan->minimum_amount) }}
                    </b>
                </li>
                <li class="text-center d-flex flex-column gap-1 align-items-center">
                    <small>Maxiumum Amount</small>
                    <b class="lead fw-bold">
                        ${{number_format($plan->maximum_amount) }}
                    </b>
                    </li>
                    <li class="text-center d-flex flex-column gap-1 align-items-center">
                    <small>Interest Rate</small>
                    <div>
                        <b class="fw-bold">
                            {{ $plan->interest_rate }}% 
                        </b>
                        after
                        <b>
                            {{ $plan->duration }}
                        </b> days
                    </div>
                    
                    </li>
                    <li class="text-center d-flex flex-column gap-1 align-items-center">
                    <small>Referral Bonus</small>
                    <b class="lead fw-bold">
                        {{ $plan->referral_bonus }}%
                    </b>
                    </li>
            </ul>
            <a href="@guest {{ route('register') }} @else  {{ route('user.select-plan') }} @endguest" class="plan-submit hvr-bounce-to-right">
                Invest
            </a>
        </div>
    </div>
    @endforeach                        
</div>