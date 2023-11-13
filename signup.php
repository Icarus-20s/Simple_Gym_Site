<?php
// Database configuration
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'Info';

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $db);

// Check the connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Initialize error array
$errors = [];

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    // Validate form data
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($age)) {
        $errors[] = "Age is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long";
    }

    if ($password !== $cpassword) {
        $errors[] = "Passwords do not match";
    }

    // If there are no validation errors, insert data into the database
    if (empty($errors)) {
        // Hash the password before storing it in the database for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Perform the database insertion
        $sql = "INSERT INTO form (name, age, email, password) VALUES ('$name', '$age', '$email', '$hashedPassword')";

        if (mysqli_query($conn, $sql)) {
            echo "Signup successful";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style2.css" type="text/css">
</head>

<body>
    <div class="main">
        <div class="Signup">
            <h1>Signup Here</h1>
            <form action="" method="post">
                <p id="error_msg">
                    <?php
                    if (!empty($errors)) {
                        foreach ($errors as $error) {
                            echo '<span class="error-msg">' . $error . '</span>';
                        }
                    }
                    ?>
                </p>
                <label>Name : </label>
                <br>
                <input type="text" name="name" id="name" pattern="[A-Za-z\s]+" placeholder="Enter Your Full Name">
                <br><br>
                <label>Your Age : </label>
                <br>
                <input type="number" name="age" id="age" placeholder="Enter your age">
                <br><br>
                <label>Email : </label>
                <br>
                <input type="email" name="email" id="email" placeholder="Enter Your Valid Email">
                <br><br>
                <label>Password : </label>
                <br>
                <input type="password" name="password" placeholder="Your password">
                <br><br>
                <label>Confirm password : </label>
                <br>
                <input type="password" name="cpassword" placeholder="Confirm password">
                <br><br>
                <button type="submit" class="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
