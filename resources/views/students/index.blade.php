<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | Students</title>
</head>

<body>

<h1>Student List</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Year Level</th>
        <th>Actions</th>
    </tr>

    @foreach ($data as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->year_level }}</td>
            <td>
                <a href="{{ route('students.show', ['id' => $student->id]) }}">View</a> |
                <a href="{{ route('students.edit', ['id' => $student->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach

</table>

<br>

<a href="{{ route('students.create') }}">Add New Student</a>

</body>

</html>
