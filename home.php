<?php include('../components/navbar.php') ?>

<!-- Banner -->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade  " data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/Banner/banner-1.jpg" class="d-block w-100" alt="Banner-3">
        </div>
        <div class="carousel-item">
            <img src="img/Banner/banner-2.jpg" class="d-block w-100" alt="Banner-2">
        </div>
        <div class="carousel-item">
            <img src="img/Banner/banner-3.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="img/Banner/banner-4.jpg" class="d-block w-100" alt="">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Category -->
<div class="container-fluid">
    <div class="row justify-content-center mt-3">
        <div class="col-3">
            <div class="card border-light">
                <div class="card-image categoryImage mx-auto">
                    <a href="#"><img src="img/Category/Man2.gif" height="100px" alt=""></a>
                </div>
                <div class="card-title text-center"><strong>Man</strong></div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-light">
                <div class="card-image mx-auto">
                    <a href="#"><img src="img/Category/Women.gif" height="100px" alt=""></a>
                </div>
                <div class="card-title text-center"><strong>Women</strong></div>
            </div>
        </div>
        <div class="col-3">
            <div class="card border-light">
                <div class="card-image mx-auto">
                    <a href="#"><img src="img/Category/Children.gif" height="100px" alt=""></a>
                </div>
                <div class="card-title text-center"><strong>Kids</strong></div>
            </div>
        </div>
    </div>
</div>

<!-- Featured Products -->
<div class="conatiner">
    <h2>Featured Product</h2>
    <div class="row justify-content-evenly">
        <div class="col-md-2 mb-4">
            <div class="card ">
                <img class="card-img p-img img-fluid" src="img/Product/Man/Casual/P2/p2-1.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Brow Shoe</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <del style="color:red ;">2850/-</del>

                    <p class="Card-text"><strong>1270/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card mb-4">
                <img class="card-img p-img img-fluid " src="img/sandals.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Sandal</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <del style="color:red ;">350/-</del>

                    <p class="Card-text"><strong>270/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card mb-4">
                <img class="card-img p-img img-fluid " src="img/Product/kids/N/Batman SEVEN/p1.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Sandal</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <del style="color:red ;">1550/-</del>
                    <p class="Card-text"><strong>1270/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card mb-4">
                <img class="card-img p-img img-fluid " src="img/Product/Women/Heel/P3/p3-1.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Marie Claire</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>

                    </div>
                    <del style="color:red ;">1750/-</del>
                    <p class="Card-text"><strong>1120/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-evenly">
        <div class="col-md-2 mb-4">
            <div class="card ">
                <img class="card-img p-img img-fluid" src="img/Product/Man/Casual/P1/p1-1.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Urban Sneakers</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <del style="color:red ;">2250/-</del>
                    <p class="Card-text"><strong>1570/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card mb-4">
                <img class="card-img p-img img-fluid " src="img/Product/kids/N/Belt Sandal/p2.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Belt Sandal</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <del style="color:red ;">950/-</del>
                    <p class="Card-text"><strong>730/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card mb-4">
                <img class="card-img p-img img-fluid" src="img/Product/Women/Heel/P4/p4-1.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Red Label</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <del style="color:red ;">2170/-</del>
                    <p class="Card-text"><strong>1950/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card mb-4">
                <img class="card-img p-img img-fluid" src="img/Product/Women/Heel/P5/p5-1.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Comma Heel</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <del style="color:red ;">2740/-</del>
                    <p class="Card-text"><strong>2170/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
          <div class="col d-flex justify-content-end">
            <a class="btn btn-outline-success rounded-pill me-5" href="#" role="button">See More</a>
          </div>
        </div> -->

</div>

