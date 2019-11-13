
    
    

<?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-12 content-center text-center">
    <div class="list-view-item">
        <i class="<?php echo $block->icon; ?>"></i>
        
        <p><?php echo $block->description; ?> ​ </p>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/public/views/vendor/block/default.blade.php ENDPATH**/ ?>