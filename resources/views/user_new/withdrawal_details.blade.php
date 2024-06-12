@include('user_new.layouts.header');

<div class="nk-content nk-content-fluid">
  <div class="container-xl wide-xl">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="nk-block-head">
          <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
              <h3 class="nk-block-title page-title">Transaction <strong class="text-primary small">#{{ strtoupper(substr($withdrawal->transaction_hash, 3, 6)) }}</strong>
              </h3>
              <div class="nk-block-des text-soft">
                <ul class="list-inline">
                  <li>Created At: <span class="text-base">{{ get_day_format($withdrawal->created_at) }}</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="nk-block-head-content">
              <a href="{{ url()->previous() }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
                <em class="icon ni ni-arrow-left"></em>
                <span>Back</span>
              </a>
              <a href="{{ url()->previous() }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none">
                <em class="icon ni ni-arrow-left"></em>
              </a>
            </div>
          </div>
        </div>
        <div class="nk-block">
          <div class="invoice">
            <div class="invoice-wrap">
              <div class="invoice-brand text-center">
                <img src="{{ asset('_asset/images/logo-dark.png') }}" srcset="/demo6/images/logo-dark2x.png 2x" alt="">
              </div>
              <div class="invoice-head">
                <div class="invoice-contact">
                  <span class="overline-title">Transaction By</span>
                  <div class="invoice-contact-info">
                    <h4 class="title">{{ ucfirst($withdrawal->user->firstname) }} {{ ucfirst($withdrawal->user->firstname) }}</h4>
                    <ul class="list-plain">
                      <li>
                        <small> {{ $withdrawal->transaction_hash }} </small>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="invoice-desc">
                  <h3 class="title">Transaction</h3>
                  <ul class="list-plain">
                    <li class="invoice-id">
                      <span>Transaction ID</span>: <span>{{ $withdrawal->id }}</span>
                    </li>
                    <li class="invoice-date">
                      <span>Date</span>: <span>{{ get_day_format($withdrawal->created_at) }}</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="invoice-bills">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="w-150px">ID</th>
                        <th class="w-60">Wallet Address</th>
                        <th>Amount</th>
                        <th>Qty</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $withdrawal->id }}</td>
                        <td>{{ $withdrawal->wallet_address }}</td>
                        <td>${{ number_format($withdrawal->amount, 2) }}</td>
                        <td>1</td>
                        <td>{{ $withdrawal->status }}</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="nk-notes ff-italic fs-12px text-soft"> 
                  Receipt was created on a computer and is valid without the signature and seal. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('user_new.layouts.header')