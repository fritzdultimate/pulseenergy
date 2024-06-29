@extends('guest.layouts.app')

@section('title', env('APP_NAME'). " | Best Oil & Gas Platform")

@section('content')

<div class="Analyst-content" data-v-1ba9f06e="">
    <div class="analyst_banner" data-v-1ba9f06e="">
        <div class="wrap" data-v-1ba9f06e="">
            <div class="analyst_banner_box" data-v-1ba9f06e="" style="height:150px">
                <h3 class="text-white h3" data-v-1ba9f06e="">Log in To Dashboard</h3>
            </div>
        </div>
    </div>
    <div class="wra bg-dange my-5" data-v-1ba9f06e="">
        <div class="Analyst_bo container bg-primar pb-5" data-v-1ba9f06e="" align="center">
            <div class="row justify-content-center p-3 p-md-0">
                <div class="col-md-6 login-container py-4 p-3 p-sm-4 p-md-5">
                    <h5 class="mx-3 page-alert h5 mb-4 text-center">Enter your details to login</h5>

                    <div class="mx-3">
                        @include('user.layouts.errors')
                    </div>
                    <form method="POST">
                        @csrf
                        <div class="bg-secondar px-3 align-items-center login-form mt-2 d-flex flex-column gap-4 justify-content-center row"
                            data-v-1ba9f06e="">
                            <div class="input_box bg-succes" data-v-1ba9f06e=""> 
                                <label class="d-flex"> Login </label>
                                <input name="login" type="text" autocomplete="off" placeholder="Enter email or username" class="el-input__inner" value="{{ old('login') }}"/>
        
                            </div>
                            {{-- <div class="input_box " data-v-1ba9f06e="">
                                <label class="d-flex"> Password</label>
                                <input type="text" autocomplete="off" placeholder="Password" class="el-input__inner" name="password" value="{{ old('password') }}"/>
                            </div> --}}
                            <div>
                                <label class="d-flex"> Password</label>
                                <div class="input-group">
                                    <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" value="{{ old('password') }}">
                                    <div class="input-group-text c-pointer form-show-password">
                                        <span class="input-group-tex text-secondary d-none show-eye">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </span>
                                        <span class="input-group-tex text-secondary hide-eye">
                                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 justify-content-start">
                                <input class="form-check-input m-0" style="float: none" name="remember_me" type="checkbox" value="" id="remember_me">
                                <label class="form-check-label small" for="remember_me">
                                  Remember me?
                                </label>
                            </div>
                            <div class="d-none justify-content-end align-items-center form-actions">
                                {{-- <div class="d-flex gap-1 align-items-center">
                                    <input id="password" type="checkbox" class=""> <label class="small form-actions-label"
                                        for="password"> Remember Password </label>
                                </div> --}}
                                <a href="{{ route('guest.forgot-pass') }}" class="small">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="input_box" data-v-1ba9f06e="">
                                <button type="submit" class="btn_sty btn_sx w-100 p-2" style="height: 40px" data-v-971fb12a="">
                                    login
                                </button>
                            </div>
                            <div class="d-flex justify-content-center py-2 align-items-center form-actions">
                                {{-- <div class="d-flex gap-1 align-items-center">
                                    <input id="password" type="checkbox" class=""> <label class="small form-actions-label"
                                        for="password"> Remember Password </label>
                                </div> --}}
                                <a href="{{ route('guest.forgot-pass') }}" class="small">
                                    Forgot Password?
                                </a>
                            </div>
        
                        </div>
                    </form>
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
        .form-control:focus{
            box-shadow: none;
        }
    </style>
    <script defer src="{{ asset('assets/js/fn.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('guest/css/trading-opportunity.css') }}" />
@endpush