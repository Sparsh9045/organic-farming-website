<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'same/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: after.php");//redirect

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="favicon1.png">
    <title>Organic Farming</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="main">
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




        <div class="content">
            <h1>What is Organic Farming?</h1>
            <p class="par">Organic farming can be defined as an agricultural process that uses biological fertilisers and pest <br>control acquired
            from animal or plant waste. Organic farming was actually initiated as an answer to <br>the environmental sufferings caused by the use of chemical pesticides and synthetic fertilisers.<br>
             In other words, organic farming is a new system of farming or agriculture that repairs, maintains,<br> and improves the ecological balance.<br>
<br> 
            <button class="cn"><a href="signup.php">JOIN US</a></button>

            <div class="form">
                <form action="index.php" method="post">
                    <h2>Login Here</h2>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username"
                        required>
                    <input type="password" class="form-control" id="password" placeholder="Enter password"
                        name="password" required>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                <p class="link">Don't have an account<br>
                    <a href="signup.php">Sign up </a> here</a></p>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="Image">
        <img src="Why.png" class="why" />
    </div>
    <div class="Image">
        <img src="CaseStudy.png" class="casestudy" />
    </div>




    <?php
if($login){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are Logged In
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


    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="icons p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a href="https://www.facebook.com">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <!-- Google -->

                <a href="https://mail.google.com/mail/u/?authuser=sparshtripathi.3@gmail.com">
                    <ion-icon name="logo-google"></ion-icon>
                </a>
                <!-- Instagram -->

                <a href="https://www.instagram.com/sparsh__tripathi">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <!-- Linkedin -->
                <a href="https://www.linkedin.com/in/sparsh-tripathi-0a24681b2/">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <!-- Github -->
                <a href="https://github.com/Sparsh9045">
                    <ion-icon name="logo-github"></ion-icon>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white">Sparsh Tripathi</a>
        </div>
    </footer>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>