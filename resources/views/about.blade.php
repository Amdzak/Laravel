<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AZK Blog | About </title>
    {{-- url di bawah sudah relatif terhadap folder public jadi tinggal ketik saja nama filenya  --}}
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halaman About</h1>
    {{-- tanda {{  }}  akan membawa parameter varialeb yang ada pada file route dan menanggil dengan pemanggilan key nya--}}
    <h3>Nama : <?= $nama ?></h3>
    <p>Email : {{ $email }}</p>
    <p>{{ $addr }}</p>
    <img src="./img/<?= $gbr ?>" width="150">
</body>
</html>