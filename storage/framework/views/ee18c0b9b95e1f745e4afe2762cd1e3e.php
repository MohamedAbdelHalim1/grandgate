<!doctype html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="app-url" content="<?php echo e(env('APP_URL')); ?>">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo e(asset('assets/img/icon')); ?>">
	<title><?php echo e(env('APP_NAME')); ?></title>

	<!-- google font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

	<!-- aiz core css -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/vendors.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(asset('assets/css/aiz-core.css')); ?>">

    <style>
        body {
            font-size: 12px;
        }
    </style>
	<script>
    	var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '<?php echo e(trans('all.Nothing selected')); ?>',
            nothing_found: '<?php echo e(trans('all.Nothing found')); ?>',
            choose_file: '<?php echo e(trans('all.Choose file')); ?>',
            file_selected: '<?php echo e(trans('all.File selected')); ?>',
            files_selected: '<?php echo e(trans('all.Files selected')); ?>',
            add_more_files: '<?php echo e(trans('all.Add more files')); ?>',
            adding_more_files: '<?php echo e(trans('all.Adding more files')); ?>',
            drop_files_here_paste_or: '<?php echo e(trans('all.Drop files here, paste or')); ?>',
            browse: '<?php echo e(trans('all.Browse')); ?>',
            upload_complete: '<?php echo e(trans('all.Upload complete')); ?>',
            upload_paused: '<?php echo e(trans('all.Upload paused')); ?>',
            resume_upload: '<?php echo e(trans('all.Resume upload')); ?>',
            pause_upload: '<?php echo e(trans('all.Pause upload')); ?>',
            retry_upload: '<?php echo e(trans('all.Retry upload')); ?>',
            cancel_upload: '<?php echo e(trans('all.Cancel upload')); ?>',
            uploading: '<?php echo e(trans('all.Uploading')); ?>',
            processing: '<?php echo e(trans('all.Processing')); ?>',
            complete: '<?php echo e(trans('all.Complete')); ?>',
            file: '<?php echo e(trans('all.File')); ?>',
            files: '<?php echo e(trans('all.Files')); ?>',
        }
	</script>

</head>
<body class="">

	<div class="aiz-main-wrapper d-flex">
        <div class="flex-grow-1">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div><!-- .aiz-main-wrapper -->

    <?php echo $__env->yieldContent('modal'); ?>


    <script src="<?php echo e(asset('assets/js/vendors.js')); ?>" ></script>
    <script src="<?php echo e(asset('assets/js/aiz-core.js')); ?>" ></script>

    <?php echo $__env->yieldContent('script'); ?>

    <script type="text/javascript">
        <?php $__currentLoopData = session('flash_notification', collect())->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            AIZ.plugins.notify('<?php echo e($message['level']); ?>', '<?php echo e($message['message']); ?>');
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>

</body>
</html>
<?php /**PATH C:\laragon\www\grandgate\resources\views/backend/layout.blade.php ENDPATH**/ ?>