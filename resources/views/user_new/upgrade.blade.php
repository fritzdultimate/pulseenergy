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
                <span>Account upgrade</span>
            </div>
            <h2 class="nk-block-title fw-normal">Documents upload</h2>
            <div class="nk-block-des">
                <p>Supported documents format are (.jpeg, .jpg, .tiff, and .png). <span class="text-primary">
                    <em class="icon ni ni-info"></em>
                </span>
                </p>
            </div>
            </div>
        </div>
        
        <div class="nk-block">
            <div class="nk-block-head">
            <div class="nk-block-head-content">
                <div class="nk-block-des">
                <p>Upload a clear picture showing important details vividly.</p>
                </div>
            </div>
            </div>
            <div class="card card-bordered">
                <div class="nk-data data-list">
                    @if (empty($upgrade->front_doc))
                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#front">
                            <div class="data-col">
                                <span class="data-label">Front Document</span>
                            </div>
                            <div class="data-col data-col-end">
                                <span class="data-more">
                                <em class="icon ni ni-forward-ios"></em>
                                </span>
                            </div>
                        </div>
                    @endif

                    @if (empty($upgrade->back_doc))
                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#back">
                            <div class="data-col">
                                <span class="data-label">Back Document</span>
                            </div>
                            <div class="data-col data-col-end">
                                <span class="data-more">
                                <em class="icon ni ni-forward-ios"></em>
                                </span>
                            </div>
                        </div>
                    @endif

                    @if (empty($upgrade->trading_doc))
                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#trading">
                            <div class="data-col">
                                <span class="data-label">Trading Document</span>
                            </div>
                            <div class="data-col data-col-end">
                                <span class="data-more">
                                <em class="icon ni ni-forward-ios"></em>
                                </span>
                            </div>
                        </div>
                    @endif
                </div>

                @if (!empty($upgrade->front_doc) && !empty($upgrade->back_doc) && !empty($upgrade->trading_doc))
                    <div class="text-info text-center p-2">We are processing your documents, you will be notified shortly...</div>
                @endif
            </div>
            
            
        </div>
        </div>
    </div>
    </div>
</div>

@if (empty($upgrade->front_doc))
    <div class="modal fade" role="dialog" id="front">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Upload front of document</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/user/upgrade/profile" class="invest-form" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="front">Front</label>
                                            <input type="file" accept="image/*" class="form-control form-control-lg" id="front" name="front">
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                            <button  class="btn btn-lg btn-primary">Upload</button>
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
@endif
@if (empty($upgrade->back_doc))
    <div class="modal fade" role="dialog" id="back">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Upload back of document</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/user/upgrade/profile" class="invest-form" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="back">Back</label>
                                            <input type="file" accept="image/*" class="form-control form-control-lg" id="back" name="back">
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                            <button  class="btn btn-lg btn-primary">Upload</button>
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
@endif
@if (empty($upgrade->trading_doc))
    <div class="modal fade" role="dialog" id="trading">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Upload trading document</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/user/upgrade/profile" class="invest-form" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="trading">Trading</label>
                                            <input type="file" accept="image/*" class="form-control form-control-lg" id="trading" name="trading">
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                            <button  class="btn btn-lg btn-primary">Upload</button>
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
@endif
@include('user_new.layouts.footer')