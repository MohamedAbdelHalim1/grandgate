<!doctype html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
   <?php echo $__env->yieldContent('head'); ?>

	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="app-url" content="<?php echo e(env('APP_URL')); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <!-- table sorter stylesheet-->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo e(asset('assets/img/icon.jpg')); ?>">
	<title><?php echo e(env('APP_NAME')); ?></title>

	<!-- google font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

	<!-- aiz core css -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/vendors.css')); ?>">
    
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/aiz-core.css')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-iconpicker.min.css')); ?>"/>
    <style>
        body {
            font-size: 12px;
        }
    </style>
	<script>
    	var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '<?php echo trans('all.Nothing selected'); ?>',
            nothing_found: '<?php echo trans('all.Nothing found'); ?>',
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

	<div class="aiz-main-wrapper">
        <?php echo $__env->make('backend.side_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="aiz-content-wrapper">
			<div class="aiz-main-content">
				<div class="px-15px px-lg-25px">
                    <?php echo $__env->yieldContent('content'); ?>
				</div>
				<div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
					<p class="mb-0">&copy; <?php echo e(env('APP_NAME')); ?></p>
				</div>
			</div><!-- .aiz-main-content -->
		</div><!-- .aiz-content-wrapper -->
	</div><!-- .aiz-main-wrapper -->

    <?php echo $__env->yieldContent('modal'); ?>


	<script src="<?php echo e(asset('assets/js/vendors.js')); ?>" ></script>
	<script src="<?php echo e(asset('assets/js/aiz-core.js')); ?>" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/plug-ins/1.13.1/api/sum().js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

    <!-- jQuery CDN -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap CDN -->
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap-Iconpicker Bundle -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap-iconpicker.bundle.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
    <script type="text/javascript">
	    <?php $__currentLoopData = session('flash_notification', collect())->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        AIZ.plugins.notify('<?php echo e($message['level']); ?>', '<?php echo e($message['message']); ?>');
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        function menuSearch(){
			var filter, item;
			filter = $("#menu-search").val().toUpperCase();
			items = $("#main-menu").find("a");
			items = items.filter(function(i,item){
				if($(item).find(".aiz-side-nav-text")[0].innerText.toUpperCase().indexOf(filter) > -1 && $(item).attr('href') !== '#'){
					return item;
				}
			});

			if(filter !== ''){
				$("#main-menu").addClass('d-none');
				$("#search-menu").html('')
				if(items.length > 0){
					for (i = 0; i < items.length; i++) {
						const text = $(items[i]).find(".aiz-side-nav-text")[0].innerText;
						const link = $(items[i]).attr('href');
						 $("#search-menu").append(`<li class="aiz-side-nav-item"><a href="${link}" class="aiz-side-nav-link"><i class="las la-ellipsis-h aiz-side-nav-icon"></i><span>${text}</span></a></li`);
					}
				}else{
					$("#search-menu").html(`<li class="aiz-side-nav-item"><span	class="text-center text-muted d-block"><?php echo e(trans('all.Nothing Found')); ?></span></li>`);
				}
			}else{
				$("#main-menu").removeClass('d-none');
				$("#search-menu").html('')
			}
        }
    </script>

</body>
</html>
<?php /**PATH C:\laragon\www\grandgate\resources\views/backend/app.blade.php ENDPATH**/ ?>