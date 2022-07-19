<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @foreach($soal2 as $mahasiswa)
    Nama Anda : {{$mahasiswa['nama']}}
    <br>
    Nama Dosen :
    @if($mahasiswa['id'] == 1)
    Yusuf Bachtiar 
    @elseif($mahasiswa['id'] == 2)
    Yaris Riyadi 
    @endif
    <br>
    Nilai : {{$mahasiswa['nilai']}}
    <br>
    @if($mahasiswa['nilai'] >= 90 && $mahasiswa['nilai'] < 100)
    Grade : A
    @elseif($mahasiswa['nilai'] >= 80 && $mahasiswa['nilai'] <= 89)
    Grade : B
    @elseif($mahasiswa['nilai'] >= 70 && $mahasiswa['nilai'] <= 79)
    Grade : C
    @elseif($mahasiswa['nilai'] >= 50 && $mahasiswa['nilai'] <= 69)
    Grade : D
    @elseif($mahasiswa['nilai'] >= 0 && $mahasiswa['nilai'] <= 49)
    Grade : E
    @endif
    <hr>
    @endforeach

    

    
    
</body>
</html>