

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success') > 0): ?>
    <div class="row alert alert-success fade show" role="alert">
        <div class="col-10 text-lg-left" ><?php echo e(session()->get('success')); ?></div>
        <div class="col-1 close">
            <button type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>

<?php elseif(count($errors) > 0): ?>
    <div class="alert alert-danger" role="alert">
        <div class="alert-text">
            <h4 class="alert-heading">Input Errors !</h4>
            <p>Some Error has been happened with New Inputs as Follows :</p>
            <hr>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="mb-0"><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php endif; ?>

<h1>SEO Meta Management</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Page</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $seoMetas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($meta->page); ?></td>
                    <td><?php echo e($meta->title); ?></td>
                    <td><?php echo e($meta->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('seo.edit', $meta->id)); ?>" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/1216096.cloudwaysapps.com/ncaabhugrv/public_html/resources/views/backend/seo/index.blade.php ENDPATH**/ ?>