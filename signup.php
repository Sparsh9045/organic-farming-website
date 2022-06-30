<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'same/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="favicon1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>signup</title>
</head>

<body>
<div class="main" style="background:url(5.jpg);">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> ORGANIC FARMING</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="products.php">PRODUCTS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

            

        </div>

<?php
if($showAlert){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Account Created
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
?>


<div class="form" style="margin-top: 180px;">
<form action="signup.php" method="post">

<h2>Signup Here</h2>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
      
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
    
      <input type="password" class="form-control" id="cpassword" placeholder="confirm password" name="cpassword" required>
     <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>
</html>
