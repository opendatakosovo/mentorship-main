<div class='row disabled'>
 <?php echo Form::hidden('upload_folder'); ?>

  <div class='col-md-6 col-sm-6'>
         <?php echo Form::text('name')
         -> required()
         -> label(trans('block::block.label.name'))
         -> placeholder(trans('block::block.placeholder.name')); ?>

  </div>
  <div class='col-md-6 col-sm-6'>
         <?php echo Form::select('category_id')
         ->required()
         ->options(Block::selectCategories())
         -> label(trans('block::block.label.category_id'))
         -> placeholder(trans('block::block.placeholder.category_id')); ?>

  </div>
  <div class='col-md-6 col-sm-6'>
         <?php echo Form::select('status')
           -> options(trans('block::block.options.status'))
         -> label(trans('block::block.label.status'))
         -> placeholder(trans('block::block.placeholder.status')); ?>

  </div>
  <div class='col-md-6 col-sm-6'>
         <?php echo Form::text('url')
         -> label(trans('block::block.label.url'))
         -> placeholder(trans('block::block.placeholder.url')); ?>

  </div>
  <div class='col-md-6 col-sm-6'>
         <?php echo Form::number('order')
         -> label(trans('block::block.label.order'))
         -> placeholder(trans('block::block.placeholder.order')); ?>

  </div>
  <div class='col-md-6 col-sm-6'>
         <?php echo Form::text('icon')
         -> label(trans('block::block.label.icon'))
         -> placeholder(trans('block::block.placeholder.icon')); ?>

  </div>
  <div class='col-md-12 col-sm-12'>
         <?php echo Form::textarea('description')
         -> addClass('html-editor')
         -> label(trans('block::block.label.description'))
         -> placeholder(trans('block::block.placeholder.description')); ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/block/admin/block/partial/entry.blade.php ENDPATH**/ ?>