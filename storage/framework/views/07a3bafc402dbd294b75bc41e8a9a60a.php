<?php $__env->startSection('content'); ?>
    <h2> <?php echo e($berita->judul); ?></h2>
    <h5> author: <?php echo e($berita->author); ?></h5>
    
     <?php echo $berita->content; ?> 

    <a href="/blog">Back to Blog</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/ahmad/04B42BEAB42BDD44/ikal/POLINEMA/Pemrograman/Laravel/lat-wpu/resources/views/posts.blade.php ENDPATH**/ ?>