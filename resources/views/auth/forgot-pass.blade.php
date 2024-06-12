@extends('guest.layouts.app')

@section('title', 'PrimesGlobe | Best Forex, Commodity, Indices, Share Trading Platform')

@section('content')

<div class="Analyst-content" data-v-1ba9f06e="">
    <div class="analyst_banner" data-v-1ba9f06e="">
        <div class="wrap" data-v-1ba9f06e="">
            <div class="analyst_banner_box" data-v-1ba9f06e="" style="height:150px">
                <h3 class="text-white h3" data-v-1ba9f06e="">
                    Forgot password?
                </h3>
            </div>
        </div>
    </div>
    <div class="wra bg-dange my-5" data-v-1ba9f06e="">
        <div class="Analyst_bo container bg-primar pb-5" data-v-1ba9f06e="" align="center">
            <div class="row justify-content-center p-3 p-md-0">
                <div class="col-md-6 login-container py-4 p-3 p-sm-4 p-md-5">
                    <h6 class="mx-3 page-alert h6 fw-normal mb-4 text-center alert alert-info">
                        A verification token will be sent to the email address you registered with
                    </h6>

                    <div class="mx-3">
                        @include('user.layouts.errors')
                    </div>
                   
                        <div class="bg-secondar px-3 align-items-center login-form mt-2 d-flex flex-column gap-4 justify-content-center row"
                            data-v-1ba9f06e="">
                            <form method="post" enctype="multipart/form-data">  
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input required type="text" name="email" class="form-control" placeholder="Enter Email address" value="{{ old('email') }}">
                                </div>
                                <div class="input_box" data-v-1ba9f06e="">
                                    <button type="submit" class="btn_sty btn_sx w-100 p-2" style="height: 40px" data-v-971fb12a="">
                                        Submit
                                    </button>
                                </div>
                                <div><br></div>
                                <div class="register-link m-t-15 text-center small d-flex justify-content-center">
                                    <p>Don't have an account ? <a href="/register"> Sign up</a> | <a href="/login"> Back to login</a></p>
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