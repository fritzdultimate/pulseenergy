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
                <a href="/user" class="back-to">
                <em class="icon ni ni-arrow-left"></em>
                <span>Back to home</span>
                </a>
            </div>
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">Withdraw funds</h2>
            </div>
            </div>
        </div>
        <div class="nk-block invest-block">
            <form action="/user/withdrawal" class="invest-form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-gs">
                <div class="col-lg-7">
                <div class="invest-field form-group">
                    <div class="form-label-group">
                    <label class="form-label">Choose Quick Amount to Withdraw</label>
                    </div>
                    <div class="invest-amount-group g-2">
                    <div class="invest-amount-item" data-amount="{{ (($user->total_balance /100) * 10) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-2">
                        <label class="invest-amount-label" for="iv-amount-2">$ {{ number_format((($user->total_balance /100) * 10)) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{ (($user->total_balance /100) * 30) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-3">
                        <label class="invest-amount-label" for="iv-amount-3">$ {{ number_format( (($user->total_balance /100) * 30)) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{  (($user->total_balance /100) * 55) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-4">
                        <label class="invest-amount-label" for="iv-amount-4">$ {{ number_format( (($user->total_balance /100) * 55)) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{  (($user->total_balance /100) * 70) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-5">
                        <label class="invest-amount-label" for="iv-amount-5">$ {{ number_format( (($user->total_balance /100) * 70)) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{  (($user->total_balance /100) * 88) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-6">
                        <label class="invest-amount-label" for="iv-amount-6">$ {{ number_format( (($user->total_balance /100) * 88)) }}</label>
                    </div>
                    <div class="invest-amount-item" data-amount="{{  (($user->total_balance)) }}">
                        <input type="radio" class="invest-amount-control" name="iv-amount" id="iv-amount-7">
                        <label class="invest-amount-label" for="iv-amount-7">Max</label>
                    </div>
                    </div>
                </div>
                <div class="invest-field form-group">
                    <div class="form-label-group">
                        <label class="form-label">Or Enter Your Amount</label>
                    </div>
                    <div class="form-control-group">
                        <div class="form-info">USD</div>
                        <input type="number" class="form-control form-control-amount form-control-lg custom-amount-input" name="amount" id="custom-investment-amount" value="{{old('amount')}}">
                        {{-- <div class="form-range-slider" id="amount-step"></div> --}}
                    </div>
                    <div class="form-note pt-2">Note: Minimum withdrawal is 10 USD and upto {{ number_format($user->total_balance) }} USD</div>
                </div>
                <div class="invest-field form-group">
                    <input type="hidden" id="main-wallet-id" name="main_wallet_id" value="">
                    <div class="form-label-group">
                        <label class="form-label">Choose Wallet</label>
                    </div>
                    <div class="form-control-group">
                        <input type="text" class="form-control form-control-amount form-control-lg custom-wallet-input" name="wallet_address" id="custom-investment-amount" value="{{old('wallet_address')}}">
                        <div class="form-note pt-2">Note: Confirm that the address you entered is correct, as we will not be liable for any incorrect address.</div>
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
                        <h6 class="nk-iv-wg4-title title">Your Withdrawal Details</h6>
                        <ul class="nk-iv-wg4-overview g-2">
                            <li>
                                <div class="sub-text">Name of initiator</div>
                                <div class="lead-text">{{ ucfirst($user->firstname) }} {{ ucfirst($user->lastname) }}</div>
                            </li>
                            <li>
                                <div class="sub-text">Initated on</div>
                                <div class="lead-text">{{ get_day_format(date("Y-m-d H:i:s")) }}</div>
                            </li>
                            <li>
                                <div class="sub-text">Wallet address</div>
                                <div class="lead-text" id="wallet-to-withdraw"></div>
                            </li>
                            <li>
                                <div class="sub-text">Amount</div>
                                <div class="lead-text" id="amount-to-withdraw">$ 100</div>
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
              <h5 class="nk-modal-title">Successfully created withdrawal!</h5>
              <div class="nk-modal-text">
                <p class="sub-text">You have successfully created withdrawal, sit back while we process the payment. </p>
              </div>
              <div class="nk-modal-action-lg">
                <ul class="btn-group flex-wrap justify-center g-4">
                  <li>
                    <a href="/user/withdrawals/{{ $message }}" class="btn btn-lg btn-mw btn-dim btn-primary">
                      <em class="icon ni ni-reports"></em>
                      <span>See the Withdrawal</span>
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
    let custom_amount = document.querySelector("#custom-investment-amount").value;

    [...amount_selector].forEach((el) => {
        el.addEventListener('click', (e) => {
            document.querySelector("#custom-investment-amount").value = e.currentTarget.dataset.amount;
            document.querySelector("#amount-to-withdraw").innerHTML = "$" + (e.currentTarget.dataset.amount);
           
        })
    });

    document.querySelector(".custom-amount-input").addEventListener('input', (el) => {
        let amount = el.currentTarget.value;
        document.querySelector("#amount-to-withdraw").innerHTML = "$" + (amount);
    })

    document.querySelector(".custom-wallet-input").addEventListener('input', (el) => {
        let wallet = el.currentTarget.value;
        console.log('b')
        document.querySelector("#wallet-to-withdraw").innerHTML = (wallet);
    })


    document.querySelector('.close').addEventListener('click', (el) => {
        document.querySelector('.modal').classList.remove('show');
        document.querySelector('.modal').style.display = 'none';
    })
    
</script>
@include('user_new.layouts.footer')