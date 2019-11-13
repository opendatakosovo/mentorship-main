<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/8/2019
 * Time: 2:31 PM
 */
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> <?php echo trans('contact::contact.name'); ?> <small> <?php echo trans('app.manage'); ?> <?php echo trans('contact::contact.names'); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo guard_url('/'); ?>"><i class="fa fa-dashboard"></i> <?php echo trans('app.home'); ?> </a></li>
            <li class="active"><?php echo trans('contact::contact.names'); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div id='contact-contact-entry'>
        </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs primary">
                <li class="active"><a href="#tab-pages-active" data-toggle="tab"><?php echo trans('contact::contact.names'); ?></a></li>
            </ul>
            <div class="tab-content">
                <table id="contact-contact-list" class="table table-striped data-table">
                    <thead class="list_head">
                    <th><?php echo trans('contact::contact.label.name'); ?></th>
                    <th><?php echo trans('contact::contact.label.phone'); ?></th>
                    <th><?php echo trans('contact::contact.label.mobile'); ?></th>
                    <th><?php echo trans('contact::contact.label.email'); ?></th>
                    <th><?php echo trans('contact::contact.label.city'); ?></th>
                    </thead>
                    <thead  class="search_bar">
                    <th><?php echo Form::text('search[name]')->raw(); ?></th>
                    <th><?php echo Form::text('search[phone]')->raw(); ?></th>
                    <th><?php echo Form::text('search[mobile]')->raw(); ?></th>
                    <th><?php echo Form::text('search[email]')->raw(); ?></th>
                    <th><?php echo Form::text('search[city]')->raw(); ?></th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/projects/admin/index.blade.php ENDPATH**/ ?>