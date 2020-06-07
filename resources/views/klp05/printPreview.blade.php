<!DOCTYPE html>
<html>
<head>
    <title>Report</title>

</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $key => $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->nim}}</td>
                <td>{{$student->name}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>