<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show all Students</title>
</head>
<body>
    <h1>Show all students</h1>
    <div class="container">
        <h1>show all students</h1>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>User_ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Year</th>
                <th>Picture</th>
                <th>Province</th>
                <th>Status</th>
            </tr>
            </thead>
            @foreach ($students as $student)   
            <tbody>
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->user_id}}</td>
                    <td>{{$student->firstname}}</td>
                    <td>{{$student->lastname}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->year}}</td>
                    <td>{{$student->province}}</td>
                    <td>{{$student->picture}}</td>
                    <td>{{$student->status}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>