<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | Students</title>
</head>

<body>

<h1>Edit Student</h1>

<form>
    Name:<br>
    <input type="text" value="Juan Dela Cruz"><br><br>

    Email:<br>
    <input type="email" value="juan@example.com"><br><br>

    Course:<br>
    <input type="text" value="BSIT"><br><br>

    Year Level:<br>
    <input type="text" value="2nd Year"><br><br>

    <button type="submit">Update</button>
    <a href="{{ route('students.index') }}">Cancel</a>
</form>

</body>

</html>
