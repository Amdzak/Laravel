<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AZK Blog | About </title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halaman About</h1>
    
    <h3>Nama : <?= $nama ?></h3>
    <p>Email : <?php echo e($email); ?></p>
    <p><?php echo e($addr); ?></p>
    <img src="./img/<?= $gbr ?>" width="150">
</body>
</html><?php /**PATH /media/ahmad/04B42BEAB42BDD44/ikal/POLINEMA/Pemrograman/Laravel/lat-wpu/resources/views/about.blade.php ENDPATH**/ ?>