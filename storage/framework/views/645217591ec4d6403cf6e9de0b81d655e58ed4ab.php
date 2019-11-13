<div class="btn-group user-client">
    <button class="btn btn-xs btn-danger btn-search" type="button">
        <i aria-hidden="true" class="fa fa-search">
        </i>
        <span class="hidden-sm hidden-xs"> Search</span>
    </button>
    <button aria-expanded="false" class="btn btn-xs btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
        <span class="caret">
        </span>
        <span class="sr-only">
            Toggle Dropdown
        </span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li>
            <a class="btn-search" style="cursor:pointer;">
                <i aria-hidden="true" class="fa fa-fw fa-filter">
                </i>
                Show filters
            </a>
        </li>
        <li>
            <a class="btn-reset-filter" style="cursor:pointer;">
                <i class="fa fa-fw fa-ban text-danger">
                </i>
                Clear filters
            </a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a class="btn-save" style="cursor:pointer;">
                <i aria-hidden="true" class="fa fa-fw fa-floppy-o">
                </i>
                Save search
            </a>
        </li>
        <li>
            <a class="btn-open" style="cursor:pointer;">
                <i aria-hidden="true" class="fa fa-fw fa-folder-open-o">
                </i>
                Saved searches
            </a>
        </li>
    </ul>
</div>

<div class="modal fade" id="modal-search">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #dd4b39; color: #fff;">
              <button type="button" class="close" data-dismiss="modal" aaria-hidden="true">&times;</button>
              <h4 class="modal-title">Search</h4>
            </div>
              <?php echo Form::horizontal_open()
              ->id('form-search')
              ->method('POST')
              ->action(guard_url('settings/settings')); ?>

                <div class="modal-body has-form clearfix">
                    <div class="modal-form">
<div class="container-fluid">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[name]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.name'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[name]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[email]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.email'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[email]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[sex]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.sex'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[sex]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[dob]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.dob'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[dob]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[mobile]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.mobile'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[mobile]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[phone]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.phone'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[phone]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[address]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.address'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[address]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[street]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.street'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[street]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[city]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.city'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[city]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[district]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.district'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[district]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[state]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.state'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[state]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[country]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.country'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[country]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[photo]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.photo'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[photo]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[web]" class="col-sm-2 control-label">
                                        <?php echo trans('user::client.label.web'); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('search[web]')->raw(); ?>

                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12 col-lg-12">
                        <button aria-label="Close" class="btn pull-right btn-danger" data-dismiss="modal" type="button">
                            <i class="fa fa-times-circle">
                            </i>
                            Close
                        </button>
                        <button class="btn btn-success pull-right " id="btn-apply-search" name="new" style="margin-right:1%" type="button">
                            <i class="fa fa-check-circle">
                            </i>
                            Search
                        </button>
                    </div>
                </div>
              <?php echo Form::close(); ?>

        </div>
    </div>
</div>


<div class="modal fade" id="modal-open">
  <div class="modal-dialog">
    <div class="modal-content" style="max-width:400px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Saved</h4>
      </div>
      <div class="modal-body" style="height:210px; overflow-y: auto;">
        
        <div id="saved-list">
          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger"  name="Closerep" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close </button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
$(document).ready(function(){

    $(".user-client .btn-open").click(function(){
        toastr.info('This feature will be enabled soon.', 'Coming soon');
        return false;
        $('#open-list').load("<?php echo guard_url('/settings/setting/search/user.client.search'); ?>");
        $('#modal-open').modal("show");
    });

   $(".user-client .btn-search").click(function(){
      $('#modal-search').modal("show");
    });
   
    $('.user-client .btn-save').click(function(e){
        toastr.info('This feature will be enabled soon.', 'Coming soon');
        return false;
        var search = prompt("Please enter name for your search");
        if (search == null) {
            toastr.error('Please enter valid name.', 'Error');
            return false;
        }
        var formData = new FormData();
        formData.append('value', $("#form-search").serialize());
        formData.append('name', search);
        formData.append('key', 'user.client.search');
        formData.append('package', 'Page');
        formData.append('module', 'Page');

        $.ajax({
            url : "<?php echo guard_url('/settings/setting'); ?>",
            type: "POST",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success:function(data, textStatus, jqXHR)
            {
                toastr.success('Search saved successfully.', 'Success');
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                toastr.error('An error occurred while saving.', 'Error');
            }
        });

        e.preventDefault();
    });

    $('#btn-apply-search').click( function() {
        oSearch = {};
        $('#form-search input,#form-search select').each( function () {
          key = $(this).attr('name');
          val = $(this).val();
          oSearch[key] = val;
        });
        oTable.api().draw();
        $('#user-client-list .btn-reset-filter').css('display', '');
        $('#modal-search').modal("hide");
        
      });
    
    $(".btn-reset-filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        oSearch = {};
        $('#form-search input,#form-search select').each( function () {
          key = $(this).attr('name');
          val = $(this).val();
          oSearch[key] = val;
        });
        oTable.api().draw();
        $('#user-client-list .btn-reset-filter').css('display', 'none');

    });

});
</script><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/user/admin/default/partial/filter.blade.php ENDPATH**/ ?>