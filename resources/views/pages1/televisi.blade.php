<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th colspan="2">Televisi</th>
        <th>Acara Tv</th>
        <th>Jam Tayang</th>
        <th>Jadwal Tayang</th>
    </tr>
            @foreach($televisi as $tp)
            <tr>
            <th>{{$tp['tv']}}</th>
            @foreach($tp['acara'] as $ta)
            <th colspan="2">{{$ta}}</th>
            @endforeach
            @foreach($tp['jt'] as $tu)
            <th>{{$tu}}</th>
            @endforeach
            @foreach($tp['jtt'] as $to)
            <th>{{$to}}</th>
            @endforeach
        </tr>
            @endforeach

            

</table>
    
</body>
</html>