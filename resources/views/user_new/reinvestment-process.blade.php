@include('user_new.layouts.header')
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
    <div class="nk-content-inner">
        <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-lg">
            <div class="nk-block-head-content">

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="nk-block-head-sub">
                <a href="/user/select-plan" class="back-to">
                <em class="icon ni ni-arrow-left"></em>
                <span>Back to plan</span>
                </a>
            </div>
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">Ready To Reinvest?</h2>
            </div>
            </div>
        </div>
        <div class="nk-block invest-block">
            <form action="/user/reinvest" class="invest-form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-gs">
                <div class="col-lg-7">
                <div class="invest-field form-group">
                <a href="/user/select-plan" class="link py-1">Change Plan</a>
                    <div class="dropdown invest-cc-dropdown">
                        <a href="#" class="invest-cc-chosen">
                            <div class="coin-item">
                            <div class="coin-icon">
                                <em class="icon ni ni-offer-fill"></em>
                            </div>
                            <div class="coin-info">
                                <input type="hidden" value="{{ $plan->id }}" name="child_plan_id">
                                <span class="coin-name">{{ ucfirst($plan->name) }}</span>
                                <span class="coin-text">Reinvest for {{ $plan->duration }} days and get daily profit {{ $plan->interest_rate }}%</span>
                            </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="invest-field form-group">
                    <div class="form-label-group">
                    <label class="form-label">Choose Quick Amount to Reinvest</label>
                    </div>
                    <div class="invest-amount-group g-2">
                    <div class="invest-amount-item" data-amount="{{ round($plan->minimum_amount) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-1">
                        <label class="invest-amount-label" for="iv-amount-1">$ {{ number_format($plan->minimum_amount) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{ round($plan->minimum_amount + (($user->total_balance /100) * 20)) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-2">
                        <label class="invest-amount-label" for="iv-amount-2">$ {{ number_format($plan->minimum_amount + (($user->total_balance /100) * 20)) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{ round($plan->minimum_amount + (($user->total_balance /100) * 40)) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-3">
                        <label class="invest-amount-label" for="iv-amount-3">$ {{ number_format($plan->minimum_amount + (($user->total_balance /100) * 40)) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{ round($plan->minimum_amount + (($user->total_balance /100) * 60)) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-4">
                        <label class="invest-amount-label" for="iv-amount-4">$ {{ number_format($plan->minimum_amount + (($user->total_balance /100) * 60)) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{ round($plan->minimum_amount + (($user->total_balance /100) * 80)) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-5">
                        <label class="invest-amount-label" for="iv-amount-5">$ {{ number_format($plan->minimum_amount + (($user->total_balance /100) * 80)) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{ round($user->total_balance) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-6">
                        <label class="invest-amount-label" for="iv-amount-6">$ {{ number_format($user->total_balance) }}</label>
                    </div>
                    </div>
                </div>
                <div class="invest-field form-group">
                    <div class="form-label-group">
                        <label class="form-label">Or Enter Your Amount</label>
                    </div>
                    <div class="form-control-group">
                        <div class="form-info">USD</div>
                        <input type="text" class="form-control form-control-amount form-control-lg custom-amount-input" name="amount" id="custom-investment-amount" value="{{old('amount')}}">
                        {{-- <div class="form-range-slider" id="amount-step"></div> --}}
                    </div>
                    <div class="form-note pt-2">Note: Minimum reinvestment {{ number_format($plan->minimum_amount) }} USD and upto {{ number_format($plan->maximum_amount) }} USD</div>
                </div>
                <div class="invest-field form-group d-none">
                    <input type="hidden" id="main-wallet-id" name="main_wallet_id" value="">
                    <div class="form-label-group">
                        <label class="form-label">Choose Wallet</label>
                    </div>
                    <input type="hidden" value="wallet" name="iv-wallet" id="invest-choose-wallet">
                    <div class="dropdown invest-cc-dropdown">
                        <a href="#" class="invest-cc-chosen dropdown-indicator" data-bs-toggle="dropdown">
                            <div class="coin-item">
                            <div class="coin-icon">
                                <em class="icon ni ni-wallet-alt"></em>
                            </div>
                            <div class="coin-info">
                                <span class="coin-name wallet-name">Choose Wallet</span>
                                <span class="coin-text wallet-desc">Select preferred wallet ( secured )</span>
                            </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                            <ul class="invest-cc-list">
                            @foreach ($wallets as $wallet)
                                <li class="invest-cc-item select-wallet" data-wallet="{{ $wallet->currency }}" data-wallet-address="{{ $wallet->currency_address }}" data-wallet-id="{{ $wallet->id }}">
                                <div class="">
                                    <a href="#gg" class="invest-cc-opt">
                                        <div class="coin-item">
                                            <div class="coin-icon">
                                            <em class="icon ni ni-{{ $wallet->currency }}"></em>
                                            </div>
                                            <div class="coin-info">
                                            <span class="coin-name">{{ ucfirst($wallet->currency) }}</span>
                                            <span class="coin-text">Wallet address: <em>({{ $wallet->currency_address }})</em> </span>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="invest-field form-group">
                    <div class="custom-control custom-control-xs custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox" name="terms">
                        <label class="custom-control-label" for="checkbox">I agree the <a href="#">terms and &amp; conditions.</a>
                        </label>
                    </div>
                </div>
                </div>

                <div class="col-xl-4 col-lg-5 offset-xl-1">
                <div class="card card-bordered ms-lg-4 ms-xl-0">
                    <div class="nk-iv-wg4">
                    <div class="nk-iv-wg4-sub">
                        <h6 class="nk-iv-wg4-title title">Your Reinvestment Details</h6>
                        <ul class="nk-iv-wg4-overview g-2">
                        <li>
                            <div class="sub-text">Name of plan</div>
                            <div class="lead-text">{{ ucfirst($plan->name) }}</div>
                        </li>
                        <li>
                            <div class="sub-text">Duration of the plan</div>
                            <div class="lead-text">{{ $plan->duration }} days</div>
                        </li>
                        <li>
                            <div class="sub-text">Daily profit</div>
                            <div class="lead-text" id="daily-profit">$ 0.00</div>
                        </li>
                        <li>
                            <div class="sub-text">Daily profit %</div>
                            <div class="lead-text" id="interest" data-interest="{{ $plan->interest_rate }}" data-duration="{{ $plan->duration }}">{{ $plan->interest_rate }} %</div>
                        </li>
                        <li>
                            <div class="sub-text">Total expected net profit</div>
                            <div class="lead-text" id="total-net-profit">$ 249.99</div>
                        </li>
                        <li>
                            <div class="sub-text">Total To Return</div>
                            <div class="lead-text" id="total-return">$ 499.99</div>
                        </li>
                        <li>
                            <div class="sub-text">Reinvestment to start at</div>
                            <div class="lead-text">Today {{ get_day_format(date("Y-m-d H:i:s")) }}</div>
                        </li>
                        <li>
                            <div class="sub-text">Reinvestment to end at</div>
                            <div class="lead-text">{{ get_day_format(addDaysToDate(date("Y-m-d H:i:s"), $plan->duration)) }}</div>
                        </li>
                        </ul>
                    </div>
                    <div class="nk-iv-wg4-sub d-none">
                        <ul class="nk-iv-wg4-list">
                        <li>
                            <div class="sub-text">Payment Method</div>
                            <div class="lead-text" id="wallet-to-invest">Not selected</div>
                        </li>
                        </ul>
                    </div>
                    <div class="nk-iv-wg4-sub">
                        <ul class="nk-iv-wg4-list">
                        <li>
                            <div class="sub-text">Amount to reinvest</div>
                            <div class="lead-text" id="amount-to-invest">$ {{ number_format($plan->minimum_amount, 2) }}</div>
                        </li>
                        <li>
                            <div class="sub-text">Conversion Fee <span>(0.00%)</span>
                            </div>
                            <div class="lead-text" id="charge-fee">$ {{ number_format(($plan->minimum_amount/100) * 0, 2) }}</div>
                        </li>
                        </ul>
                    </div>
                    <div class="nk-iv-wg4-sub">
                        <ul class="nk-iv-wg4-list">
                        <li>
                            <div class="lead-text">Total</div>
                            <div class="caption-text text-primary" id="total-to-invest">$ {{ number_format((($plan->minimum_amount/100) * 0) + $plan->minimum_amount, 2) }}</div>
                        </li>
                        </ul>
                    </div>
                    <div class="nk-iv-wg4-sub text-center bg-lighter">
                        <button class="btn btn-lg btn-primary ttu">Confirm &amp; proceed</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>

@if ($message = Session::get('success')) 
    <div class="modal fade show" tabindex="-1" id="confirm-invest" style="display: block;">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
          <a href="#" class="close" data-bs-dismiss="modal">
            <em class="icon ni ni-cross-sm"></em>
          </a>
          <div class="modal-body modal-body-lg text-center">
            <div class="nk-modal">
              <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
              <h5 class="nk-modal-title">Successfully created reinvestment!</h5>
              <div class="nk-modal-text">
                <p class="sub-text">You have successfully created reinvestment, click the below button for more details. </p>
              </div>
              <div class="nk-modal-action-lg">
                <ul class="btn-group flex-wrap justify-center g-4">
                  <li>
                    <a href="/user/investments/{{ $message }}" class="btn btn-lg btn-mw btn-dim btn-primary">
                      <em class="icon ni ni-reports"></em>
                      <span>See the Reinvestment</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="modal-footer bg-lighter">
            <div class="text-center w-100">
              <p>Earn upto $25 for each friend your refer! <a href="/user/#referrer-u-and-earn">Invite friends</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endif

<script>
    let amount_selector = document.querySelectorAll('.invest-amount-item');
    {{-- let plan_selector = document.querySelectorAll('.select-wallet'); --}}
    let custom_amount = document.querySelector("#custom-investment-amount").value;
    let interest = document.querySelector("#interest").dataset.interest;
    let duration = document.querySelector("#interest").dataset.duration;
    document.querySelector("#total-net-profit").innerHTML = "$" + ((custom_amount/100) * interest * duration);
    document.querySelector("#total-return").innerHTML = "$" + (((custom_amount/100) * interest * duration) + +custom_amount);


    document.querySelector("#daily-profit").innerHTML = "$" + (custom_amount/100) * interest;
    [...amount_selector].forEach((el) => {
        el.addEventListener('click', (e) => {
            document.querySelector("#custom-investment-amount").value = e.currentTarget.dataset.amount;
            let interest = document.querySelector("#interest").dataset.interest;
            document.querySelector("#daily-profit").innerHTML = "$" + (e.currentTarget.dataset.amount/100) * interest;

            document.querySelector("#total-net-profit").innerHTML = "$" + ((e.currentTarget.dataset.amount/100) * interest * duration);
            document.querySelector("#total-return").innerHTML = "$" + (((e.currentTarget.dataset.amount/100) * interest * duration) + +e.currentTarget.dataset.amount);


            document.querySelector("#amount-to-invest").innerHTML = "$" + (e.currentTarget.dataset.amount);
            document.querySelector("#total-to-invest").innerHTML = "$" + (+e.currentTarget.dataset.amount + ((+e.currentTarget.dataset.amount/100) * 0));
            document.querySelector("#charge-fee").innerHTML = "$" + (e.currentTarget.dataset.amount/100) * 0 ;
        })
    });

    /** [...plan_selector].forEach((el) => {
        el.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector(".wallet-name").innerHTML = e.currentTarget.dataset.wallet;
            document.querySelector("#wallet-to-invest").innerHTML = e.currentTarget.dataset.wallet;
            document.querySelector(".wallet-desc").innerHTML = `Wallet address: <em>(${e.currentTarget.dataset.walletAddress})</em>`


            document.querySelector("#main-wallet-id").value = e.currentTarget.dataset.walletId;
        })
    }); */

    document.querySelector(".custom-amount-input").addEventListener('input', (el) => {
        let amount = el.currentTarget.value;
        let interest = document.querySelector("#interest").dataset.interest;
        let duration = document.querySelector("#interest").dataset.duration;
        document.querySelector("#daily-profit").innerHTML = "$" + (amount/100) * interest;
        document.querySelector("#total-net-profit").innerHTML = "$" + ((amount/100) * interest * duration);
        document.querySelector("#total-return").innerHTML = "$" + (((+amount/100) * interest * duration) + +amount);

        document.querySelector("#amount-to-invest").innerHTML = "$" + (+amount);
        document.querySelector("#total-to-invest").innerHTML = "$" + (+amount);
        document.querySelector("#charge-fee").innerHTML = "$" + 0 ;
    })


    document.querySelector('.close').addEventListener('click', (el) => {
        document.querySelector('.modal').classList.remove('show');
        document.querySelector('.modal').style.display = 'none';
    })
    
</script>
@include('user_new.layouts.footer')