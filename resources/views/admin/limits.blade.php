@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-dark">Limits</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">Limits</li>
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
                                                    <th>Deposit Limit</th>
                                                    <th>Withdrawal Limit</th>
                                                    <th>Reinvestment Limit</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($limits as $limit)
                                                        
                                                <tr class="background_white">

                                                    <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <h5>{{ $limit['tier_deposit_limit'] }}</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <h5>{{ $limit['tier_withdrawal_limit'] }}</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media cs-media">

                                                            <div class="media-body">
                                                                <h5>{{ $limit['tier_reinvesment_limit'] }}</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a data-name="{{ $limit['name'] }}" data-id="{{ $limit['id'] }}" data-action="edit" class="action-link dropdown-item" href="#">Edit</a>
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
            <form class="page-form plan-form" action="/admin/update/limit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group icon_form comments_form">
                    <label for="deposit">Deposit Limit</label>
                    <input required type="number" class="form-control require bg-light text-dark" name="deposit" placeholder="Deposit Limit" value="{{ $limit_s->tier_deposit_limit }}">
                </div>

                <div class="form-group icon_form comments_form">
                    <label for="deposit">Withdrawal Limit</label>
                    <input required type="number" class="form-control require bg-light text-dark" name="withdrawal" placeholder="Withdrawal Limit" value="{{ $limit_s->tier_withdrawal_limit }}">
                </div>

                <div class="form-group icon_form comments_form">
                    <label for="deposit">Reinvestment Limit</label>
                    <input required type="number" class="form-control require bg-light text-dark" name="reinvestment" placeholder="Reinvestment Limit" value="{{ $limit_s->tier_reinvesment_limit }}">
                </div>
                <div>
                    <input type="hidden" class="form-control bg-light text-dark" name="id" value="{{ $limit_s->id }}">
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
