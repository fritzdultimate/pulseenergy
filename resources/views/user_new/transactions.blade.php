@include('user_new.layouts.header')


<div class="nk-content nk-content-fluid">
          <div class="container-xl wide-xl">
            <div class="nk-content-inner">
              <div class="nk-content-body">
                <div class="nk-block-head">
                  <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                      <h3 class="nk-block-title page-title">Invoices</h3>
                      <div class="nk-block-des text-soft">
                        <p>You have total {{ $transactions->count() }} transactions.</p>
                      </div>
                    </div>
                  </div> 
                </div>
                <div class="nk-block">
                  <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">
                      <div class="card-inner">
                        <div class="card-title-group">
                          <div class="card-title">
                            <h5 class="title">All Transactions</h5>
                          </div>
                          <div class="card-tools me-n1">
                          </div>
                          <div class="card-search search-wrap" data-search="search">
                            <div class="search-content">
                              <a href="#" class="search-back btn btn-icon toggle-search" data-target="search">
                                <em class="icon ni ni-arrow-left"></em>
                              </a>
                              <input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Quick search by order id">
                              <button class="search-submit btn btn-icon">
                                <em class="icon ni ni-search"></em>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-inner p-0">
                        <table class="table table-orders">
                          <thead class="tb-odr-head">
                            <tr class="tb-odr-item">
                              <th class="tb-odr-info">
                                <span class="tb-odr-id">Order ID</span>
                                <span class="tb-odr-date d-none d-md-inline-block">Date</span>
                              </th>
                              <th class="tb-odr-amount">
                                <span class="tb-odr-total">Amount</span>
                                <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                              </th>
                              <th class="tb-odr-action">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody class="tb-odr-body">
                            @foreach ($transactions as $transaction)
                            
                              <tr class="tb-odr-item">
                                <td class="tb-odr-info">
                                  <span class="tb-odr-id">
                                    <a href="{{ $transaction->type == 'withdrawal' ? "/user/withdrawals/$transaction->transaction_id" : "/user/investments/$transaction->transaction_id" }}">#{{ strtoupper(substr($transaction->transaction_hash, 3, 6)) }} ({{ $transaction->type == 'withdrawal' ? $transaction->withdrawal->status : $transaction->deposit->status }})</a>
                                  </span>
                                  <span class="tb-odr-date">{{ get_day_format($transaction->created_at) }}</span>
                                </td>
                                <td class="tb-odr-amount">
                                  <span class="tb-odr-total">
                                    <span class="amount">${{ number_format($transaction->amount) }}</span>
                                  </span>
                                  <span class="tb-odr-status">
                                    <span class="badge badge-dot bg-{{ $transaction->type == 'withdrawal' ? 'danger' : 'success' }}">{{ ucfirst($transaction->type) }}</span>
                                  </span>
                                </td>
                                <td class="tb-odr-action">
                                  <div class="tb-odr-btns d-none d-sm-inline">
                                    <a href="{{ $transaction->type == 'withdrawal' ? "/user/withdrawals/$transaction->transaction_id" : "/user/investments/$transaction->transaction_id" }}" class="btn btn-dim btn-sm btn-primary">View</a>
                                  </div>
                                  <a href="{{ $transaction->type == 'withdrawal' ? "/user/withdrawals/$transaction->transaction_id" : "/user/investments/$transaction->transaction_id" }}" class="btn btn-pd-auto d-sm-none">
                                    <em class="icon ni ni-chevron-right"></em>
                                  </a>
                                </td>
                              </tr>
                            
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@include('user_new.layouts.footer')