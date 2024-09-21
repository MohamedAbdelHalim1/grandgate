<?php $__env->startSection('content'); ?>
    <?php if(session()->has('success') > 0): ?>
        <div class="row alert alert-success fade show" role="alert">
            <div class="col-10 text-lg-left"><?php echo e(session()->get('success')); ?></div>
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
            <h1 class="h3"><?php echo e(trans('all.All Projects')); ?></h1>
        </div>
    </div>


    <div class="card">
        <form class="" id="sort_customers" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-0 h6"><?php echo e(trans('all.Projects')); ?></h5>
                </div>

                <div class="col-md-3">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" id="search"
                            name="search"<?php if(isset($search)): ?> value="<?php echo e($search); ?>" <?php endif; ?>
                            placeholder="<?php echo e(trans('all.search')); ?>">
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table  mb-0" style="width: 100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo e(trans('all.Cover')); ?></th>
                            <th><?php echo e(trans('all.Name')); ?></th>
                            <th><?php echo e(trans('all.Title')); ?></th>

                            <th><?php echo e(trans('all.Product')); ?></th>
                            <th><?php echo e(trans('all.Order')); ?></th>
                            <th class="text-right"><?php echo e(trans('all.Options')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($project != null): ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <?php if($project->cover): ?>
                                        <td style="width: 25%"><img style="width: 100%" src="<?php echo e(asset($project->cover)); ?>">
                                        </td>
                                    <?php else: ?>
                                        <td style="width: 25%">-</td>
                                    <?php endif; ?>
                                    <td style="width: 25%"><?php echo e($project->name); ?></td>
                                    <td style="width: 25%"><?php echo e($project->title); ?></td>

                                    <?php
                                        $category = \App\Models\Category::find($project->category_id);
                                    ?>
                                    <td><?php echo e($category ? $category->name : ''); ?></td>

                                    <td><?php echo e($project->order); ?></td>
                                    <td class="text-right">
                                        <?php
                                            $lang = session()->get('lang', 'en');
                                        ?>
                                        <a href="<?php echo e(route('project_details', ['lang' => $lang, 'slug' => $project->slug])); ?>"
                                            class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                            title="<?php echo e(trans('all.View')); ?>">
                                            <i class="las la-eye"></i>
                                        </a>
                                        <a href="<?php echo e(route('projects.edit', $project->id)); ?>"
                                            class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                            title="<?php echo e(trans('all.Edit')); ?>">
                                            <i class="las la-edit"></i>
                                        </a>
                                        <button type="button" onclick="showDelete(<?php echo e($project->id); ?>)"
                                            class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                            title="<?php echo e(trans('all.Delete')); ?>">
                                            <i class="las la-trash"></i>
                                        </button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        function sort_customers(el) {
            $('#sort_customers').submit();
        }

        function showDelete(id) {
            swal({
                    title: `Are you sure you want to delete this request?`,
                    text: "It can't be undone",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var url = "<?php echo e(route('projects.destroy', ':id')); ?>";
                        url = url.replace(':id', id);
                        $.ajax({
                            type: "GET",
                            url: url,
                            data: id,
                            success: function(response) {
                                location.reload();

                            },
                            error: function(error) {
                                console.log(error);
                            }
                        });
                    }
                });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\grandgate\resources\views/backend/projects/index.blade.php ENDPATH**/ ?>