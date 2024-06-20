<?php
require_once("../include/sessions.php");
require_once("../include/functions.php");
require_once("../include/db.php");

// Check if the user is already logged in, if yes, redirect to the dashboard page
if (check_login()) {
    redirect_to("dashboard.php");
}

// Initialize variables to store error messages
$error = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input
    if (empty($username) || empty($password)) {
        $error = "Username and password must be filled out.";
    } else {
        // Validate the user credentials
        if (validate_user($username, $password)) {
            // Get user details
            $user = get_user_by_username($username);

            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Set the flash message for successful login
            $_SESSION['login_success'] = "Anda berhasil login!";

            // Redirect to the dashboard page after successful login
            redirect_to("dashboard.php");
        } else {
            $error = "Invalid username or password.";
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
    <title>Login - Sahabat Ngemil</title>
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

        .login-container {
            width: 300px;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            color: #8a2be2; /* Purple color */
        }

        .login-container form {
            margin-top: 20px;
        }

        .login-container form label {
            display: block;
            margin-bottom: 8px;
        }

        .login-container form input[type="text"],
        .login-container form input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .login-container form button {
            width: 100%;
            padding: 10px;
            background-color: #8a2be2; /* Purple color */
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container form button:hover {
            background-color: #ff69b4; /* Pink color */
        }

        .login-container .error {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }

        .login-container .register-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login to Sahabat Ngemil</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <?php if (!empty($error)) { ?>
                <div class="error"><?php echo $error; ?></div>
            <?php } ?>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
</body>
</html>
