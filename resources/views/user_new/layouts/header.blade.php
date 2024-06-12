@include('user_new.layouts.head')
<body class="nk-body npc-invest bg-lighter ">
    <div class="nk-app-root">
      <div class="nk-wrap ">
        <div class="nk-header nk-header-fluid nk-header-fixed is-theme  nk-header-fixed">
          <div class="container-xl wide-lg">
            <div class="nk-header-wrap">
              <div class="nk-menu-trigger me-sm-2 d-lg-none">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav">
                  <em class="icon ni ni-menu"></em>
                </a>
              </div>
              <div class="nk-header-brand">
                <a href="/user" class="logo-link">
                  <img class="logo-light logo-img" src="{{ asset('android-chrome-192x192.png') }}" srcset="{{ asset('android-chrome-192x192.png') }} 2x" alt="logo">
                  <img class="logo-dark logo-img" src="{{ asset('android-chrome-192x192.png') }}" srcset="{{ asset('android-chrome-192x192.png') }} 2x" alt="logo-dark">
                  {{-- <span class="nio-version">Invest</span> --}}
                </a>
              </div>
              <div class="nk-header-menu" data-content="headerNav">
                <div class="nk-header-mobile">
                  <div class="nk-header-brand">
                    <a href="/user" class="logo-link">
                      <img class="logo-light logo-img" src="{{  asset('guest/img/logo-desktop-dark1.png') }}" srcset="{{  asset('guest/img/logo-desktop-dark1.png') }} 2x" alt="logo">
                      <img class="logo-dark logo-img" src="{{  asset('guest/img/logo-desktop-dark1.png') }}" srcset="{{  asset('guest/img/logo-desktop-dark1.png') }} 2x" alt="logo-dark">
                      {{-- <span class="nio-version">Invest</span> --}}
                    </a>
                  </div>
                  <div class="nk-menu-trigger me-n2">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav">
                      <em class="icon ni ni-arrow-left"></em>
                    </a>
                  </div>
                </div>
                <ul class="nk-menu nk-menu-main">
                  <li class="nk-menu-item">
                    <a href="/user" class="nk-menu-link">
                      <span class="nk-menu-text">Home</span>
                    </a>
                  </li>
                  <li class="nk-menu-item">
                    <a href="/user/select-plan" class="nk-menu-link">
                      <span class="nk-menu-text">Plans</span>
                    </a>
                  </li>
                  <li class="nk-menu-item">
                    <a href="/user/select-plan" class="nk-menu-link">
                      <span class="nk-menu-text">Invest</span>
                    </a>
                  </li>
                  <li class="nk-menu-item">
                    <a href="/user/reinvest/select-plan" class="nk-menu-link">
                      <span class="nk-menu-text">Reinvest</span>
                    </a>
                  </li>
                  <li class="nk-menu-item">
                    <a href="/user/withdraw" class="nk-menu-link">
                      <span class="nk-menu-text">Withdraw</span>
                    </a>
                  </li>
                  <li class="nk-menu-item">
                    <a href="/user/all-transactions" class="nk-menu-link">
                      <span class="nk-menu-text">Transactions</span>
                    </a>
                  </li>
                  @if(!$user->is_admin)
                    <li class="nk-menu-item">
                      <a href="/user/profile" class="nk-menu-link">
                        <span class="nk-menu-text">Profile</span>
                      </a>
                    </li>
                  @endif
                  @if($user->is_admin)
                    <li class="nk-menu-item">
                      <a href="/admin" class="nk-menu-link">
                        <span class="nk-menu-text">Admin</span>
                      </a>
                    </li>
                  @endif
                </ul>
              </div>
              <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                  <li class="hide-mb-sm">
                    <a href="#" class="nk-quick-nav-icon">
                      <em class="icon ni ni-signout"></em>
                    </a>
                  </li>
                  <li class="dropdown user-dropdown order-sm-first">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                      <div class="user-toggle">
                        <div class="user-avatar sm">
                          <em class="icon ni ni-user-alt"></em>
                        </div>
                        <div class="user-info d-none d-xl-block">
                          <div class="user-status user-status-verified">Verified</div>
                          <div class="user-name dropdown-indicator">{{ ucfirst($user->firstname) . ' ' . ucfirst($user->lastname) }}</div>
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                      <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                        <div class="user-card">
                          <div class="user-avatar">
                            <span>{{ ucfirst(substr($user->firstname, 0, 1))  . ucfirst(substr($user->lastname, 0,1)) }}</span>
                          </div>
                          <div class="user-info">
                            <span class="lead-text">{{ ucfirst($user->firstname) . ' ' . ucfirst($user->lastname) }}</span>
                            <span class="sub-text">{{ ucfirst($user->email)  }}</span>
                          </div>
                          <div class="user-action">
                            <a class="btn btn-icon me-n2" href="/user/profile-setting">
                              <em class="icon ni ni-setting"></em>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="dropdown-inner user-account-info">
                        <h6 class="overline-title-alt">Account Balance</h6>
                        <div class="user-balance">{{ number_format($user->total_balance) }} <small class="currency currency-usd">USD</small>
                        </div>
                        <div class="user-balance-sub">Invested <span>{{ number_format($user->currently_invested) }} <span class="currency currency-usd">USD</span>
                          </span>
                        </div>
                        <a href="/user/withdraw" class="link">
                          <span>Withdraw</span>
                          <em class="icon ni ni-wallet-out"></em>
                        </a>
                      </div>
                      <div class="dropdown-inner">
                        <ul class="link-list">
                          <li>
                            <a href="/user/profile">
                              <em class="icon ni ni-user-alt"></em>
                              <span>View Profile</span>
                            </a>
                          </li>
                          
                          
                        </ul>
                      </div>
                      <div class="dropdown-inner">
                        <ul class="link-list">
                          <li>
                            <style>
                              #yt-widget[data-theme="light"] .yt-servicelink, #yt-widget[data-theme="light"] .yt-servicelink:first-letter{
                                  display : none !important;
                              }
                          </style>
                          <div id="ytWidget-user" class="hidden-sm"></div>
                          <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget-user&pageLang=en&widgetTheme=light&autoMode=true" type="text/javascript"></script>
                          </li>
                        </ul>
                      </div>
                      
                      <div class="dropdown-inner">
                        <ul class="link-list">
                          <li>
                            <a href="/user/logout">  
                              <em class="icon ni ni-signout"></em>
                              <span>Sign out</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>