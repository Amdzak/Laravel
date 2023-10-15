<?php $__env->startSection('content'); ?>
    <h2><?php echo e($title); ?></h2>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="mb-4 pb-3">
            <a class="text-decoration-none" href="/posts/<?php echo e($berita->slug); ?>"><h2><?php echo e($berita->judul); ?></h2></a>
            <h6> By : <a class="text-decoration-none" href="/authors/<?php echo e($berita->author->username); ?>"><?php echo e($berita->author->name); ?></a> | category : <a class="text-decoration-none" href="/categories/<?php echo e($berita->category->slug); ?>"><?php echo e($berita->category->name); ?></a></h6>
            <p><?php echo e($berita->excerpt); ?></p>
            <a class="text-decoration-none" href="/posts/<?php echo e($berita->slug); ?>">Read More...</a>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/ahmad/04B42BEAB42BDD44/ikal/POLINEMA/Pemrograman/Laravel/lat-wpu/resources/views/post.blade.php ENDPATH**/ ?>