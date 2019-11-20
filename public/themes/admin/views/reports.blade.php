<!-- Content Wrapper. Contains page content -->
@php
    if(is_superuser(user()->email) == 'true'){
        $active_projects = get_projects_count('active');
        $finnished_projects = get_projects_count('finnished');
        $total_projects = get_projects_count('total');
        $timesheets = get_timesheets_all();
        $total_working_hours = get_working_hours_all();

        }elseif(is_admin(user()->email) == 'true'){
            $active_projects = get_projects_count_own(user()->email,'active');
             $finnished_projects = get_projects_count_own(user()->email,'finnished');
            $total_projects = get_projects_count_own(user()->email,'total');
            $timesheets = get_timesheets_all_own(user()->email);
            $total_working_hours = get_working_hours_all_own(user()->email);
        }
@endphp
<link media="all" type="text/css" rel="stylesheet" href="/themes/client/assets/css/app.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Reports
            <small>Reports home</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Reports</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Widget: user widget style 1 -->
                <div class="card bg-blue order-card">
                    <div class="card-block">
                        <h6>Active Projects</h6>

                        <h2 class="text-right"><i class="fas fa-chart-pie pull-left"></i><span>{{$active_projects}}</span></h2>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
            <!-- /.col -->
            <div class="col-md-3">
                <!-- Widget: user widget style 1 -->
                <div class="card bg-green order-card">
                    <div class="card-block">
                        <h6>Finished Projects</h6>
                        <h2 class="text-right"><i class="fas fa-layer-group pull-left"></i><span>{{$finnished_projects}}</span></h2>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
            <!-- /.col -->
            <div class="col-md-3">
                <div class="card bg-pink order-card">
                    <div class="card-block">
                        <h6>Total Projects</h6>
                        <h2 class="text-right"><i class="far fa-credit-card pull-left"></i><span>{{$total_projects}}</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-pink order-card">
                    <div class="card-block">
                        <h6>Total Working Hours</h6>
                        <h2 class="text-right"><i class="far fa-calendar-times pull-left"></i><span>{{$total_working_hours}}</span></h2>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Timesheets</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <div class="btn-group">
                                <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a id="myButtonControlID" href="#">Download Table</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12" id="divTableDataHolder">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Mentor</th>
                                        <th>From Date</th>
                                        <th>To date</th>
                                        <th>Working Hours</th>
                                        <th>Created By</th>
                                        <th>Created at</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($timesheets as $timesheet)

                                    <tr>
                                        <td>{{get_project_name($timesheet->project_id)}}</td>
                                        <td>{{get_mentor_name($timesheet->mentor_id)}}</td>
                                        <td>{{$timesheet->from_date}}</td>
                                        <td>{{$timesheet->to_date}}</td>
                                        <td>{{$timesheet->hours}}</td>
                                        <td>{{get_local_mentor_name($timesheet->created_by)}}</td>
                                        <td>{{$timesheet->created_at}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div><!-- ./box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );

    $("[id$=myButtonControlID]").click(function(e) {
        window.open('data:application/vnd.ms-excel,' + encodeURIComponent( $('div[id$=divTableDataHolder]').html()));
        e.preventDefault();
    });
</script>