<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 20%; /* Could be more or less, depending on screen size */
        height:25%;
        p{
            margin:0 !important;
        }
        input{
            margin-bottom:5% !important;
        }
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('user::client.name', ['client' => $type]) !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#user-client-entry' data-href='{{guard_url('user/' . $type . '/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($client->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#user-client-entry' data-href='{{ guard_url('user/' . $type) }}/{{$client->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#user-client-entry' data-datatable='#user-client-list' data-href='{{ guard_url('user/' . $type) }}/{{$client->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                <button id="myBtn" class="btn btn-primary btn-sm" type="button">Upload files for {{$client->name}}</button>
                @endif
            </div>
        </ul>

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Upload Certificates</p>
                <form accept-charset="utf-8" class="form-vertical"  method="POST" action="/admin/user_files/upload_files" novalidate="novalidate" enctype="multipart/form-data">
                    @CSRF
                    <input type="hidden" name="mentor_id" value="{{$client->id}}">
                    <input type="file" id="files" name="files[]" multiple>
                    {{-- <button  class="btn btn-danger btn-sm pull-right" type="submit">Submit</button> --}}
                {{-- </form> --}}
                 <p>Upload CV</p>
                {{-- <form accept-charset="utf-8" class="form-vertical"  method="POST" action="/admin/user_files/upload_files" novalidate="novalidate" enctype="multipart/form-data"> --}}
                    @CSRF
                    <input type="hidden" name="mentor_id" value="{{$client->id}}">
                    <input type="file" id="files" name="files[]" multiple>
                    <button  class="btn btn-danger btn-sm pull-right" type="submit">Submit</button>
                </form>
                
            </div>
        </div>

        {!!Form::vertical_open()
        ->id('user-client-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('user/' . $type))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('user::client.name', ['client' => $type]) !!}  [{!! $client->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @includeFirst(['user::' . $type . '.partial.entry', 'user::default.partial.entry'], ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>



    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>