<!-- Best Seller -->
<div class="conatiner">
    <h2>Best Selling Product</h2>
    <div class="row justify-content-evenly ">
        <div class="col-md-2 mb-4">
            <div class="card ">
                <img class="card-img p-img img-fluid" src="img/Product/Man/Casual/P3/p3-1.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Brow Shoe</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <del style="color:red ;">2850/-</del>
                    <p class="Card-text"><strong>1270/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>


        <div class="col-md-2">
            <div class="card mb-4">
                <img class="card-img p-img img-fluid " src="img/Product/kids/N/LARRY Belt Sandal/p2.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Larry Belt Sandal</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <del style="color:red ;">1450/-</del>
                    <p class="Card-text"><strong>1170/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card mb-4">
                <img class="card-img p-img img-fluid " src="img/Product/kids/N/Belt Sandal/p2.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Belt Sandal</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <del style="color:red ;">950/-</del>
                    <p class="Card-text"><strong>730/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>


        <div class="col-md-2">
            <div class="card mb-4">
                <img class="card-img p-img img-fluid" src="img/Product/Women/Heel/P2/p2-1.jpg" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title ">Red Heel</h5>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <del style="color:red ;">3740/-</del>
                    <p class="Card-text"><strong>2270/-</strong></p>
                    <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
          <div class="col d-flex justify-content-end">
            <a class="btn btn-outline-success rounded-pill me-5" href="#" role="button">See More</a>
          </div>
        </div> -->

</div>




<!-- Offer Section -->
<section id="Offer" class="my-5 py-5">
    <div class="container">
        <h4>MID SEASON'S SALE</h4>
        <h1>UP TO 30% OFF</h1>
        <a class="text-Uppercase btn btn-outline-success rounded-pill">Shop Now</a>
    </div>
</section>


<!-- About Us -->
<div class="container" id="about-us">
    <h2>About Us</h2>
    <div class="row justify-content-between">
        <div class="col-4">
            <img src="img/Aboutus.png" style="width:100%" alt="about us">
        </div>
        <div class="col-md-7">
            <h3 class="text-center">ময়ুরাক্ষী</h3>
            <p class="m-3">হিমুর নিজস্ব একটা নদী ছিল যার নাম ময়ুরাক্ষী,রুপাকে একদিন তার এই নদীর কথা বলায় ভীষন
                হেসেছিল।রুপার
                ভাষ্যমতে ময়ুরাক্ষী নামে এলিফেন্ট রোডে একটা
                জুতার দোকান আছে। <br>
                কালের বিবর্তনে সবই হারিয়ে গেছে,যা ফিরে এসেছে তা নতুন রুপ নিয়ে, এলিফেন্ট রোডের সেই জুতার দোকান আছে কিনা
                আমাদের
                জানা নেই।
                তবে আমাদের এখানে আপনি পাবেন আধুনিক, সেকেলে সবধরনের মানুষের জন্য সবরকমের পাদুকা-যুগল।
            </p>

        </div>
    </div>
</div>

<!-- Footer -->
<div class="container-fluid">
    <!-- Footer -->
    <footer class="foter  text-center text-dark">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i
                        class="fab fa-facebook-f"></i></a>
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i
                        class="fab fa-twitter"></i></a>
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i
                        class="fab fa-instagram"></i></a>
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i
                        class="fab fa-linkedin-in"></i></a>
            </section>


            <!-- Section: Form -->
            <section class="">
                <form action="">

                    <div class="row d-flex justify-content-center">
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example21" class="form-control" />
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </section>
            <section class="">
                <div class="container text-center text-md-start mt-5">

                    <div class="row mt-3">

                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <img src="img/log.png" alt="Logo">
                            <p class="text-center">Buy Now or Cry Later</p>
                        </div>



                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                            <p>
                                <a href="#" class="text-reset">Casual</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Formal</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Sandal</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Sports</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="../termscondition.html" class="text-reset">Terms and Condition</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p><i class="fas fa-home me-3"></i>Azampur,Uttara,Dhaka-1230</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>learners@moyurakkhi.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01706290433</p>

                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>

            <!-- Section: Links -->

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Devloped by:
            <a class="text-white" href="#">Learners</a>
        </div>

    </footer>
</div>







<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>



</body>

</html>