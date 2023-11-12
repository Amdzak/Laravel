<?php $__env->startSection('content'); ?>
    <h2><?php echo e($title); ?></h2>

    
    <?php if($posts->count()): ?>
        <div class="card mb-3">
            <img src="https://media.istockphoto.com/id/1459313027/photo/choose-the-correct-answer-on-the-exam-questionnaire-with-checkboxes-filling-survey-form-online.webp?b=1&s=170667a&w=0&k=20&c=eaPa1j0WF4FXPCVCf-Fhw8zWucHDOlDu3nmVDdDh144=" class="card-img-top" height="360px" alt="...">

            <div class="card-body text-center">
                <h3 class="card-title"><?php echo e($posts[0]->judul); ?></h3>

                <small class="text-muted card-text">
                    Last updated <?php echo e($posts[0]->created_at->diffForHumans()); ?>

                    <h6> By : <a class="text-decoration-none" href="/authors/<?php echo e($posts[0]->author->username); ?>"><?php echo e($posts[0]->author->name); ?></a> | category : <a class="text-decoration-none" href="/categories/<?php echo e($posts[0]->category->slug); ?>"><?php echo e($posts[0]->category->name); ?></a> </h6>
                </small>

                <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>

                <a class="text-decoration-none btn btn-primary" href="/posts/<?php echo e($posts[0]->slug); ?>">Read More</a>
            </div>
        </div>
    <?php else: ?>
        <p class="text-center fs-4">Postingan Tidak Ada</p>
    <?php endif; ?>

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