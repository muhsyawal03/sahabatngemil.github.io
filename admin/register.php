<?php
require_once("../include/sessions.php");
require_once("../include/functions.php");
require_once("../include/db.php");

// Initialize variables for storing error or success messages
$message = '';
$registration_successful = false;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role'];

    // Validate input
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $message = "All fields must be filled out.";
    } elseif ($password !== $confirm_password) {
        $message = "Password and confirm password do not match.";
    } else {
        // Create new user
        if (create_user($username, $password, $role)) {
            $registration_successful = true;
        } else {
            $message = "Registration failed. The username may already exist.";
        }
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sahabat Ngemil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            width: 300px;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .register-container h2 {
            text-align: center;
            color: #8a2be2;
        }
        .register-container form {
            margin-top: 20px;
        }
        .register-container form label {
            display: block;
            margin-bottom: 8px;
        }
        .register-container form input[type="text"],
        .register-container form input[type="password"],
        .register-container form select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        .register-container form button {
            width: 100%;
            padding: 10px;
            background-color: #8a2be2;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .register-container form button:hover {
            background-color: #ff69b4;
        }
        .register-container .message {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }
        .register-container .login-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
    <script>
        function showSuccessPopup() {
            alert("Registration successful. Please login.");
        }
    </script>
</head>
<body>
    <div class="register-container">
        <h2>Register to Sahabat Ngemil</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <?php if (!empty($message)) { ?>
                <div class="message"><?php echo $message; ?></div>
            <?php } ?>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
    <?php if ($registration_successful) { ?>
        <script>
            showSuccessPopup();
            window.location.href = 'login.php';
        </script>
    <?php } ?>
</body>
</html>
