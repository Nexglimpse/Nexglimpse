<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('css'); ?>
<style>
    body {
        background-color: #f8f9fa;
    }
    .table-container {
        margin: 50px auto;
        max-width: 95%;
    }
    .card {
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2>Google Sheets Data</h2>
<div class="container table-container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Task List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <?php if(!empty($data) && count($data) > 0): ?>
                                <?php $__currentLoopData = $data[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <th><?php echo e($header); ?></th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = array_slice($data, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <?php if($index == 4): ?>  <!-- Assigned To Column -->
                                            <span class="badge text-white badge-lt bg-primary"><?php echo e($cell); ?></span>
                                        <?php elseif($index == 5): ?>  <!-- Priority Column -->
                                            <span class="badge badge-lt text-white
                                                <?php echo e($cell == 'High' ? 'bg-danger' : ($cell == 'Medium' ? 'bg-warning' : 'bg-success')); ?>">
                                                <?php echo e(strtoupper($cell)); ?>

                                            </span>
                                        <?php elseif($index == 6): ?>  <!-- Status Column -->
                                            <span class="badge badge-lt  text-white
                                                <?php echo e($cell == 'Completed' ? 'bg-success' : ($cell == 'In Progress' ? 'bg-warning' : 'bg-secondary')); ?>">
                                                <?php echo e($cell); ?>

                                            </span>
                                        <?php else: ?>
                                            <?php echo e($cell); ?>

                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit">Logout</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\automation\resources\views/dashboard/index.blade.php ENDPATH**/ ?>