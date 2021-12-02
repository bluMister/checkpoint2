<?php

$servername = "localhost";
$username = "lukas";
$dbpassword = "123";
$databaza = "ucty";

// Create connection
$db = mysqli_connect($servername, $username, $dbpassword,$databaza);



// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

require_once "session.php";


$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // validate if email is empty
    if (empty($email)) {
        $error .= '<p class="error">Please enter email.</p>';
    }

    // validate if password is empty
    if (empty($password)) {
        $error .= '<p class="error">Please enter your password.</p>';
    }

    if (empty($error)) {
        $sql = 'SELECT * FROM users WHERE email = "' . $email . '" AND password = "' . $password . '"';

        $result = $db->query($sql);
        $result= $result->fetch_assoc();
        if($result != null){
                    $_SESSION["userid"] = $result['id'];
                    $_SESSION["user"] = $result;

                    // Redirect user
                    header("location: index.php");
            exit;
        } else {
                    $error .= '<p class="error">The password is not valid.</p>';
        }
        } else {
                $error .= '<p class="error">No User exist with that email address.</p>';
        }
        
        
    // Close connection
    mysqli_close($db);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Login</h2>
                    <p>Please fill in your email and password.</p>
                    <?php echo $error; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>    
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        </div>
                        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>