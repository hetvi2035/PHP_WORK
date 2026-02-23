
<?php
session_start();

if (isset($_GET['logout'])) {
    session_unset();     // remove all session variables
    session_destroy();   // destroy session
    header("Location: login.php"); // reload page
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
 
    $_SESSION['user'] = $username;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Login Logout</title>
</head>
<body>

<?php

if (isset($_SESSION['user'])) {
    
    echo "<h2>Welcome " . $_SESSION['user'] . "</h2>";
    echo '<a href="?logout=true">Logout</a>';
    

} else {
?>

    <h2>Login</h2>
    <form method="post">
        Username: <input type="text" name="username" required>
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>

<?php
}
?>

</body>
</html>
