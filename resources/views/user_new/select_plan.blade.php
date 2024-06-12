@include('user_new.layouts.header')
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
    <div class="nk-content-inner">
        <div class="nk-content-body">
        <div class="nk-block-head text-center">
            <div class="nk-block-head-content">
            <div class="nk-block-head-sub">
                <span>Choose an Option To {{ request()->route()->getName() == 'user.reinvest' ? 'Reinvest' : 'Invest' }}</span>
            </div>
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">Investment Plan</h2>
                <div class="nk-block-des">
                <p>Choose your investment plan and start earning.</p>
                </div>
            </div>
            </div>
        </div>
        <div class="nk-block">
            <form action="" class="plan-iv">
                <div class="plan-iv-list nk-slider nk-slider-s2">
                    <ul class="plan-list slider-init" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite":false, "responsive":[						{"breakpoint": 992,"settings":{"slidesToShow": 2}},						{"breakpoint": 768,"settings":{"slidesToShow": 1}}					]}'>
                    @foreach($plans as $plan)
                        
                    
                        <li class="plan-item">
                            <input type="radio" id="plan-iv-{{ $plan->id }}" name="plan-iv" class="plan-control">
                            <div class="plan-item-card">
                                <div class="plan-item-head">
                                    <div class="plan-item-heading">
                                        <h4 class="plan-item-title card-title title">{{ ucfirst($plan->name) }}</h4>
                                        <p class="sub-text">Enjoy entry level of invest & earn money.</p>
                                    </div>
                                    <div class="plan-item-summary card-text">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="lead-text">{{ $plan->interest_rate }}%</span>
                                                <span class="sub-text">Daily Interest</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="lead-text">{{ $plan->duration }}</span>
                                                <span class="sub-text">Term Days</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="plan-item-body">
                                    <div class="plan-item-desc card-text">
                                        <ul class="plan-item-desc-list">
                                            <li>
                                                <span class="desc-label">Min Deposit</span> - <span class="desc-data">${{ number_format($plan->minimum_amount) }}</span>
                                            </li>
                                            <li>
                                                <span class="desc-label">Max Deposit</span> - <span class="desc-data">${{ number_format($plan->maximum_amount) }}</span>
                                            </li>
                                            <li>
                                                <span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span>
                                            </li>
                                            <li>
                                                <span class="desc-label">Total Return</span> - <span class="desc-data">{{ $plan->duration * $plan->interest_rate }}%</span>
                                            </li>
                                        </ul>
                                    <div class="plan-item-action">
                                        <label for="plan-iv-{{ $plan->id }}" class="plan-label">
                                        <span class="plan-label-base" data-name="{{ $plan->name }}" data-id="{{ $plan->id }}" data-reinvest="{{ request()->route()->getName() }}">Choose this plan</span>
                                        <span class="plan-label-selected">Plan Selected</span>
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            <div class="plan-iv-actions text-center">
                <button class="btn btn-primary btn-lg continue-investment">
                <span>Continue to Invest</span>
                <em class="icon ni ni-arrow-right"></em>
                </button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>

<script>
    let selected_plan = null;
    let plan_selector = document.querySelectorAll('.plan-label-base');
    let reinvestment = false;

    [...plan_selector].forEach((el) => {
        el.addEventListener('click', (e) => {
            selected_plan = e.currentTarget.dataset.name;
            console.log(e.currentTarget.dataset.name)
            reinvestment = e.currentTarget.dataset.reinvest == 'user.reinvest' ? true : false;
        })
    });

    document.querySelector('.continue-investment').addEventListener('click', (e) => {
        e.preventDefault();
        if(selected_plan) {
            location.href = reinvestment ? `/user/plans/${selected_plan}/reinvest` : `/user/plans/${selected_plan}/invest`
        }
    })
</script>

@include('user_new.layouts.footer')