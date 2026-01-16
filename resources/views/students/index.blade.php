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

    <tr>
        <td>Juan Dela Cruz</td>
        <td>BSIT</td>
        <td>2nd Year</td>
        <td>
            <a href="{{ route('students.show') }}">View</a> |
            <a href="{{ route('students.edit') }}">Edit</a>
        </td>
    </tr>

    <tr>
        <td>Maria Santos</td>
        <td>BSCS</td>
        <td>3rd Year</td>
        <td>
            <a href="{{ route('students.show') }}">View</a> |
            <a href="{{ route('students.edit') }}">Edit</a>
        </td>
    </tr>

</table>

<br>

<a href="{{ route('students.create') }}">Add New Student</a>

</body>

</html>
