<!-- login.php -->
<?php
session_start();

$users = [
    'admin' => 'password123',
    'user1' => 'mypassword',
    'user2' => 'secret'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEBDEV - LAB WORK 3</title>
    <style>
        /* Your existing styles here */
    </style>
</head>
<body>
    <div class="content">
        <h1 style="text-align:center;">ENHYPEN</h1>
    </div>
    <div class="container">
        <div class="image">
            <!-- Your existing content here -->
        </div>
        <div class="text">
            <h2 style="font-family: 'Verdana', serif">LOGIN</h2>
            <?php if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="post" action="login.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
