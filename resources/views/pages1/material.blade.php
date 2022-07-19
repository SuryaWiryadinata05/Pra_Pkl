<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Toko Material</h2>
    @if ($b == "Pasir urug") 
         Material Anda ke-1 :  <Strong>{{$b}}</Strong>
        <br> Harga {{$b}} Rp.50.000
    @elseif ($b == "Batako Besar") 
         Material Anda ke-1 :  <Strong>{{$b}}</Strong>
        <br> Harga {{$b}} Rp.30.000
    @elseif ($b == "Bata Merah") 
         Material Anda ke-1 :  <Strong>{{$b}}</Strong>
        <br> Harga {{$b}} Rp.40.000
    @elseif ($b == "Batu Apung") 
         Material Anda ke-1 :  <Strong>{{$b}}</Strong>
        <br> Harga {{$b}} Rp.65.000
    @else
        Data anda kosong
    @endif
<hr>
    @if ($b1 == "Pasir urug") 
         Material Anda ke-2 :  <Strong>{{$b1}}</Strong>
        <br> Harga {{$b1}} Rp.50.000
    @elseif ($b1 == "Batako Besar") 
         Material Anda ke-2 :  <Strong>{{$b1}}</Strong>
        <br> Harga {{$b1}} Rp.30.000
    @elseif ($b1 == "Bata Merah") 
         Material Anda ke-2 :  <Strong>{{$b1}}</Strong>
        <br> Harga {{$b1}} Rp.40.000
    @elseif ($b1 == "Batu Apung") 
         Material Anda ke-2 :  <Strong>{{$b1}}</Strong>
        <br> Harga {{$b1}} Rp.65.000
    @else
        Data anda kosong
    @endif    
</body>
</html>