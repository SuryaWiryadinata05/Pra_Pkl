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
            Data Staff branch
        </legend>
        <table border="1">

            <tr style="background-color: rgb(241, 205, 0)" >
                <th>StaffNo</th>
                <th>sName</th>
                <th>position</th>
                <th>salary</th>
                <th>branchNo</th>
                <th>bAddress</th>
            </tr>

            @foreach ($_staff_branch as $data)
                <tr>
                    <th>{{$data['staffNo']}}</th>
                    <th>{{$data['sName']}}</th>
                    <th>{{$data['position']}}</th>
                    <th>{{$data['salary']}}</th>
                    <th>{{$data['branchNo']}}</th>
                    <th>{{$data['bAddress']}}</th>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>