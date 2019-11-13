<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 11/13/2019
 * Time: 9:36 AM
 */
?>

<form action="/user/application/store_certificates/upload" enctype="multipart/form-data" method="post">
    <?php echo e(csrf_field()); ?>


    <input type="hidden" name="mentor_id" value="<?php echo e($data['mentor_id']); ?>">
    <input multiple="multiple" name="files[]" type="file">
    <br><br>
    <input type="submit" value="Upload">
</form><?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/public/views/certificates_upload.blade.php ENDPATH**/ ?>