@include('user_new.layouts.header')
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
    <div class="nk-content-inner">
        <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-head-content">

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif


            <div class="nk-block-head-sub">
                <span>My Profile</span>
            </div>
            <h2 class="nk-block-title fw-normal">Account Info</h2>
            <div class="nk-block-des">
                <p>You have full control to manage your own account setting. <span class="text-primary">
                    <em class="icon ni ni-info"></em>
                </span>
                </p>
            </div>
            </div>
        </div>
        <ul class="nk-nav nav nav-tabs">
            <li class="nav-item">
            <a class="nav-link" href="profile.html">Personal</a>
            </li>
        </ul>
        <div class="nk-block">
            <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Personal Information</h5>
                <div class="nk-block-des">
                <p>Basic info, like your name and email, that you use on our Platform.</p>
                </div>
            </div>
            </div>
            <div class="card card-bordered">
                <div class="nk-data data-list">
                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Full Name</span>
                            <span class="data-value">{{ ucfirst($user->firstname) . ' ' . ucfirst($user->middlename) . ' ' . ucfirst($user->lastname) }}</span>
                        </div>
                        <div class="data-col data-col-end">
                            <span class="data-more">
                            <em class="icon ni ni-forward-ios"></em>
                            </span>
                        </div>
                    </div>

                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Username</span>
                            <span class="data-value">{{ ucfirst($user->name) }}</span>
                        </div>
                        <div class="data-col data-col-end">
                            <span class="data-more">
                            <em class="icon ni ni-forward-ios"></em>
                            </span>
                        </div>
                    </div>

                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Email</span>
                            <span class="data-value">{{ $user->email }}</span>
                        </div>
                        <div class="data-col data-col-end">
                            <span class="data-more disable">
                            <em class="icon ni ni-lock-alt"></em>
                            </span>
                        </div>
                    </div>
                    <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Account status</span>
                        <span class="data-value text-soft">Active</span>
                    </div>
                    <div class="data-col data-col-end">
                        
                    </div>
                    </div>
                    <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Email status</span>
                        <span class="data-value">{{ $user->email_verified_at ? 'Verified' : 'Not verified' }}</span>
                    </div>
                    <div class="data-col data-col-end">
                        
                    </div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Joined at</span>
                            <span class="data-value">{{ get_day_format($user->created_at) }} </span>
                        </div>
                        <div class="data-col data-col-end">
                            
                        </div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Last updated at</span>
                            <span class="data-value">{{ get_day_format($user->updated_at) }} </span>
                        </div>
                        <div class="data-col data-col-end">
                            
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        </div>
    </div>
    </div>
</div>
<div class="modal fade" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <a href="#" class="close" data-bs-dismiss="modal">
        <em class="icon ni ni-cross-sm"></em>
        </a>
        <div class="modal-body modal-body-lg">
        <h5 class="title">Update Profile</h5>
        <ul class="nk-nav nav nav-tabs">
            <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#address">Password</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="personal">
                <form action="/user/update/profile" class="invest-form" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Last Name</label>
                            <input type="text" class="form-control form-control-lg" id="full-name" value="{{ ucfirst($user->lastname) }}" placeholder="Enter Last name" name="lastname">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="display-name">First Name</label>
                            <input type="text" class="form-control form-control-lg" id="display-name" value="{{ ucfirst($user->firstname) }}" placeholder="Enter First name" name="firstname">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="phone-no">Middle Name</label>
                            <input type="text" class="form-control form-control-lg" id="phone-no" value="{{ ucfirst($user->middlename) }}" placeholder="Enter Middle name" name="middlename">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" class="form-control form-control-lg" id="username" placeholder="Choose a new username" name="username">
                        </div>
                        </div>
                        <div class="col-12">
                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                            <li>
                            <button  class="btn btn-lg btn-primary">Update Profile</button>
                            </li>
                            <li>
                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="address">
                <form action="/user/update/password" class="invest-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="address-l1">Current password</label>
                            <input type="text" class="form-control form-control-lg" id="address-l1" placeholder="******" name="current_password">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="address-l2">New password</label>
                            <input type="text" class="form-control form-control-lg" id="address-l2" placeholder="******" name="new_password">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="address-st">New password confirmation</label>
                            <input type="text" class="form-control form-control-lg" id="address-st" placeholder="******" name="new_password_confirm">
                        </div>
                        </div>
                        <div class="col-12">
                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                            <li>
                            <button class="btn btn-lg btn-primary">Update Password</button>
                            </li>
                            <li>
                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@include('user_new.layouts.footer')