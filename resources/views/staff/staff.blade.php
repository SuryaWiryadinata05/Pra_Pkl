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
            Data Staff
        </legend>
        <table border="1">
        <tr style="background-color: rgb(241, 205, 0)" >
            <td>StaffNo</td>
            <td>sName</td>
            <td>position</td>
            <td>salary</td>
            <td>branchNo</td>
        </tr>
        
        @foreach ($_staff as $staff)
       <tr>
            <th>{{$staff['staffNo']}}</th>
            <th>{{$staff['sName']}}</th>
            <th>{{$staff['position']}}</th>
            <th>{{$staff['salary']}}</th>
            <th>{{$staff['branchNo']}}</th>
       
        </tr>
        @endforeach
    
    </table>
    </fieldset>
</body>
</html>