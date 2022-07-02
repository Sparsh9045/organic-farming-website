<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="favicon1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style7.css">
    <title>Organic Farming</title>
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
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>



        </div>

        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="7.jpg" class="d-block w-100" alt="..." width="700" height="700">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><span>5 Effective Strategies to Promote Your Organic Farming Brand :</span><br></h1>
                        <h8> <span>1.Build a Strong Online Presence.<br>
                                2.Collaborate With a Grocery Store or Chain.<br>
                                3.Get Support from an Influencer.<br>
                                4.Partner Up With a Local Restaurant.<br>
                                5.Engage with the Community.</p><br></span></h8>
                        <a href="products.php" class="btn pixel-btn mt-50">View Products</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="8.jpg" class="d-block w-100" alt="..." width="700" height="700">

                    <div class="carousel-caption d-none d-md-block">
                        <h2>Types of Organic Farming<br></h2>
                        Organic farming is divided into two types:<br>
                        1.Integrated organic farming: Integrated organic farming includes the integration of pest
                        management and nutrients management
                        to achieve ecological requirements and demands.<br>
                        2.Pure organic farming: Pure organic farming means avoiding all unnatural chemicals. In this
                        process of farming, all the
                        fertilisers and pesticides are obtained from natural sources such as bone meal or blood meal.
                        <br>

                        <a href="products.php" class="btn pixel-btn mt-50">View Products</a>
                    </div>
                </div>


                <div class="carousel-item" data-bs-interval="3000">
                    <img src="9.JPG" class="d-block w-100" alt="..." width="700" height="700">
                    <div class="carousel-caption d-none d-md-block">
                        <h2> Tips to Start an Organic Farm in Uttarakhand</h2>
                        <p> 1. Extensive money is needed before you can start your own farm.<br>
                            2.This is to ensure that once your farm is up & running, you can gather knowledge about
                            potential pitfalls & systemic problems.<br>
                            3.You can also understand the resources needed & their expected cost in your area.<br>
                            4.You can visit other organic farming facilities, speak with entrepreneurs who have valuable
                            experience in this area.<br>
                            5.By learning from their experiences, you can make better decisions as to the priority of
                            the investments you will be making.</p><br>
                        <a href="products.php" class="btn pixel-btn mt-50">View Products</a>

                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="10.JPG" class="d-block w-100" alt="..." width="700" height="700">
                    <div class="carousel-caption d-none d-md-block">
                        <h2> Benefits of organic farming</h2>

                        1.Environment-friendly.<br>
                        2.Promotes sustainable development.<br>
                        3.Healthy and tasty food.<br>
                        4.Inexpensive process.<br>
                        5.It uses organic inputs.<br>
                        6.Generates income.<br>
                        7.Generates income through exports.<br>
                        8.Source of employment.<br>
                        9.Organic farming is more labour intensive. Hence, it generates more employment.

                        <a href="products.php" class="btn pixel-btn mt-50">View Products</a>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </section>
            <section style="background-color: lightgreen;">
                <h1 style = "margin-left: 25%;"> How to support organic farming? </h1>
                <h3> START AT HOME</h3>
                <h5> 1.The single best thing you can do to support organic is to purchase organic.<br>
                    2.Get to know the growers at your local farmers market.<br>
                    3.In the grocery store, look for the USDA Certified Organic Seal—its your best bet for ensuring the
                    product was grown and produced without harmful chemicals.<br>
                    4.When purchasing meat and dairy, look for pasture-raised and grass-fed varieties.<br>
                    5.In the kitchen, learn to compost. Instead of tossing scraps in the garbage where theyll contribute
                    to a landfill, turn them into a valuable soil amendment you can use in your own garden or share with
                    a neighbor.<br>
                    6.If you have a container or backyard garden, plant flowers that will attract native wildlife and
                    pollinators to your area… or go the extra mile and protect your pollinators by beekeeping in your
                    backyard. And skip the chemical weed killers and lawn fertilizers!<br>
                    7.Research your local farms and volunteer. Labor is a significant cost to organic farmers, and every
                    little bit helps. To find farms near you, check out our organic farm search tool.<br>
                    8.Teach your kids about making healthy food choices and about the value of protecting the
                    environment. Invite them to help you prepare meals. Download our school gardening curriculum.</h5>
                <br>

                <h3> ON THE FARM</h3>
                <h5> 1.If you are a farmer, analyze your current growing practices and work to eliminate any harmful
                    substances and methods. Embrace a biological approach. Reduce off-farm inputs and recycle farm waste
                    as much as possible.<br>
                    2.Conventional farmers looking to transition to organic practices can contact our Organic Crop
                    Consultants or take our Transition to Organic online course. A number of grants and loan options are
                    available to help.<br>
                    3.If you arent already, consider getting certified. Cost-share programs can provide financial
                    assistance.<br>
                    4.Reduce the amount of tillage on your farm. You can learn more about organic no-till and the roller
                    crimper here.<br>
                    5.Support native wildlife. Designate areas of the farm not suitable for cultivation to wildlife
                    habitat. Build a bat house. Plant flowering crops for pollinators. Grants are available for
                    conservation costs.
                </h5><br>
            



            </section>


            <!-- ##### Top Catagory Area End ##### -->

            <!-- ##### Portfolio Area Start ###### -->
            <div class="pixel-portfolio-area section-padding-100-0" style="background-color: lightblue;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Section Heading -->
                            <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <div class="linee"></div>
                                <h2>KEEP CALM AND CHOOSE ORGANIC</h2>
                                <div class="linee"></div>

                                <table class="table table-borderless mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <h3 style="color:blue;">Organic Product List</h3>
                                            </th>

                                            <th scope="col">
                                                <h3 style="color:blue;">Price</h3>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Organic Vegetables</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Organic fruits</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Wheat</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Corn</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Chana</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Daal</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Masaala</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">मिर्ची (Chilli)</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">हल्दी (Turmeric)</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">धनिया (Coriander)</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">कच्ची घानी तेल (Cooking Oil)</th>

                                            <td>-</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pixel-portfolio-area section-padding-100-0" style="background-color: #FF8C00;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Section Heading -->
                            <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                <div class="linee"></div>

                                <table class="table table-borderless mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <h3 style="color:blue;">Poultry Product List</h3>
                                            </th>

                                            <th scope="col">
                                                <h3 style="color:blue;">Price</h3>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Kadaknath Breed Chickens</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kadaknath Eggs</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Desi breed Chickens</th>

                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">For Other Breed and Varieties Please Contact Us</th>

                                            <td>-</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                crossorigin="anonymous">
            </script>
</body>

</html>