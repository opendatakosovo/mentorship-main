<style type="text/css">
    .widget-user .widget-user-header {
        height: auto !important;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
            Masters
            <small>Masters home</small>
          </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Masters</li>
          </ol>
    </section>
    <!-- Main content -->
    <section class="content">
            <div class="row">
                <div class="col-md-4">
                    <?php echo $__env->make('master::admin.master.partial.menu.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="col-md-4">
                    <?php echo $__env->make('master::admin.master.partial.menu.location', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="col-md-4">
                    <?php echo $__env->make('master::admin.master.partial.menu.project', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

        </div>
    </section>
</div>
<?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/master/admin/master/home.blade.php ENDPATH**/ ?>