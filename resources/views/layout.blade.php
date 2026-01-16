<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        nav a { margin-right: 15px; }
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 10px; }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('students.index') }}">Students</a>
    <a href="{{ route('students.create') }}">Add Student</a>
</nav>

<hr>

<div>
    @yield('content')
</div>

</body>
</html>
