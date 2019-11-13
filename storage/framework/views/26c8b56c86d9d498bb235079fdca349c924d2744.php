
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Theme::getMetaTitle(); ?> :: <?php echo e(__('app.name')); ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300'" rel='stylesheet' type='text/css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/themes/admin/assets/css/custom_css.css">

        <?php echo Theme::asset()->styles(); ?>


        <?php echo Theme::asset()->scripts(); ?>


    </head>

    <body class="sidebar-mini  skin-<?php echo e(setting('admin.color', 'red')); ?>" >
        <div class="wrapper">
            <?php echo Theme::partial('header'); ?>

            <?php echo Theme::partial('aside'); ?>

            <?php echo Theme::content(); ?>

            <?php echo Theme::partial('right'); ?>

            <?php echo Theme::partial('footer'); ?>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    </body>
    <?php echo Theme::asset()->container('footer')->scripts(); ?>


</html>




<?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/admin/layouts/default.blade.php ENDPATH**/ ?>