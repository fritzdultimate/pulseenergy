@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-dark">Child Plans</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">Child Plans</li>
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
                                        <button class="btn btn-rounded btn-primary add-plan">Add Child Plan</button>
                                    </div>
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Parent Plan</th>
                                                    <th>minimum amount ($)</th>
                                                    <th>maximum amount ($)</th>
                                                    <th>interest rate (%)</th>
                                                    <th>referral bonus (%)</th>
                                                    <th>duration (days)</th>
                                                    <th>Active</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($child_plans as $child_plan)
                                                <tr class="background_white">
                                                    <td>
                                                        {{ $child_plan['name'] }}
                                                    </td>
                                                    <td>
                                                        {{ $child_plan->parent_plan ? $child_plan->parent_plan->name : '' }}
                                                    </td>
                                                    <td>
                                                        {{ $child_plan['minimum_amount'] }}
                                                    </td>
                                                    <td>
                                                        {{ $child_plan['maximum_amount'] }}
                                                    </td>
                                                    <td>
                                                        {{ $child_plan['interest_rate'] }}
                                                    </td>
                                                    <td>
                                                        {{ $child_plan['referral_bonus'] }}
                                                    </td>
                                                    <td>
                                                        {{ $child_plan['duration'] }}
                                                    </td>
                                                    <td>
                                                        {{ $child_plan['active'] ? 'True' : 'False'}}
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a data-action="edit" 
                                                                data-name="{{ $child_plan['name'] }}" data-minimum_amount="{{ $child_plan['minimum_amount'] }}" 
                                                                data-maximum_amount="{{ $child_plan['maximum_amount'] }}" data-referral_bonus="{{ $child_plan['referral_bonus'] }}" 
                                                                data-interest_rate="{{ $child_plan['interest_rate'] }}" data-duration="{{ $child_plan['duration'] }}" data-id="{{ $child_plan['id'] }}" 
                                                                data-parent_id="{{ $child_plan['parent_investment_plan_id'] }}"  class="action-link dropdown-item" href="#">Edit</a>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $child_plan['id'] }}">
                                                                    <input type="hidden" name="action" value="delete">
                                                                    <button type="submit" data-action="delete" data-id="{{ $child_plan['id'] }}" class="dropdown-item" href="#">Delete</button>
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
        <div class="modal" id="plan-modal">
            <form class="page-form plan-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group icon_form comments_form">
                    <label class="text-dark">Parent Plan</label>
                    <select class="w-100 form-control bg-light text-dark" name="parent_id" id="parent_id">
                        @foreach ($parent_plans as $parent_plan)
                            <option value="{{ $parent_plan['id'] }}"> {{ $parent_plan['name'] }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group icon_form comments_form">
                    <label class="text-dark">Plan Name</label>
                    <input required type="text" class="form-control bg-light text-dark require" name="name" placeholder="Enter Plan Name">
                </div>
                <div class="form-group icon_form comments_form">
                    <label class="text-dark">Minimum Amount($)</label>
                    <input required type="number" class="form-control bg-light text-dark require" name="minimum_amount" placeholder="Enter Plan Minimum Amount">
                </div>
                <div class="form-group icon_form comments_form">
                    <label class="text-dark">Maximum Amount($)</label>
                    <input required type="number" class="form-control bg-light text-dark require" name="maximum_amount" placeholder="Enter Plan Maximum Amount">
                </div>
                <div class="form-group icon_form comments_form">
                    <label class="text-dark">Duration(days)</label>
                    <input required type="number" class="form-control bg-light text-dark require" name="duration" placeholder="Enter Plan Duration in days">
                </div>
                <div class="form-group icon_form comments_form">
                    <label class="text-dark">Interest Rate(%)</label>
                    <input required type="number" class="form-control bg-light text-dark require" name="interest_rate" placeholder="Enter Plan Interest">
                </div>
                <div class="form-group icon_form comments_form">
                    <label class="text-dark">Referral Bonus(%)</label>
                    <input required type="number" class="form-control bg-light text-dark require" name="referral_bonus" placeholder="Enter Plan Referral Bonus">
                </div>
                <div>
                    <input type="hidden" name="id">
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
        <script src="{{  asset('assets/js/admin.child-plan.js') }}"></script>
    </body>
</html>
