<?php $__env->startSection('content'); ?>
    <h1>Halaman About</h1>
    
    <h3>Nama : <?php echo e($nama); ?></h3>
    <p>Email : <?php echo e($email); ?></p>
    <p>Location : <?php echo e($addr); ?></p>
    <img src="./img/<?php echo e($gbr); ?>" width="150" class="img-thumbnail rounded-circle">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/ahmad/04B42BEAB42BDD44/ikal/POLINEMA/Pemrograman/Laravel/lat-wpu/resources/views/about.blade.php ENDPATH**/ ?>