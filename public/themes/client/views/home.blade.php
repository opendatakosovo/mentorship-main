@php
    $projects_total = total_personal_projects(user()->email,'total');
    $projects_total_active = total_personal_projects(user()->email,'active');
    $personal_timesheets =   personal_timesheets(user()->email);
    $pending_requests =   my_pending_requests(user()->email);
    $accepted_requests =   my_accepted_requests(user()->email);
    $refused_requests =   my_refused_requests(user()->email);

@endphp
<div class="page-wrapper">


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Accept Assignment?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/client/assignment/update" method="POST">
                    @CSRF
                    <input type="hidden" id="project_id" name="project_id">
                    <input type="hidden" id="mentor_id" name="mentor_id">
                    <input type="hidden" id="status" name="status">
                    <div class="modal-body">
                        <p>Please Note that if you accept the assignment, there is no turning back!. Otherwise you have
                            to
                            contact the administrator to revoke this process</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">I accept</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Refuse Assignment?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/client/assignment/update" method="POST">
                    @CSRF
                    <input type="hidden" id="project_id_refused" name="project_id">
                    <input type="hidden" id="mentor_id_refused" name="mentor_id">
                    <input type="hidden" id="status_refused" name="status">

                    <div class="modal-body">
                        <p>Please Note that if you refuse the assignment, there is no turning back!. Otherwise you have
                            to
                            contact the administrator to revoke this process</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">I Refuse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card bg-blue order-card">
                <div class="card-block">
                    <h6>Projects Assigned Total</h6>
                    <h2 class="text-right"><i class="fas fa-chart-pie pull-left"></i><span>{{$projects_total}}</span>
                    </h2>
                    {{--<p class="mb-0">Completed<span class="pull-right">351</span></p>--}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-blue order-card">
                <div class="card-block">
                    <h6>Projects Assigned Active</h6>
                    <h2 class="text-right"><i
                                class="fas fa-chart-pie pull-left"></i><span>{{$projects_total_active}}</span></h2>
                    {{--<p class="mb-0">Completed<span class="pull-right">351</span></p>--}}
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Pending Requests</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fas fa-chevron-left"></i></li>
                            <li><i class="fas fa-window-maximize full-card"></i></li>
                            <li><i class="fas fa-minus minimize-card"></i></li>
                            <li><i class="fas fa-times close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <table class="table" id="myTable">
                        <thead>
                        <tr>
                            <th>Project</th>
                            <th>Mentor</th>
                            <th>From Date</th>
                            <th>To date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pending_requests as $request)
                            @if($request->status == 'Pending')
                                <tr>
                                    <td>{{get_project_name($request->project_id)}}</td>
                                    <td>{{get_mentor_name($request->mentor_id)}}</td>
                                    <td>{{get_project_detailed_info($request->project_id)->from_date}}</td>
                                    <td>{{get_project_detailed_info($request->project_id)->to_date}}</td>
                                    <td width="40%">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#exampleModal{{$request->id}}">Details
                                        </button>
                                        <button type="button"
                                                onclick="update_vars('{{$request->project_id}}','{{$request->mentor_id}}','Accepted')"
                                                class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal">Accept
                                        </button>
                                        <button type="button"
                                                onclick="update_vars('{{$request->project_id}}','{{$request->mentor_id}}','Refused')"
                                                class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModal2">Refuse
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$request->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel{{$request->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><b>Title:</b> {{get_project_name($request->project_id)}}</p>
                                                <p>
                                                    <b>Description:</b> {{get_project_detailed_info($request->project_id)->project_description}}
                                                </p>
                                                <p><b>From
                                                        Date:</b> {{get_project_detailed_info($request->project_id)->from_date}}
                                                </p>
                                                <p><b>To
                                                        Date:</b> {{get_project_detailed_info($request->project_id)->to_date}}
                                                </p>
                                                <p>
                                                    <b>Place:</b> {{get_project_detailed_info($request->project_id)->place}}
                                                </p>
                                                <p><b>Partner
                                                        Member:</b> {{get_team_name(get_project_detailed_info($request->project_id)->team_id)}}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Accepted Requests</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fas fa-chevron-left"></i></li>
                            <li><i class="fas fa-window-maximize full-card"></i></li>
                            <li><i class="fas fa-minus minimize-card"></i></li>
                            <li><i class="fas fa-times close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <table class="table" id="myTable1">
                        <thead>
                        <tr>
                            <th>Project</th>
                            <th>Mentor</th>
                            <th>From Date</th>
                            <th>To date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($accepted_requests as $request)
                            @if($request->status == 'Accepted')
                                <tr>
                                    <td>{{get_project_name($request->project_id)}}</td>
                                    <td>{{get_mentor_name($request->mentor_id)}}</td>
                                    <td>{{get_project_detailed_info($request->project_id)->from_date}}</td>
                                    <td>{{get_project_detailed_info($request->project_id)->to_date}}</td>
                                    <td width="40%">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#exampleModal{{$request->id}}">Details
                                        </button>
                                        {{--<button type="button"--}}
                                                {{--onclick="update_vars('{{$request->project_id}}','{{$request->mentor_id}}','Accepted')"--}}
                                                {{--class="btn btn-primary" data-toggle="modal"--}}
                                                {{--data-target="#exampleModal">Accept--}}
                                        {{--</button>--}}
                                        {{--<button type="button"--}}
                                                {{--onclick="update_vars('{{$request->project_id}}','{{$request->mentor_id}}','Refused')"--}}
                                                {{--class="btn btn-danger" data-toggle="modal"--}}
                                                {{--data-target="#exampleModal2">Refuse--}}
                                        {{--</button>--}}
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$request->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel{{$request->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><b>Title:</b> {{get_project_name($request->project_id)}}</p>
                                                <p>
                                                    <b>Description:</b> {{get_project_detailed_info($request->project_id)->project_description}}
                                                </p>
                                                <p><b>From
                                                        Date:</b> {{get_project_detailed_info($request->project_id)->from_date}}
                                                </p>
                                                <p><b>To
                                                        Date:</b> {{get_project_detailed_info($request->project_id)->to_date}}
                                                </p>
                                                <p>
                                                    <b>Place:</b> {{get_project_detailed_info($request->project_id)->place}}
                                                </p>
                                                <p><b>Partner
                                                        Member:</b> {{get_team_name(get_project_detailed_info($request->project_id)->team_id)}}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Refused Requests</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fas fa-chevron-left"></i></li>
                            <li><i class="fas fa-window-maximize full-card"></i></li>
                            <li><i class="fas fa-minus minimize-card"></i></li>
                            <li><i class="fas fa-times close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <table class="table" id="myTable2">
                        <thead>
                        <tr>
                            <th>Project</th>
                            <th>Mentor</th>
                            <th>From Date</th>
                            <th>To date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($refused_requests as $request)
                            @if($request->status == 'Refused')
                                <tr>
                                    <td>{{get_project_name($request->project_id)}}</td>
                                    <td>{{get_mentor_name($request->mentor_id)}}</td>
                                    <td>{{get_project_detailed_info($request->project_id)->from_date}}</td>
                                    <td>{{get_project_detailed_info($request->project_id)->to_date}}</td>
                                    <td width="40%">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#exampleModal{{$request->id}}">Details
                                        </button>
                                        {{--<button type="button"--}}
                                                {{--onclick="update_vars('{{$request->project_id}}','{{$request->mentor_id}}','Accepted')"--}}
                                                {{--class="btn btn-primary" data-toggle="modal"--}}
                                                {{--data-target="#exampleModal">Accept--}}
                                        {{--</button>--}}
                                        {{--<button type="button"--}}
                                                {{--onclick="update_vars('{{$request->project_id}}','{{$request->mentor_id}}','Refused')"--}}
                                                {{--class="btn btn-danger" data-toggle="modal"--}}
                                                {{--data-target="#exampleModal2">Refuse--}}
                                        {{--</button>--}}
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$request->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel{{$request->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><b>Title:</b> {{get_project_name($request->project_id)}}</p>
                                                <p>
                                                    <b>Description:</b> {{get_project_detailed_info($request->project_id)->project_description}}
                                                </p>
                                                <p><b>From
                                                        Date:</b> {{get_project_detailed_info($request->project_id)->from_date}}
                                                </p>
                                                <p><b>To
                                                        Date:</b> {{get_project_detailed_info($request->project_id)->to_date}}
                                                </p>
                                                <p>
                                                    <b>Place:</b> {{get_project_detailed_info($request->project_id)->place}}
                                                </p>
                                                <p><b>Partner
                                                        Member:</b> {{get_team_name(get_project_detailed_info($request->project_id)->team_id)}}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Timesheet</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fas fa-chevron-left"></i></li>
                            <li><i class="fas fa-window-maximize full-card"></i></li>
                            <li><i class="fas fa-minus minimize-card"></i></li>
                            <li><i class="fas fa-times close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <table class="table" id="myTable">
                        <thead>
                        <tr>
                            <th>Project</th>
                            <th>Mentor</th>
                            <th>From Date</th>
                            <th>To date</th>
                            <th>Working Hours</th>
                            <th>Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($personal_timesheets as $timesheet)
                            <tr>
                                <td>{{get_project_name($timesheet->project_id)}}</td>
                                <td>{{get_mentor_name($timesheet->mentor_id)}}</td>
                                <td>{{$timesheet->from_date}}</td>
                                <td>{{$timesheet->to_date}}</td>
                                <td>{{$timesheet->hours}}</td>
                                <td>{{$timesheet->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="short-cut-wrap">
                        <h2>Account</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{guard_url('profile')}}">
                                    <div class="short-cut-item">
                                        <div class="icon"><i class="far fa-user-circle"></i></div>
                                        <div class="body">
                                            <h4>Account details</h4>
                                            <p>Edit your account details</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{guard_url('password')}}">
                                    <div class="short-cut-item">
                                        <div class="icon"><i class="fas fa-key"></i></div>
                                        <div class="body">
                                            <h4>Change Password</h4>
                                            <p>Reset your password</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
        $('#myTable1').DataTable();
        $('#myTable2').DataTable();
    });
</script>

<script>
    function update_vars(project_id, mentor_id, status) {
        if (status == 'Accepted') {
            $('#project_id').val(project_id);
            $('#mentor_id').val(mentor_id);
            $('#status').val(status);
        } else {
            $('#project_id_refused').val(project_id);
            $('#mentor_id_refused').val(mentor_id);
            $('#status_refused').val(status);
        }

    }
</script>