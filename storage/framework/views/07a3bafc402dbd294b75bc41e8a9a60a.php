<?php $__env->startSection('content'); ?>
    <h2> <?php echo e($berita->judul); ?></h2>
    <h6> By : <?php echo e($berita->author); ?> | category : <a href="/categories/<?php echo e($berita->category->slug); ?>"><?php echo e($berita->category->name); ?></a></h6>
    
     <?php echo $berita->content; ?> 

    <a href="/blog">Back to Blog</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/ahmad/04B42BEAB42BDD44/ikal/POLINEMA/Pemrograman/Laravel/lat-wpu/resources/views/posts.blade.php ENDPATH**/ ?>