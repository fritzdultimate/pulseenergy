@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-dark">KYC Management</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">KYC</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @include('admin.layouts.errors')
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                        
                                    </div>
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Front</th>
                                                    <th>Back</th>
                                                    <th>Trading</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($upgrades as $upgrade)
                                                        
                                                <tr class="background_white">

                                                    <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <h5>{{ ucfirst($upgrade->user->name) }}</h5>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <a href="/docs/kyc/{{ $upgrade['front_doc'] }}">Front</a>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <a href="/docs/kyc/{{ $upgrade['back_doc'] }}">Back</a>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <a href="/docs/kyc/{{ $upgrade['trading_doc'] }}">Trading Doc</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <form method="POST" action="/admin/upgrade/approve">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $upgrade['id'] }}">
                                                                    <input type="hidden" name="action" value="upgrade">
                                                                    <button type="submit" data-action="delete" data-id="{{ $upgrade['id'] }}" class="dropdown-item" href="#">Upgrade</button>
                                                                </form>

                                                                <form method="POST" action="/admin/upgrade/reject">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $upgrade['id'] }}">
                                                                    <input type="hidden" name="action" value="downgrade">
                                                                    <button type="submit" data-action="delete" data-id="{{ $upgrade['id'] }}" class="dropdown-item" href="#">Downgrade</button>
                                                                </form>
                                                            </div>
                                                        </div>
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
                @include('admin.layouts.footer')
            </div>
        </div>
        <div class="modal fade" id="plan-modal">
            <form class="page-form plan-form" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group icon_form comments_form">
                    <input required type="text" class="form-control require bg-light text-dark" name="name" placeholder="Enter Plan Name">
                </div>
                <div>
                    <input type="hidden" class="form-control bg-light text-dark" name="id">
                    <button type="submit" class="btn btn-primary rounded-btn w-100">
                        <span class="form-loading d-none px-5">
                            <i class="fa fa-sync fa-spin"></i>
                        </span>
                        <span class='submit-text'>
                            Submit
                        </span>
                    </button>
                </div>
            </form>
        </div>
        @include('admin.layouts.general-scripts')
        <script src="www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
        <script src="{{  asset('assets/js/custom.min.js') }}"></script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/admin.parent-plan.js') }}"></script>
    </body>
</html>
