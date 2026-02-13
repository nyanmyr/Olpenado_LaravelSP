<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | Students</title>
</head>

<body>
    <h1>Add New Student</h1>

    <form action="/students/create" method="POST">
        @csrf
        <label for="Name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="Course">Course:</label><br>
        <input type="text" id="course" name="course" required><br>
        <label for="Year Level">Year Level:</label><br>
        <input type="text" id="year_level" name="year_level" required><br><br>
        <button>Create Student</button>
    </form>

</body>

</html>
