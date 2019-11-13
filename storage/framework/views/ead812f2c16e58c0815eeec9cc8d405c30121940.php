<?php $__env->startSection('content'); ?>
    

    <style>
        .select2-selection__choice {
            color: #676767 !important;
        }

        .select2-container {
            width: 100% !important;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
           margin: 0 auto;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>


    <!-- DELETE -->
    <div id="TimesheetModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="close_modal('timesheet')">&times;</span>
            <h4 id="modal_title">Timesheet Manage </h4>
            <form action="/admin/projects/timesheet_store" method="post">
                <?php echo csrf_field(); ?>
                <div class="col-md-3">
                    <input type="hidden" name="project_id" id="project_id">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Mentor:</label>
                        <select class="select2 form-control" id="timesheet_user" name="mentor_id" required>
                            <optgroup label="Choose Mentor">
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">From Date:</label>
                        <input type="date" placeholder="n/a" class="form-control" id="from_date" name="from_date">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">To Date:</label>
                        <input type="date" placeholder="n/a" class="form-control" id="to_date" name="to_date">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">To Date:</label>
                        <input type="number" placeholder="n/a" class="form-control" id="hours" name="hours">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="degree_modal_button" class="btn btn-primary">Add Timesheet</button>
                </div>
            </form>

            <table id="example3" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Mentor</th>
                    <th>Project</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Hours</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                </tbody>

            </table>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " onclick="close_modal('timesheet')">Close</button>

            </div>
        </div>

    </div>

    <!-- DELETE -->
    <div id="DeleteModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="close_modal('delete')">&times;</span>
            <h4 id="modal_title">Delete Project ? </h4>
            <h6 id="modal_title">Are you sure you want to delete project ? , there is no turning back !</h6>
            <form action="/admin/projects/destroy" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" id="hidden_delete_button">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " onclick="close_modal('delete')">Close</button>
                    <button type="submit" id="degree_modal_button" class="btn btn-danger">Delete Project</button>
                </div>
            </form>
        </div>
    </div>




    <!-- The Modal -->
    <div id="myModal" class="modal">
    <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="close_modal('crud')">&times;</span>
            <h4 id="modal_title">Add a New Project</h4>
            <form id="projects_form" action="/admin/projects/store" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input type="hidden" name="id" id="hidden_project_id">
                    <label for="recipient-name" class="col-form-label">ID:</label>
                    <input type="text" class="form-control" id="project_id_text" name="project_id">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Project Name:</label>
                    <input type="text" class="form-control" id="project_name" name="project_name" required>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Project Description:</label>
                    
                    <textarea class="form-control" id="project_description" name="project_description"
                              required></textarea>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Place:</label>
                    <select class="select2 form-control" id="place" name="place" required>
                        <optgroup label="Choose place">
                            <option value="Prishtina">Prishtina</option>
                            <option value="Prizren">Prizren</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Choose Team:</label>
                    <select class="select2 form-control" id="team" name="team_id" required>
                        <optgroup label="Choose Team">
                            <option value="none" disabled selected>Choose</option>
                            <?php $__currentLoopData = $data['teams']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($team->id); ?>"><?php echo e($team->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Matching Skills :</label>
                    <select class="select3 form-control" id="matching_skills" name="matching_skills[]"
                            multiple="multiple">
                        <optgroup label="Choose Skills">
                            <?php $__currentLoopData = $data['skills']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>"><?php echo e($skill); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Choose local Mentor:</label>
                    <select class="select2 form-control" id="local_mentor" name="local_mentor" required>
                        <optgroup label="Choose Local Mentor">
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Choose External Mentor:</label>
                    <select class="select2 form-control" id="external_mentor" multiple="multiple" name="external_mentors[]" required>
                        <optgroup label="Choose Mentors">
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Choose Status:</label>
                    <select class="select2 form-control" id="project_status" name="project_status" required>
                        <optgroup label="Choose status">
                            <option value="Active">Active</option>
                            <option value="Ongoing">Ongoing</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Completed">Completed</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Next Activity:</label>
                    <input type="text" placeholder="n/a" class="form-control" id="next_activity" name="next_activity">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="close_modal('crud')">Close</button>
                    <button type="submit" id="degree_modal_button" class="btn btn-primary">Edit Project</button>
                </div>
            </form>
        </div>

    </div>


    <div class="modal fade" id="createProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/uni-settings/store_business" method="post" id="business_form">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="id" id="hidden_business_id">
                            <label for="recipient-name" class="col-form-label">Name of Business:</label>
                            <input type="text" class="form-control" id="name_of_business" name="name_of_business">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status:</label>
                            <select class="select2 form-control" id="status" name="status">
                                <optgroup label="Choose Status">
                                    <option value="Active">Active</option>
                                    <option value="Dissolved">Disolved</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Fiscal Number:</label>
                            <input type="text" class="form-control" id="fiscal_number" name="fiscal_number">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="degree_modal_button" class="btn btn-primary">Edit Skill</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="content-wrapper" style="min-height: 837px;">
        <section class="content-header">
            <h1>
                <i class="fa fa-tasks"></i>
                Projects
            </h1>
            <ol class="breadcrumb">
                <li><a href="http://localhost:8000/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Projects</li>
            </ol>
        </section>
        <section class="content">

            <div class="row">
                <!-- Modal -->

                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Project Management</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body with-border" style="min-height: 300px; overflow-y: auto;">
                            <button type="button" class="btn btn-primary pull-right" id="myBtn" onclick="add_project()"
                                    style="margin: 10px;">Add Project
                            </button>
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Project Name</th>
                                    <th>Project Description</th>
                                    <th>Team</th>
                                    <th>Place</th>
                                    <th>Local Mentor</th>
                                    <th>External Mentor</th>
                                    <th>Project Status</th>
                                    <th>Next Activity</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data['projects']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($project->project_id); ?></td>
                                        <td><?php echo e($project->project_name); ?></td>
                                        <td><?php echo e($project->project_description); ?></td>
                                        <td><?php echo e(get_team_name($project->team_id)); ?></td>
                                        <td><?php echo e($project->place); ?></td>
                                        <td><?php echo e(get_local_mentor_name($project->local_mentor)); ?></td>
                                        <td>
                                            <?php $__currentLoopData = unserialize($project->external_mentor); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mentor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e(get_mentor_name($mentor)); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><?php echo e($project->project_status); ?></td>
                                        <td><?php echo e($project->next_activity); ?></td>
                                        <td>
                                            <button type="button"
                                                    onclick="edit_project('<?php echo e($project->id); ?>','<?php echo e($project->project_id); ?>','<?php echo e($project->project_name); ?>','<?php echo e($project->project_description); ?>','<?php echo e($project->team_id); ?>','<?php echo e(convert_to_json($project->matching_skills)); ?>','<?php echo e($project->place); ?>','<?php echo e($project->local_mentor); ?>','<?php echo e(convert_to_json($project->external_mentor)); ?>','<?php echo e($project->project_status); ?>','<?php echo e($project->next_activity); ?>')"
                                                    class="btn btn-primary">Edit
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                    onclick="deleteProject(<?php echo e($project->id); ?>)">Delete
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="timesheet('<?php echo e($project->id); ?>','<?php echo e(convert_to_json_mentors($project->external_mentor)); ?>')">Timesheet
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function () {

            modal.style.display = "block";
            var url = '/admin/projects/store';
            $('#projects_form').attr('action', url);
            $('#hidden_project_id').val('');
            $('#project_id').val('');
            $('#project_name').val('');
            $('#project_description').val('');
            $('#team').val('');
            $('#team').trigger('change');
            // $('#matching_skills').val(team_id);
            $('#matching_skills').val('');
            $('#matching_skills').trigger('change');
            $('#local_mentor').val('');
            $('#local_mentor').trigger('change');

        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>

        function timesheet(id,external_mentors) {
            // Get the modal
            if(external_mentor){
                var external_mentor = JSON.parse(external_mentors);
                console.log(external_mentor);
            }

            var dropdown = $("#timesheet_user");
            dropdown.empty();
            $.each(external_mentor, function (key, value) {
                dropdown.append($("<option />").val(key).text(value));
            });

            var modal = document.getElementById("TimesheetModal");
            var span = document.getElementsByClassName("close")[0];
            modal.style.display = "block";
            span.onclick = function () {
                modal.style.display = "none";
            }
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            $('#project_id').val(id);


            $('#example3').DataTable({
                "bDestroy": true,
                "bProcessing": true,
                "serverSide": true,
                "searching": false,
                "ajax": {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/admin/projects/fetch_timesheets",
                    data:{"project_id":id},
                    type: "post",
                    error: function () {
                        $("#example3").css("display", "none");
                    }
                },
                "aoColumns": [
                    {data: 'project_id'},
                    {data: 'mentor_id'},
                    {data: 'from_date'},
                    {data: 'to_date'},
                    {data: 'hours'},
                    {data: 'actions'}
                ]

            });



        }

        function deleteProject(id) {

            // Get the modal
            var modal = document.getElementById("DeleteModal");
            var span = document.getElementsByClassName("close")[0];
            modal.style.display = "block";
            span.onclick = function () {
                modal.style.display = "none";
            }
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            $('#hidden_delete_button').val(id)
        }


        function deleteTimesheet(id) {
            var result = confirm("Want to delete?");
            if (result) {
                $.ajax({
                    url: "/admin/projects/timesheet_destroy",
                    type: "POST",
                    data: {"id": id, "_token": "<?php echo e(csrf_token()); ?>"},
                    success: function (result, textStatus, jqXHR) {
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                    }
                });
            }
        }
        function deleteProject(id) {

            // Get the modal
            var modal = document.getElementById("DeleteModal");
            var span = document.getElementsByClassName("close")[0];
            modal.style.display = "block";
            span.onclick = function () {
                modal.style.display = "none";
            }
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            $('#hidden_delete_button').val(id)
        }
        function edit_project(id, project_id, project_name, project_description, team_id, matching_skills, place, local_mentor, external_mentor, project_status, next_activity) {
            var url = '/admin/projects/edit';
            $('#projects_form').attr('action', url);
            $('#hidden_project_id').val(id);
            var matching_skills = JSON.parse(matching_skills);
            var external_mentor = JSON.parse(external_mentor);


            var modal = document.getElementById("myModal");

            modal.style.display = "block";

            $('#project_id_text').val(project_id);
            $('#project_name').val(project_name);
            $('#project_description').val(project_description);
            $('#team').val(team_id);
            $('#team').trigger('change');
            // $('#matching_skills').val(team_id);
            $('#matching_skills').select2('val', [matching_skills]);
            $('#matching_skills').trigger('change');
            $('#local_mentor').val(local_mentor);
            $('#local_mentor').trigger('change');


            $('#external_mentor').select2('val', [external_mentor]);

            $('#project_status').val(project_status);
            $('#project_status').trigger('change');
            $('#next_activity').val(next_activity);
        }

    </script>



    <script>

        $('#matching_skills').change(function (e) {
            var selected = $(e.target).val();
            var dropdown = $("#external_mentor");

            data = [];
            $.ajax({
                url: "/admin/projects/match",
                type: "POST",
                data: {"selected": selected, "_token": "<?php echo e(csrf_token()); ?>"},
                success: function (result, textStatus, jqXHR) {
                    dropdown.empty();
                    data = JSON.parse(result)
                    console.log(data);
                    $.each(data, function () {
                        dropdown.append($("<option />").val(this.id).text(this.name + ' ' + this.lastname));
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });

        });
    </script>
    <script>

        $('#team').change(function (e) {
            var selected = $(e.target).val();

            var dropdown = $("#local_mentor");

            data = [];
            $.ajax({
                url: "/admin/projects/match_local_mentor",
                type: "POST",
                data: {"selected": selected, "_token": "<?php echo e(csrf_token()); ?>"},
                success: function (result, textStatus, jqXHR) {
                    dropdown.empty();
                    data = JSON.parse(result)
                    console.log(data);
                    $.each(data, function () {
                        dropdown.append($("<option />").val(this.id).text(this.name));
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });

        });
    </script>

    <script>
        function close_modal(type) {
            if(type == 'crud'){
                var modal = document.getElementById("myModal");
            }
            else if(type == 'delete'){
                var modal = document.getElementById("DeleteModal");
            }
            else if(type == 'timesheet'){
                var modal = document.getElementById("TimesheetModal");
            }

            modal.style.display = "none";
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('custom/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/custom/admin/projects.blade.php ENDPATH**/ ?>