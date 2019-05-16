<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

        <div class="wrapper">
            <nav id="sidebar" class="navbar navbar-expand-lg navbar-dark">
                
                <ul class="list-unstyled components" style="margin-top:80px; margin-left:20px;font-size:25px;">

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
            <div>       
                <h3>View your Notes</h3>
            </div><br>
            <div>       
                <table class="table" >
                    <thead align="center">
                        <tr>
                            <th>Notes Id</th>
                            <th>Notes Title</th>
                            <th>Category</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($note->id); ?></td>
                                <td><?php echo e($note->title); ?></td>
                                <td><?php echo e($note->category); ?>s</td>
                                <td>
                                    <a href="/show/<?php echo e($note->id); ?>">Show</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="/edit/<?php echo e($note->id); ?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a type="button" href="/delete/<?php echo e($note->id); ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/home.blade.php ENDPATH**/ ?>