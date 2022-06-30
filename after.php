<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
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
    <title>Organic Farming</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

        <div class="container-fluid">

            <a class="navbar-brand">Organic Farming</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="myNav" class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link ">Contact</a>
                    </li>
                    <li class="nav-item" >
                        <a href="logout.php" class="nav-link ">logout</a>
                    </li>
                    
                </ul>
                
            </div>

        </div>

    </nav>


    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="1.jpg" class="d-block w-100" alt="..." width="700" height="700">
                <div class="carousel-caption d-none d-md-block">
                    <h1><span>What is ORGANIC FARMING?</span><br></h1>
                    <h8> <span>Organic farming is agriculture that makes healthy food, healthy soils, healthy plants,
                            and healthy environments a priority, along with crop productivity. Organic farmers use
                            biological fertilizer inputs and management practices such as cover cropping and crop
                            rotation to improve soil quality and build organic soil matter. By increasing the amount of
                            organic matter in the soil, organic farmers enhance the soil’s ability to absorb water,
                            reducing the impacts of drought and flooding. Improving soil organic matter also helps it to
                            absorb and store carbon and other nutrients need to grow healthy crops, which, in turn, are
                            better able to resist insects and diseases.
                            Organic production systems do not use genetically modified (GM) seed, synthetic pesticides
                            or fertilizers. Some of the essential characteristics of organic systems include design and
                            implementation of an organic system plan that describes the practices used in producing
                            crops and livestock products; a detailed recordkeeping system that tracks all products from
                            the field to point of sale; and maintenance of buffer zones to prevent inadvertent
                            contamination by synthetic farm chemicals from adjacent conventional fields.</span></h8>
                    <a href="products.html" class="btn pixel-btn mt-50">View Products</a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="2.jpg" class="d-block w-100" alt="..." width="700" height="700">

                <div class="carousel-caption d-none d-md-block">
                    <h2><span>Types of Organic Farming</span><br></h2>
                    <span>Organic farming is divided into two types:
                        <ul>
                            <li>Integrated organic farming</li>
                            <li>Pure organic farming</li>
                        </ul>
                        Pure organic farming means avoiding all unnatural chemicals. In this process of farming, all the
                        fertilisers and pesticides are obtained from natural sources such as bone meal or blood meal.
                        Integrated organic farming includes the integration of pest management and nutrients management
                        to achieve ecological requirements and demands.</span>
                    <a href="products.html" class="btn pixel-btn mt-50">View Products</a>
                </div>
            </div>


            <div class="carousel-item" data-bs-interval="4000">
                <img src="3.JPG" class="d-block w-100" alt="..." width="700" height="700">
                <div class="carousel-caption d-none d-md-block">
                    <h2> Benefits of organic farming</h2>
                    <ul>
                        <li></li>
                        <li>Environment-friendly.</li>
                        <li>Promotes sustainable development.</li>
                        <li>Healthy and tasty food.</li>
                        <li>Inexpensive process.</li>
                        <li>It uses organic inputs.</li>
                        <li>Generates income.</li>
                        <li>Generates income through exports.</li>
                        <li>Source of employment.</li>
                        <li>Organic farming is more labour intensive. Hence, it generates more employment.</li>
                    </ul>
                    <a href="products.html" class="btn pixel-btn mt-50">View Products</a>

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
    </div>












    <div class="top-catagory-area d-flex flex-wrap">
        <!-- Single Catagory -->
        <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax"
            style="background-image: url(1.jpg);">
            <!-- <a href="#">Organic Items </a> -->
            <!-- <div>
            	<h1 style="color:white;">Organic Items We Provide are =></h1>
            	<ul>
  					<h2><li>Coffee</li></h2>
  					<h2><li>Coffee</li></h2>
				</ul>
            </div> -->
        </div>
        <!-- Single Catagory -->
        <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax"
            style="background-image: url(images\DSC_0021.JPG);">
            <!-- <a href="#">What We Do? </a> -->
        </div>
    </div>
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



    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Get In Touch</h2>
                        <img src="" alt="">
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Contact Form -->
                    <div class="contact-form-area text-center">
                        <form action="mailto:sparshtripathi.3@gmail.com" method="post">
                            <input type="text" name="name" class="form-control wow fadeInUp" data-wow-delay="100ms" placeholder="Name">
                            <input type="email" name="email" class="form-control wow fadeInUp" data-wow-delay="300ms" placeholder="E-mail">
                            <input type="text" name="subject" class="form-control wow fadeInUp" data-wow-delay="500ms" placeholder="Subject">
                            <textarea name="message" class="form-control wow fadeInUp" data-wow-delay="700ms" placeholder="Message"></textarea>
                            <button type="submit" class="btn pixel-btn wow fadeInUp" data-wow-delay="900ms">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
 





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>