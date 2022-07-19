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
            Data Branch
        </legend>
        <table border="1">
        <tr style="background-color: rgb(241, 205, 0)" >
            <th>branchNo</th>
            <th>bAddress</th>
        </tr>
            @foreach ($_branch as $data)
                <tr>
                    <td>{{$data['branchNo']}}</td>
                    <td>{{$data['bAddress']}}</td>
                </tr>
            @endforeach
        </table>
        
    </fieldset>
</body>
</html>