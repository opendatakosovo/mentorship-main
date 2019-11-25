@extends('custom/layouts/main')
@section('content')


    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="/themes/admin/assets/css/custom_css.css">
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

        .wrapper {
            background-color: #f9fafc !important;
        }
    </style>


    <!-- DELETE -->


    <!-- DELETE -->
    <div id="DeleteModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="close_modal('delete')">&times;</span>
            <h4 id="modal_title">Delete Project ? </h4>
            <h6 id="modal_title">Are you sure you want to delete project ? , there is no turning back !</h6>
            <form action="/admin/skills/destroy" method="post">
                @CSRF
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
            <h4 id="modal_title">Add a New Skill</h4>
            <form id="projects_form" action="/admin/skills/store" method="post">
                @CSRF
                <div class="form-group">
                    <input type="hidden" name="id" id="hidden_project_id">
                    <label for="recipient-name" class="col-form-label">Skill Name:</label>
                    <input type="text" class="form-control" id="skill_name" name="skill_name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="close_modal('crud')">Close</button>
                    <button type="submit" id="degree_modal_button" class="btn btn-primary">Add Skill</button>
                </div>
            </form>
        </div>
    </div>


    <div class="content-wrapper" style="min-height: 837px;">
        <section class="content-header">
            <h1>
                <i class="fa fa-tasks"></i>
                Skills
            </h1>
            <ol class="breadcrumb">
                <li><a href="http://localhost:8000/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Skills</li>
            </ol>
        </section>
        <section class="content">

            <div class="row">
                <!-- Modal -->

                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Skills Management</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body with-border" style="min-height: 300px; overflow-y: auto;">
                            <button type="button" class="btn btn-primary pull-right" id="myBtn"

                                    style="margin: 10px;">Add skill
                            </button>
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Skill Name</th>
                                    <th>Created at</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($skills as $skill)

                                    <tr>
                                        <td>{{$skill->id}}</td>
                                        <td>{{$skill->skill_name}}</td>
                                        <td>{{$skill->created_at}}</td>
                                        <td>
                                            <button type="button"
                                                    onclick="edit_project('{{$skill->id}}','{{$skill->skill_name}}')"
                                                    class="btn btn-primary">Edit
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                    onclick="deleteProject({{$skill->id}})">Delete
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
        var url = '/admin/skills/store';
        $('#projects_form').attr('action', url);
        $('#skill_name').val('');

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

        function edit_project(id, skill_name) {
            var url = '/admin/skills/edit';
            $('#projects_form').attr('action', url);
            $('#hidden_project_id').val(id);
            $('#skill_name').val(skill_name);
            $('#degree_modal_button').text('Edit');
            $('#modal_title').text('Edit Skill');

            var modal = document.getElementById("myModal");
            modal.style.display = "block";
        }
    </script>
    <script>
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
    </script>
    <script>
        function close_modal(type) {
            if (type == 'crud') {
                var modal = document.getElementById("myModal");
            }
            else if (type == 'delete') {
                var modal = document.getElementById("DeleteModal");
            }
            else if (type == 'timesheet') {
                var modal = document.getElementById("TimesheetModal");
            }

            modal.style.display = "none";
        }

        var span = document.getElementsByClassName("close")[0];
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection


