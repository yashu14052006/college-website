<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

nav ul li a:hover {
    text-decoration: underline;
}

main {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form div {
    margin-bottom: 15px;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

form input, form select, form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    background-color: #333;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form button:hover {
    background-color: #555;
}

footer {
    text-align: center;
    padding: 10px 0;
    background-color: #333;
    color: #fff;
    position: fixed;
    width: 100%;
    bottom: 0;
}


    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="admission.php">Admission</a></li>
                <li><a href="status.php">Check Result</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input type="number" id="phone" name="phone" required>
            </div>
            <div>
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div>
                <label for="course">Selected Course</label>
                <select id="course" name="course" required>
                    <option value="course1">Course 1</option>
                    <option value="course2">Course 2</option>
                    <option value="course3">Course 3</option>
                </select>
            </div>
            <div>
                <label for="comments">Comments</label>
                <textarea id="comments" name="comments" rows="4" cols="50"></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "admin";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: {$conn->connect_error}");
            }

            // Sanitize and validate inputs
            $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
            $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $dob = mysqli_real_escape_string($conn, $_POST['dob']);
            $course = mysqli_real_escape_string($conn, $_POST['course']);
            $comments = mysqli_real_escape_string($conn, $_POST['comments']);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format");
            }

            // Insert data into database
            $sql = "INSERT INTO students (fullname, email, phone, dob, course, comments) VALUES ('$fullname', '$email', '$phone', '$dob', '$course', '$comments')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: {$sql} <br> {$conn->error}";
            }

            $conn->close();
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2023 College Name. All rights reserved.</p>
    </footer>
</body>
</html>