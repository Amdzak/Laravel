<?php $__env->startSection('content'); ?>
<h2>Post Category : <?php echo e($title); ?></h2>
    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="mb-4">
            <a href="/posts/<?php echo e($berita->slug); ?>"><h2><?php echo e($berita->judul); ?></h2></a>
            <p><?php echo e($berita->excerpt); ?></p>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/ahmad/04B42BEAB42BDD44/ikal/POLINEMA/Pemrograman/Laravel/lat-wpu/resources/views/category.blade.php ENDPATH**/ ?>