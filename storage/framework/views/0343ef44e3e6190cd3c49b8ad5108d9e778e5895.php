  <div class="row disabled">
      <?php echo Form::hidden('upload_folder'); ?>

      <div class='col-md-4 col-sm-4'>
             <?php echo Form::text('name')
             -> label(trans('block::category.label.name'))
             -> placeholder(trans('block::category.placeholder.name'))
             -> required(); ?>

      </div>
      <div class='col-md-4 col-sm-4'>
             <?php echo Form::text('slug')
             -> label(trans('block::category.label.slug'))
             -> placeholder(trans('block::category.placeholder.slug'))
             -> required(); ?>

      </div>
      <div class='col-md-4 col-sm-4'>
             <?php echo Form::select('status')
             -> label(trans('block::category.label.status'))
             -> options(trans('block::category.options.status'))
             -> placeholder(trans('block::category.placeholder.status')); ?>

      </div>
      <div class='col-md-12 col-sm-12'>
             <?php echo Form::text('title')
             -> label(trans('block::category.label.title'))
             -> placeholder(trans('block::category.placeholder.title')); ?>

      </div>
      <div class='col-md-12 col-sm-12'>
             <?php echo Form::textarea('details')
             -> label(trans('block::category.label.details'))
             -> placeholder(trans('block::category.placeholder.details')); ?>

      </div>
  </div>

<?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/block/admin/category/partial/entry.blade.php ENDPATH**/ ?>