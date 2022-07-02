<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="icon" href="favicon1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>
  <?php echo $alert; ?>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> ORGANIC FARMING</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="products.php">PRODUCTS</a></li>
                    <li><a href="signup.php">SIGNUP</a></li>
                </ul>
            </div>

            

        </div>

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>43 VishnuLok,Tapovan Road,Dehradun</div>
        <div><i class="fas fa-envelope"></i>sparshtripathi.3@gmail.com</div>
        <div><i class="fas fa-phone"></i>+91 9045593735</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
  </body>
</html>


  