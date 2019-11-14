@php
    $projects_total = total_personal_projects(user()->email,'total');
    $projects_total_active = total_personal_projects(user()->email,'active');
    $personal_timesheets =   personal_timesheets(user()->email);

@endphp
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card bg-blue order-card">
                                        <div class="card-block">
                                            <h6>Projects Assigned Total</h6>
                                            <h2 class="text-right"><i class="fas fa-chart-pie pull-left"></i><span>{{$projects_total}}</span></h2>
                                            {{--<p class="mb-0">Completed<span class="pull-right">351</span></p>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card bg-blue order-card">
                                        <div class="card-block">
                                            <h6>Projects Assigned Active</h6>
                                            <h2 class="text-right"><i class="fas fa-chart-pie pull-left"></i><span>{{$projects_total_active}}</span></h2>
                                            {{--<p class="mb-0">Completed<span class="pull-right">351</span></p>--}}
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
                            $(document).ready( function () {
                                $('#myTable').DataTable();
                            } );
                        </script>