<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | Students</title>
</head>

<body>

<h1>Welcome to the Student Portal</h1>

<p>
This system allows users to manage student information including
adding, viewing, and editing student records.
</p>

<a href="{{ route('students.index') }}">
    Go to Student List
</a>

</body>

</html>
