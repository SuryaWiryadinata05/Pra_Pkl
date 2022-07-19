<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
<legend>
    Data Siswa
</legend>
    
    @foreach ($siswa as $murid)
    Id : {{$murid['id']}} <br>
    Nama Anda : {{$murid['nama']}} <br>
    Umur Anda : {{$murid['umur']}} <br>
    Status :
    @if ($murid['umur'] >= 17)
    Anda Berhak Mendapatkan Sim
    @else
    Anda Belum Mendapatkan Sim
    @endif
    <br>
    Kelas : {{$murid['kelas']}} <br>
    Daftar Mata Pelajaran :
    @foreach ($murid['mapel'] as $mapel)
    <li>{{$mapel}}</li>
    @endforeach
    <hr>
    @endforeach
</fieldset>
</body>
</html>