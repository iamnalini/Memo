<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

        <div class="wrapper">
            <nav id="sidebar" class="navbar navbar-expand-lg navbar-dark">
                
                <ul class="list-unstyled components" style="margin-top:50px; margin-left:20px;font-size:25px;">
        
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
                    
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <h3>View your selected Note</h3>
                        </div>
                        <div class="form-group">
                            <label for="title">Notes Title</label>
                            <input type="text" name="title" value="<?php echo e($note->title); ?>" id="title" class="form-control" readonly/>
                        </div>
                        <div class="form-group">
                            <label for="category">Notes Category</label><br>
                            <select id = "category" class="form-control" disabled>
                                <option value = "others"><?php echo e($note->category); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Notes Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" readonly><?php echo e($note->description); ?></textarea>
                        </div>

                        <div class="form-group">
                            <a href="/view" class="btn btn-primary">Back</a>
                        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/show.blade.php ENDPATH**/ ?>