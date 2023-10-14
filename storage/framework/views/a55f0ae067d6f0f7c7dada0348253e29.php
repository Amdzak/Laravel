<nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
    <div class="container">
      <a class="navbar-brand" href="#">AZK Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo e($title === "Home" ? 'active' : ''); ?>" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e($title === "About" ? 'active' : ''); ?>"  href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e($title === "Blog" ? 'active' : ''); ?>" href="/blog">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><?php /**PATH /media/ahmad/04B42BEAB42BDD44/ikal/POLINEMA/Pemrograman/Laravel/lat-wpu/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>