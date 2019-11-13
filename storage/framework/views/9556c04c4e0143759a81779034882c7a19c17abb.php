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
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">

        <?php echo Theme::asset()->styles(); ?>

        <?php echo Theme::asset()->scripts(); ?>

    </head>

        <?php echo Theme::partial('header'); ?>

        <section class="dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <?php echo Theme::partial('aside'); ?>

                    </div>
                    <div class="col-sm-8 col-md-9">
                        <?php echo Theme::content(); ?>

                    </div>
                </div>
            </div>
        </section>


            <?php echo Theme::partial('footer'); ?>


        <?php echo Theme::asset()->container('footer')->scripts(); ?>


    </body>
</html>
<?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/client/layouts/default.blade.php ENDPATH**/ ?>