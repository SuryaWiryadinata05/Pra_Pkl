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
    <ul>
    @foreach ($soal1['judul'] as $judul)
            <li>{{$judul}}</li>
            @if($judul == 'Berita')
            <ul>
                @foreach ($soal1['data'] as $data)
                <li>
                    {{$data}}
                </li>
                @if($data == 'Olahraga')
            <ul>
                @foreach ($soal1['isi'] as $isi)
                    <li>
                        {{$isi}}
                    </li>
                @endforeach
            </ul>
            @endif
            @endforeach
        </ul>
            @endif
    @endforeach
    </ul>
</fieldset>
</body>
</html>