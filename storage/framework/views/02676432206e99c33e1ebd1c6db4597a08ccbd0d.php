<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo e(Theme::getMetaTitle()); ?> | <?php echo e(__('app.name')); ?></title>
        <meta name="description" content="<?php echo e(Theme::getMetaDesctiption()); ?>">
        <meta name="keyword" content="<?php echo e(Theme::getMetaKeyword()); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo e(asset('apple-touch-icon.png')); ?>">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style type="text/css">
        html {
            display: table;
            height: 100%;
            width: 100%;
        }
        </style>
        <?php echo Theme::asset()->styles(); ?>

        <?php echo Theme::asset()->scripts(); ?>

    </head>
    <body class="auth">

        <?php echo Theme::content(); ?>

        <div class="footer">
            <p><?php echo __('app.rights'); ?></p>
        </div>
        <?php echo Theme::asset()->container('footer')->scripts(); ?>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/client/layouts/auth.blade.php ENDPATH**/ ?>