@extends('guest.layouts.app')

@section('title', 'PrimesGlobe | Best Forex, Commodity, Indices, Share Trading Platform')

@section('content')

<div class="Analyst-content" data-v-1ba9f06e="">
    <div class="analyst_banner" data-v-1ba9f06e="">
        <div class="wrap" data-v-1ba9f06e="">
            <div class="analyst_banner_box" data-v-1ba9f06e="" style="height:150px">
                <h3 class="text-white h3" data-v-1ba9f06e="">
                    Create an account
                </h3>
            </div>
        </div>
    </div>
    <div class="wra bg-dange my-5" data-v-1ba9f06e="">
        <div class="Analyst_bo container bg-primar pb-5" data-v-1ba9f06e="" align="center">
            <div class="row justify-content-center p-3 p-md-0">
                <div class="col-md-6 login-container py-4 p-3 p-sm-4 p-md-5">
                    <h5 class="mx-3 page-alert h5 mb-4 text-center">
                        Enter Your Details To Sign Up
                    </h5>

                    <div class="mx-3">
                        @include('user.layouts.errors')
                    </div>
                   
                        <div class="bg-secondar px-3 align-items-center login-form mt-2 d-flex flex-column gap-4 justify-content-center row"
                            data-v-1ba9f06e="">
                            <form method="post" enctype="multipart/form-data">  
                                @csrf
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input required type="text" name="username" class="form-control" placeholder="User Name" value="{{ old('username') }}">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input required  type="text" name="firstname" class="form-control" placeholder="First Name" value="{{ old('firstname') }}">
                                </div>
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" name="middlename" class="form-control" placeholder="Middle Name" value="{{ old('middlename') }}">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input required  type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{ old('lastname') }}">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input required  type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Password</label>
                                    <div class="input-group transparent-append" style="display:flex">
                                        <input style="width:1%" name="password" type="password" value="{{ old('password') }}" class="form-control" id="validationDefaultUsername11" placeholder="Password" aria-describedby="inputGroupPrepend3" required="">
                                        <div class="input-group-text c-pointer form-show-password">
                                            <span class="text-secondary d-none show-eye">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </span>
                                            <span class="text-secondary hide-eye">
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Repeat Password</label>
                                    <div class="input-group transparent-append" style="display:flex">
                                        <input style="width:1%" name="repassword" type="password" value="{{ old('repassword') }}" class="form-control" id="validationDefaultUsername11" placeholder="Password" aria-describedby="inputGroupPrepend3" required="">
                                        <div class="input-group-text c-pointer form-show-password">
                                            <span class="text-secondary d-none show-eye">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </span>
                                            <span class="text-secondary hide-eye">
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Referral ID</label>
                                    <input  type="text" name="uid" class="form-control" placeholder="Referral ID" value="{{ old('uid') }}">
                                </div>
                                <div class="d-flex justify-content-start mb-3">
                                    <label class="small">
                                        <input required name="terms" type="checkbox"> Agree to the terms and policy
                                    </label>
                                </div>
                                <div class="input_box" data-v-1ba9f06e="">
                                    <button type="submit" class="btn_sty btn_sx w-100 p-2" style="height: 40px" data-v-971fb12a="">
                                        Create account
                                    </button>
                                </div>
                                <div class="register-link m-t-15 text-center d-flex justify-content-center small my-3">
                                    <p>Already have account ? <a href="{{ route('login') }}"> Sign in</a></p>
                                </div>
                            </form>
                        </div>        
                </div>
            </div>
        </div>
    
    </div>
   
</div>
@endsection
@push('top')
    <style>
        .form-control {
            height : 40px;
        }
        .form-group label{
            font-size: 0.9rem;
        }
        .form-group{
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-bottom: 0.9rem;
            flex-direction: column;
        }
        .form-control:focus{
            box-shadow: none;
        }
    </style>
    <script defer src="{{ asset('assets/js/fn.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('guest/css/trading-opportunity.css') }}" />
@endpush