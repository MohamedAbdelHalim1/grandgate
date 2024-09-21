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


<div class=" text-left mt-2 mb-3">
    <div class="align-items-center">
        <h1 class="h3"><?php echo e(trans('all.All Blog')); ?></h1>
    </div>
</div>


<div class="card">
    <form class="" id="sort_customers" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-0 h6"><?php echo e(trans('all.All Blog')); ?></h5>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-0">
                    <input type="text" class="form-control" id="search" name="search"<?php if(isset($search)): ?> value="<?php echo e($search); ?>" <?php endif; ?> placeholder="<?php echo e(trans('all.search')); ?>">
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table  mb-0">
                <thead>
                    <tr>
                        <th><?php echo e(trans('all.Cover')); ?></th>
                        <th><?php echo e(trans('all.Name')); ?></th>
                        <th><?php echo e(trans('all.Title')); ?></th>
                        <th><?php echo e(trans('all.Order')); ?></th>
                        <th><?php echo e(trans('Show In Home-')); ?><small>(only 6 will appear)</small></th> <!-- New column for checkbox -->
                        <th class="text-right"><?php echo e(trans('all.Options')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($post != null): ?>
                            <tr>
                                <?php if($post->cover): ?>
                                    <td style="width: 25%"><img style="width: 100%" src="<?php echo e(asset($post->cover)); ?>"></td>
                                <?php else: ?>
                                    <td style="width: 25%">-</td>
                                <?php endif; ?>
                                <td><?php echo e($post->name); ?></td>
                                <td><?php echo e($post->title); ?></td>
                                <td><?php echo e($post->order); ?></td>
                                <td>
                                    <input type="checkbox" class="selected-checkbox" data-id="<?php echo e($post->id); ?>" 
                                    <?php echo e($post->selected ? 'checked' : ''); ?>>
                                </td>
                                <td class="text-right">
                                    <a href="<?php echo e(route('blog.edit', $post->id)); ?>" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="<?php echo e(trans('all.Edit')); ?>">
                                            <i class="las la-edit"></i>
                                    </a>
                                    <a href="<?php echo e(route('blog.destroy', $post->id)); ?>" class="btn btn-soft-primary btn-icon btn-circle btn-sm" onclick="confirmDelete(event, this.href)"  title="<?php echo e(trans('all.Delete')); ?>">
                                            <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.selected-checkbox');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const isChecked = this.checked ? 1 : 0;
                const blogId = this.getAttribute('data-id');

                fetch(`/admin/en/blogs/update-selected/${blogId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    },
                    body: JSON.stringify({ selected: isChecked })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Blog selected status updated');
                    } else {
                        console.log('Failed to update selected status');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

            });
        });
    });
</script>

<script type="text/javascript">
    function sort_customers(el){
        $('#sort_customers').submit();
    }

    function confirmDelete(event, url) {
    event.preventDefault(); // Prevent the default anchor behavior
    if (confirm("Are you sure you want to delete this blog?")) {
        // Create a form to send the DELETE request
        const form = document.createElement('form');
        form.action = url;
        form.method = 'POST';

        // Add CSRF token input field
        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        form.appendChild(csrfInput);

        // Add method input field for DELETE
        const methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'DELETE';
        form.appendChild(methodInput);

        document.body.appendChild(form);
        form.submit(); // Submit the form
    }
}

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\grandgate\resources\views/backend/blog/index.blade.php ENDPATH**/ ?>