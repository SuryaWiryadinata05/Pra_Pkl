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
            Data Staff , StaffBranch Dan Branch
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
            <div style="margin-top:4rem;"></div>
        </table>

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
            <div style="margin-top:4rem;"></div>
        </table>
    </fieldset>
</body>
</html>