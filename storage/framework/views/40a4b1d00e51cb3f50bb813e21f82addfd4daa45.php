<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

        <div class="wrapper">
            <nav id="sidebar" class="navbar navbar-expand-lg navbar-dark">
            
                <ul class="list-unstyled components" style="margin-top:50px; font-size:25px;">

                    
                    <li>
                        <a href="/create">Create</a>
                    </li><br>
                    <li>
                        <a href="/view">View</a>
                    </li>
                    
                </ul>
            </nav>
        </div>
        <div class="col-md-8" style="margin-left:60px;">
                    
            <form action="<?php echo e(URL::to('/')); ?>/cedit" method="post">
            <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($note->id); ?>" />
                <div class="form-group">
                    <h3>Update your Existing Notes</h3>
                </div>
                <div class="form-group">
                    <label for="notetitle">Notes Title</label>
                    <input value="<?php echo e($note->title); ?>" type="text" name="title" class="form-control" placeholder="Enter your Notes title" />
                </div>
                <div class="form-group">
                    <label for="notedesc">Notes Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Update your existing description"><?php echo e($note->description); ?></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" value="update" class="btn btn-primary">Update</button>
                </div>
            </form>
                
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/edit.blade.php ENDPATH**/ ?>