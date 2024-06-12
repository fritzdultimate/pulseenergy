@include('user_new.layouts.header')

<div class="nk-content nk-content-lg nk-content-fluid">
          <div class="container-xl wide-lg">
            <div class="nk-content-inner">
              <div class="nk-content-body">
                <div class="nk-block-head">
                  <div class="nk-block-head-content">
                    <div class="nk-block-head-sub">
                      <a href="{{ url()->previous() }}" class="text-soft back-to">
                        <em class="icon ni ni-arrow-left"></em>
                        <span>Back</span>
                      </a>
                    </div>
                    <div class="nk-block-between-md g-4">
                      <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">{{ ucfirst($deposit->plan->name) }} - Daily {{ $deposit->plan->interest_rate }}% for {{ $deposit->plan->duration }} Days</h2>
                        <div class="nk-block-des">
                          <p>INV-{{ substr($deposit->transaction_hash, 0, 6) }} <span class="badge bg-outline bg-{{ $deposit->running ? 'primary' : 'warning'  }}">{{ $deposit->running ? 'running' : $deposit->status }}</span>
                          </p>
                        </div>
                      </div>
                      <div class="nk-block-head-content">
                        <ul class="nk-block-tools gx-3">
                          <li>
                            <a href="#" class="btn btn-icon btn-light">
                              <em class="icon ni ni-reload"></em>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                @if($deposit->status == 'pending')
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-gs">
                                <div class="col-md-6">
                                    <div class="nk-iv-wg3">
                                        <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                            <p>Please copy the below wallet address and make a deposit of exactly <strong>${{ number_format($deposit->amount) }}</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-refwg-url">
                                    <div class="form-control-wrap">
                                        <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link">
                                            <em class="clipboard-icon icon ni ni-copy"></em>
                                            <span class="clipboard-text">Copy</span>
                                        </div>
                                        <div class="form-icon">
                                            <em class="icon ni ni-link-alt"></em>
                                        </div>
                                        <input type="text" class="form-control copy-text" id="refUrl" value="{{ $deposit->wallet->currency_address }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="nk-block">
                  <div class="card card-bordered">
                    <div class="card-inner">
                      <div class="row gy-gs">
                        <div class="col-md-6">
                          <div class="nk-iv-wg3">
                            <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                              <div class="nk-iv-wg3-sub">
                                <div class="nk-iv-wg3-amount">
                                  <div class="number">{{ number_format($deposit->amount) }}</div>
                                </div>
                                <div class="nk-iv-wg3-subtitle">Invested Amount</div>
                              </div>
                              <div class="nk-iv-wg3-sub">
                                <span class="nk-iv-wg3-plus text-soft">
                                  <em class="icon ni ni-plus"></em>
                                </span>
                                <div class="nk-iv-wg3-amount">
                                  <div class="number">{{ number_format($profit_sum) }} <span class="number-up">{{ ($profit_sum * 100)/$deposit->amount }} %</span>
                                  </div>
                                </div>
                                <div class="nk-iv-wg3-subtitle">Profit Earned</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-4 offset-lg-2">
                          <div class="nk-iv-wg3 ps-md-3">
                            <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                              <div class="nk-iv-wg3-sub">
                                <div class="nk-iv-wg3-amount">
                                  <div class="number">{{ number_format($deposit->amount + ((($deposit->amount/100)* $deposit->plan->interest_rate) * $deposit->plan->duration)) }} 
                                    <span class="number-up">{{ (((($deposit->amount/100)* $deposit->plan->interest_rate) * $deposit->plan->duration)* 100)/ $deposit->amount  }} %
                                    <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="tooltip text"></em>
                                        </span>
                                  </div>
                                </div>
                                <div class="nk-iv-wg3-subtitle">Total To Return</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="schemeDetails" class="nk-iv-scheme-details">
                      <ul class="nk-iv-wg3-list">
                        <li>
                          <div class="sub-text">Term</div>
                          <div class="lead-text">{{ $deposit->plan->duration }} Days</div>
                        </li>
                        <li>
                          <div class="sub-text">Term start at</div>
                          <div class="lead-text">{{ get_day_format($deposit->approved_at) }}</div>
                        </li>
                        <li>
                          <div class="sub-text">Term end at</div>
                          <div class="lead-text">{{ get_day_format(addDaysToDate($deposit->approved_at, $deposit->plan->duration)) }}</div>
                        </li>
                        <li>
                          <div class="sub-text">Daily interest</div>
                          <div class="lead-text">{{ $deposit->plan->interest_rate }}%</div>
                        </li>
                      </ul>
                      <ul class="nk-iv-wg3-list">
                        <li>
                          <div class="sub-text">Created date</div>
                          <div class="lead-text">{{ get_day_format($deposit->created_at) }}</div>
                        </li>
                        <li>
                          <div class="sub-text">Approved date</div>
                          <div class="lead-text">{{ $deposit->approved_at ? get_day_format($deposit->approved_at) : '---' }}</div>
                        </li>
                        <li>
                          <div class="sub-text">Payment method</div>
                          <div class="lead-text">{{ ucfirst($deposit->wallet->currency) }}</div>
                        </li>
                        <li>
                          <div class="sub-text">Paid <small>(fee include)</small>
                          </div>
                          <div class="lead-text">
                            <span class="currency currency-usd">USD</span> {{ number_format($deposit->amount) }}
                          </div>
                        </li>
                      </ul>
                      <ul class="nk-iv-wg3-list">
                        <li>
                          <div class="sub-text">Captial invested</div>
                          <div class="lead-text">
                            <span class="currency currency-usd">USD</span> {{ number_format($deposit->amount) }}
                          </div>
                        </li>
                        <li>
                          <div class="sub-text">Daily profit</div>
                          <div class="lead-text">
                            <span class="currency currency-usd">USD</span> {{ number_format($deposit->amount/100 * $deposit->plan->interest_rate) }}
                          </div>
                        </li>
                        <li>
                          <div class="sub-text">Expected net profit</div>
                          <div class="lead-text">
                            <span class="currency currency-usd">USD</span> {{ number_format($deposit->amount/100 * $deposit->plan->interest_rate * $deposit->plan->duration) }}
                          </div>
                        </li>
                        <li>
                          <div class="sub-text">Total to return</div>
                          <div class="lead-text">
                            <span class="currency currency-usd">USD</span> {{ number_format($deposit->amount + $deposit->amount/100 * $deposit->plan->interest_rate * $deposit->plan->duration) }}
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                @if($deposit->status == 'accepted')
                <div class="nk-block nk-block-lg">
                  <div class="nk-block-head">
                    <h5 class="nk-block-title">Graph View</h5>
                  </div>
                  <div class="row g-gs">
                    <div class="col-lg-5">
                      <div class="card card-bordered h-100">
                        <div class="card-inner justify-center text-center h-100">
                          <div class="nk-iv-wg5">
                            <div class="nk-iv-wg5-head">
                              <h5 class="nk-iv-wg5-title">Overview</h5>
                            </div>
                            <div class="nk-iv-wg5-ck">
                              <input type="text" class="knob-half" value="{{ (100/$deposit->plan->duration) * ($deposit->plan->duration - $deposit->remaining_duration) }}" data-fgColor="#6576ff" data-bgColor="#d9e5f7" data-thickness=".06" data-width="300" data-height="155" data-displayInput="false">
                              <div class="nk-iv-wg5-ck-result">
                                <div class="text-lead">{{ number_format((100/$deposit->plan->duration) * ($deposit->plan->duration - $deposit->remaining_duration), 2) }}%</div>
                                <div class="text-sub">${{ number_format($deposit->amount /100 * $deposit->plan->interest_rate) }} / per day</div>
                              </div>
                              <div class="nk-iv-wg5-ck-minmax">
                                <span>{{ number_format($deposit->amount, 2) }}</span>
                                <span>{{ number_format($deposit->amount + $deposit->amount/100 * $deposit->plan->interest_rate * $deposit->plan->duration, 2) }}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg col-sm-6">
                      <div class="card card-bordered h-100">
                        <div class="card-inner justify-center text-center h-100">
                          <div class="nk-iv-wg5">
                            <div class="nk-iv-wg5-head">
                              <h5 class="nk-iv-wg5-title">Net Profit</h5>
                              <div class="nk-iv-wg5-subtitle">Earn so far <strong>{{ number_format($profit_sum, 2) }}</strong>
                                <span class="currency currency-usd">USD</span>
                              </div>
                            </div>
                            <div class="nk-iv-wg5-ck sm">
                              <input type="text" class="knob-half" value="{{ (100/($deposit->amount/100 * $deposit->plan->interest_rate * $deposit->plan->duration) * $profit_sum) }}" data-fgColor="#33d895" data-bgColor="#d9e5f7" data-thickness=".07" data-width="240" data-height="125" data-displayInput="false">
                              <div class="nk-iv-wg5-ck-result">
                                <div class="text-lead sm">{{ $deposit->plan->interest_rate }}%</div>
                                <div class="text-sub">Daily profit</div>
                              </div>
                              <div class="nk-iv-wg5-ck-minmax">
                                <span>{{ number_format($profit_sum, 2) }}</span>
                                <span>{{ number_format($deposit->amount/100 * $deposit->plan->interest_rate * $deposit->plan->duration, 2) }}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg col-sm-6">
                      <div class="card card-bordered h-100">
                        <div class="card-inner justify-center text-center h-100">
                          <div class="nk-iv-wg5">
                            <div class="nk-iv-wg5-head">
                              <h5 class="nk-iv-wg5-title">Day Remain</h5>
                              <div class="nk-iv-wg5-subtitle">Earn so far <strong>{{ number_format($profit_sum, 2) }}</strong>
                                <span class="currency currency-usd">USD</span>
                              </div>
                            </div>
                            <div class="nk-iv-wg5-ck sm">
                              <input type="text" class="knob-half" value="{{ (100/($deposit->plan->duration)) * ($deposit->plan->duration - $deposit->remaining_duration) }}" data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07" data-width="240" data-height="125" data-displayInput="false">
                              <div class="nk-iv-wg5-ck-result">
                                <div class="text-lead sm">{{ $deposit->remaining_duration }} D</div>
                                <div class="text-sub">day remain</div>
                              </div>
                              <div class="nk-iv-wg5-ck-minmax">
                                <span>{{ $deposit->plan->duration - $deposit->remaining_duration }}</span>
                                <span>{{ $deposit->plan->duration }}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="nk-block nk-block-lg">
                  <div class="nk-block-head">
                    <h5 class="nk-block-title">Transactions</h5>
                  </div>
                  <div class="card card-bordered">
                    <table class="table table-iv-tnx">
                      <thead class="table-light">
                        <tr>
                          <th class="tb-col-type">
                            <span class="overline-title">Type</span>
                          </th>
                          <th class="tb-col-date">
                            <span class="overline-title">Date</span>
                          </th>
                          <th class="tb-col-time tb-col-end">
                            <span class="overline-title">Amount</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="tb-col-type">
                            <span class="sub-text">Investment</span>
                          </td>
                          <td class="tb-col-date">
                            <span class="sub-text">{{ get_day_format($deposit->created_at) }}</span>
                          </td>
                          <td class="tb-col-time tb-col-end">
                            <span class="lead-text text-danger">- {{ number_format($deposit->amount) }}</span>
                          </td>
                        </tr>
                        
                        @foreach ($profits as $profit)
                            <tr>
                                <td class="tb-col-type">
                                    <span class="sub-text">Profit - {{ $deposit->plan->interest_rate }}%</span>
                                </td>
                                <td class="tb-col-date">
                                    <span class="sub-text">{{ get_day_format($profit->created_at) }}</span>
                                </td>
                                <td class="tb-col-time tb-col-end">
                                    <span class="lead-text">+ {{ number_format($profit->interest_received, 2) }}</span>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>

@include('user_new.layouts.footer')