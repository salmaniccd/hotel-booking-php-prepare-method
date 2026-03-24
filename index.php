<?php include_once 'inc/header.php'; ?>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TJ Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation shadow-none">
                <span class="navbar-toggler-icon  "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>

                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                </div>
            </div>
        </div>
    </nav>


    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fd-3 me-2"></i>User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mb-3">
            <form action="">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <span class="badge rounded-pill bg-light text-dark p-3 mb-3 text-wrap lh-base">
                        Note: Your details must match with your ID (Passport, Driving License, etc.) that will be required during check-in.
                    </span>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email </label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number </label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">picture </label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Address </label>
                                <textarea class="form-control" placeholder="Enter Your Address" id="floatingTextarea"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Pincode </label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date of Birth </label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Confirm Passwrod</label>
                                <input type="password" class="form-control shadow-none">
                            </div>

                        </div>
                    </div>
                    <div class="text-center my-3">
                        <button type="submit" class="btn btn-dark shadow-none">Register</button>
                    </div>

                    <!--  <div class="modal-body">
                        <div class="mb-3">
                            <label  class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" >
                        </div>

                          <div class="mb-4">
                            <label  class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" >
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div> -->
                </div>
            </form>
        </div>
    </div>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4  mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block" />
                </div>

                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block" />
                </div>

            </div>
        </div>
    </div>

    <!-- Check Avalibilty Form -->
    <div class="container avalibility-form">
        <div class="row ">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Avaliblity</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500l">Check-in </label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500l">Check-out </label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500l">Adult </label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500l">Children </label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5 pt-5 mb-5 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-5">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5>Simpe Room Name</h5>
                        <h6>Rs: 200 Per Night</h6>
                        <div class="feature mb-4">
                            <h6 class="mb-1">Features </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Room Heater
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Raitings </h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill  text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-5">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5>Simpe Room Name</h5>
                        <h6>Rs: 200 Per Night</h6>
                        <div class="feature mb-4">
                            <h6 class="mb-1">Features </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Room Heater
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Raitings </h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill  text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-5">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5>Simpe Room Name</h5>
                        <h6>Rs: 200 Per Night</h6>
                        <div class="feature mb-4">
                            <h6 class="mb-1">Features </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Room Heater
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Raitings </h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill  text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mb-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- OUR FACILITIES -->
    <h2 class="mt-5 pt-5 mb-5 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-3">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-5">
                <img src="images/facilities/wifi.svg" width="80px" />
                <h5>WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-5">
                <img src="images/facilities/wifi.svg" width="80px" />
                <h5>WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-5">
                <img src="images/facilities/wifi.svg" width="80px" />
                <h5>WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-5">
                <img src="images/facilities/wifi.svg" width="80px" />
                <h5>WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-5">
                <img src="images/facilities/wifi.svg" width="80px" />
                <h5>WiFi</h5>
            </div>

            <div class="col-lg-12 text-center mb-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-5 mb-5 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="porfile d-flex align-items-center mb-3">
                        <img src="images/facilities/wifi.svg" alt="WiFi" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sapiente temporibus porro quasi fuga, recusandae corrupti asperiores error, quisquam dolore enim voluptatum ullam ipsam reprehenderit. Aperiam eius officia amet animi.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="porfile d-flex align-items-center mb-3">
                        <img src="images/facilities/wifi.svg" alt="WiFi" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sapiente temporibus porro quasi fuga, recusandae corrupti asperiores error, quisquam dolore enim voluptatum ullam ipsam reprehenderit. Aperiam eius officia amet animi.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="porfile d-flex align-items-center mb-3">
                        <img src="images/facilities/wifi.svg" alt="WiFi" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sapiente temporibus porro quasi fuga, recusandae corrupti asperiores error, quisquam dolore enim voluptatum ullam ipsam reprehenderit. Aperiam eius officia amet animi.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="porfile d-flex align-items-center mb-3">
                        <img src="images/facilities/wifi.svg" alt="WiFi" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sapiente temporibus porro quasi fuga, recusandae corrupti asperiores error, quisquam dolore enim voluptatum ullam ipsam reprehenderit. Aperiam eius officia amet animi.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>




    <!-- Testimonials -->
    <h2 class="mt-5 pt-5 mb-5 text-center fw-bold h-font">Reach US</h2>

    <!-- Reach Us -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded ">
                <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.1517751603337!2d67.03817830000001!3d24.8244827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33d70bedf7e41%3A0xebff2f3b98e632d3!2sIslamic%20Chamber%20of%20Commerce%20%26%20Development%20(ICCD)!5e0!3m2!1sen!2s!4v1773132200519!5m2!1sen!2s" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded">
                    <h5>Call us</h5>
                    <a href="tel: +93123123123" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +93123123123
                    </a>
                    <br>
                    <a href="tel: +93123123123" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +93123123123
                    </a>
                </div>

                <div class="bg-white p-4 rounded">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter-x me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
            <?php include_once 'inc/footer.php'; ?>
    <!-- swipper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });


        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>