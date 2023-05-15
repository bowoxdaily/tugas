<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Structur Kontrol Web bowo.com</title>
</head>
<body>
    @if (count($mhs) == 1)
        <p>Jumlah Mahasiswa adalah satu</p>
    @elseif (count($mhs) ==2)
        <p>Jumlah Mahasiswa adalah dua</p>
    @else 
        <p>Jumlah Mahasiswa adalah lebih dari satu</p>
    @endif
</body>
</html>