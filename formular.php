<?php
$servername = "localhost";
$username = "lukas";
$password = "123";
$databaza = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$databaza);



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$meno = $_POST["meno"];
$heslo = $_POST["heslo"];



   
$sql = 'SELECT * FROM users WHERE user = "' . $meno . '" AND heslo = "' . $heslo . '"';

$result = $conn->query($sql);
$result= $result->fetch_assoc();
if($result != null){
    if($result["admin"] == 1){
      header('Location: admin.php');
    }else{
      header('Location: index.php');
    }
    

} else {
    header('Location: login.php');    
}
?>