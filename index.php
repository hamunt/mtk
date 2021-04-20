<!DOCTYPE html>
<html lang="en">
    <?php require_once "header.php" ?>

<body style="background: #b7b7b7;">
    <section id="home">
        <!--Navigation bar-->
        <?php require_once "navigation.php" ?>
        <!-- Paradise Slider -->
        <div id="fw_al_007" class="carousel ps_rotate_scale_c ps_indicators_l ps_control_rotate_f swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#fw_al_007" data-slide-to="0" class="active"></li>
                <li data-target="#fw_al_007" data-slide-to="1"></li>
                <li data-target="#fw_al_007" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
                <div class="carousel-item active">

                    <!-- Slide Background -->
                    <img src="assets/img/mombasa.jpg" alt="fw_al_007_01">

                    <!-- Slide Text Layer -->
                    <div class="fw_al_007_slide">
                        <h3 data-animation="animated flipInX">Hello Coast</h3>
                        <h1 data-animation="animated flipInX"><span>Diani,</span> Mombasa</h1>
                        <p data-animation="animated flipInX">From 10th to 15th April,2021</p>
                        <a href="#" data-animation="animated flipInX">Book Now!</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="carousel-item">

                    <!-- Slide Background -->
                    <img src="assets/img/Lake-Nakuru-National-Park.jpg" alt="fw_al_007_02">

                    <!-- Slide Text Layer -->
                    <div class="fw_al_007_slide">
                        <h3 data-animation="animated flipInX">Flamingos, here we come</h3>
                        <h1 data-animation="animated flipInX"><span>Nakuru Trip,</span> Nakuru National Park</h1>
                        <p data-animation="animated flipInX">27th to 30th July,2021</p>
                        <a href="#" data-animation="animated flipInX">Book Now!</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="carousel-item">

                    <!-- Slide Background -->
                    <img src="assets/img/nairobi%20national%20park.jpg" alt="fw_al_007_03">

                    <!-- Slide Text Layer -->
                    <div class="fw_al_007_slide">
                        <h3 data-animation="animated flipInX">A Park in the City</h3>
                        <h1 data-animation="animated flipInX"><span>Touring Nairobi,</span> Park & Ophanage </h1>
                        <p data-animation="animated flipInX">5th to 7th August,2021</p>
                        <a href="#" data-animation="animated flipInX">Book Now</a>
                    </div>
                </div>
                <!-- End of Slide -->

            </div>
            <!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="carousel-control-prev" href="#fw_al_007" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
            </a>
            <!-- Right Control -->
            <a class="carousel-control-next" href="#fw_al_007" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
            </a>





            <!-- End -->
    </section>
    <section id="youtube-section">
        <div class="container text-center"><video width="100%" height="auto" preload="auto" muted="" autoplay="" controls="" loop="">
                <source src="D:\Developer\mtk\What You Should Have In A Safari EP 2 ( 1080 X 1920 ).mp4" type="video/mp4">
            </video></div>
    </section>
    <section id="tours">
        <h1 class="text-center text-white-50">Upcoming Featured Destinations</h1>
        <div style="text-align: center">
            <h4>Filter By</h4>
            <input placeholder="Filter by Location">
            <input placeholder="Filter by Popularity">
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;">
                        <div class="bg-light border rounded shadow card" data-aos="slide-up" data-aos-duration="500"><img class="card-img-top" src="assets/img/bonfire.jpg">
                            <div class="card-body">
                                <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);">Maasai Maara</h3>
                                <h5 class="card-sub-title" style="font-family: Antic, sans-serif;color: #38ae53;">11th to 13th March, 2021</h5>
                                <p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                                <p id="lorem">Maasai Mara National Reserve is an area of preserved savannah wilderness in southwestern Kenya, along the Tanzanian border. Its animals include lions, cheetahs, elephants, zebras and hippos. Wildebeest traverse its plains
                                    during their annual migration. The landscape has grassy plains and rolling hills, and is crossed by the Mara and Talek rivers. The area nearby is dotted with villages (enkangs) of Maasai people.</p>
                                <h5 id="package-pricing" class="card-sub-title" style="font-family: Antic, sans-serif;color: orange;">Starting from...$50</h5><button class="btn btn-outline-success" type="button" style="font-weight: normal;font-family: Antic, sans-serif;">Learn More or Book&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                        <path d="M2 8C2 7.44772 2.44772 7 3 7H21C21.5523 7 22 7.44772 22 8C22 8.55228 21.5523 9 21 9H3C2.44772 9 2 8.55228 2 8Z" fill="currentColor"></path>
                                        <path d="M2 12C2 11.4477 2.44772 11 3 11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12Z" fill="currentColor"></path>
                                        <path d="M3 15C2.44772 15 2 15.4477 2 16C2 16.5523 2.44772 17 3 17H15C15.5523 17 16 16.5523 16 16C16 15.4477 15.5523 15 15 15H3Z" fill="currentColor"></path>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;margin-right: 0px;margin-bottom: 0px;">
                        <div class="bg-light border rounded shadow card" data-aos="slide-up" data-aos-duration="500" data-aos-delay="200"><img class="card-img-top" src="assets/img/mombasa%20beach.jpg">
                            <div class="card-body">
                                <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);">Diani, Mombasa</h3>
                                <h5 class="card-sub-title" style="font-family: Antic, sans-serif;color: #38ae53;">10th to 15th April, 2021</h5>
                                <p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                                <p id="lorem">Diani Beach is a major beach on the Indian Ocean coast of Kenya. It is located 30 kilometres south of Mombasa, in Kwale County. It has been voted Africa's leading beach destination for the fifth time running since 2015</p>
                                <h5 id="package-pricing" class="card-sub-title" style="font-family: Antic, sans-serif;color: orange;">Starting from...$50</h5><button class="btn btn-outline-success" type="button" style="font-weight: normal;font-family: Antic, sans-serif;">Learn More or Book&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                        <path d="M2 8C2 7.44772 2.44772 7 3 7H21C21.5523 7 22 7.44772 22 8C22 8.55228 21.5523 9 21 9H3C2.44772 9 2 8.55228 2 8Z" fill="currentColor"></path>
                                        <path d="M2 12C2 11.4477 2.44772 11 3 11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12Z" fill="currentColor"></path>
                                        <path d="M3 15C2.44772 15 2 15.4477 2 16C2 16.5523 2.44772 17 3 17H15C15.5523 17 16 16.5523 16 16C16 15.4477 15.5523 15 15 15H3Z" fill="currentColor"></path>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;">
                        <div class="bg-light border rounded shadow card" data-aos="slide-up" data-aos-duration="500" data-aos-delay="400"><img class="card-img-top" src="assets/img/mt%20kenya.jpg">
                            <div class="card-body">
                                <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);">Mt. Kenya Climbing</h3>
                                <h5 class="card-sub-title" style="font-family: Antic, sans-serif;color: #38ae53;">27th April to 1st May, 2021</h5>
                                <p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                                <p id="lorem">Mount Kenya is the highest mountain in Kenya and the second-highest in Africa, after Kilimanjaro. The highest peaks of the mountain are Batian, Nelion and Point Lenana.</p>
                                <h5 id="package-pricing" class="card-sub-title" style="font-family: Antic, sans-serif;color: orange;">Starting from...$50</h5><button class="btn btn-outline-success" type="button" style="font-weight: normal;font-family: Antic, sans-serif;">Learn More or Book&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                        <path d="M2 8C2 7.44772 2.44772 7 3 7H21C21.5523 7 22 7.44772 22 8C22 8.55228 21.5523 9 21 9H3C2.44772 9 2 8.55228 2 8Z" fill="currentColor"></path>
                                        <path d="M2 12C2 11.4477 2.44772 11 3 11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12Z" fill="currentColor"></path>
                                        <path d="M3 15C2.44772 15 2 15.4477 2 16C2 16.5523 2.44772 17 3 17H15C15.5523 17 16 16.5523 16 16C16 15.4477 15.5523 15 15 15H3Z" fill="currentColor"></path>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;">
                        <div class="bg-light border rounded shadow card" data-aos="fade-down" data-aos-duration="500" data-aos-delay="100"><img class="card-img-top" src="assets/img/mt%20kenya.jpg">
                            <div class="card-body">
                                <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);">Mt. Kenya Climbing</h3>
                                <h5 class="card-sub-title" style="font-family: Antic, sans-serif;color: #38ae53;">27th April to 1st May, 2021</h5>
                                <p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                                <p id="lorem">Mount Kenya is the highest mountain in Kenya and the second-highest in Africa, after Kilimanjaro. The highest peaks of the mountain are Batian, Nelion and Point Lenana.</p>
                                <h5 id="package-pricing" class="card-sub-title" style="font-family: Antic, sans-serif;color: orange;">Starting from...$50</h5><button class="btn btn-outline-success" type="button" style="font-weight: normal;font-family: Antic, sans-serif;">Learn More or Book&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                        <path d="M2 8C2 7.44772 2.44772 7 3 7H21C21.5523 7 22 7.44772 22 8C22 8.55228 21.5523 9 21 9H3C2.44772 9 2 8.55228 2 8Z" fill="currentColor"></path>
                                        <path d="M2 12C2 11.4477 2.44772 11 3 11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12Z" fill="currentColor"></path>
                                        <path d="M3 15C2.44772 15 2 15.4477 2 16C2 16.5523 2.44772 17 3 17H15C15.5523 17 16 16.5523 16 16C16 15.4477 15.5523 15 15 15H3Z" fill="currentColor"></path>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;">
                        <div class="bg-light border rounded shadow card" data-aos="fade-down" data-aos-duration="500" data-aos-delay="300"><img class="card-img-top" src="assets/img/bonfire.jpg">
                            <div class="card-body">
                                <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);">Maasai Maara</h3>
                                <h5 class="card-sub-title" style="font-family: Antic, sans-serif;color: #38ae53;">11th to 13th March, 2021</h5>
                                <p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                                <p id="lorem">Maasai Mara National Reserve is an area of preserved savannah wilderness in southwestern Kenya, along the Tanzanian border. Its animals include lions, cheetahs, elephants, zebras and hippos. Wildebeest traverse its plains
                                    during their annual migration. The landscape has grassy plains and rolling hills, and is crossed by the Mara and Talek rivers. The area nearby is dotted with villages (enkangs) of Maasai people.</p>
                                <h5 id="package-pricing" class="card-sub-title" style="font-family: Antic, sans-serif;color: orange;">Starting from...$50</h5><button class="btn btn-outline-success" type="button" style="font-weight: normal;font-family: Antic, sans-serif;">Learn More or Book&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                        <path d="M2 8C2 7.44772 2.44772 7 3 7H21C21.5523 7 22 7.44772 22 8C22 8.55228 21.5523 9 21 9H3C2.44772 9 2 8.55228 2 8Z" fill="currentColor"></path>
                                        <path d="M2 12C2 11.4477 2.44772 11 3 11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12Z" fill="currentColor"></path>
                                        <path d="M3 15C2.44772 15 2 15.4477 2 16C2 16.5523 2.44772 17 3 17H15C15.5523 17 16 16.5523 16 16C16 15.4477 15.5523 15 15 15H3Z" fill="currentColor"></path>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;margin-right: 0px;margin-bottom: 0px;">
                        <div class="bg-light border rounded shadow card" data-aos="fade-down" data-aos-duration="500" data-aos-delay="500"><img class="card-img-top" src="assets/img/mombasa%20beach.jpg">
                            <div class="card-body">
                                <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);">Diani, Mombasa</h3>
                                <h5 class="card-sub-title" style="font-family: Antic, sans-serif;color: #38ae53;">10th to 15th April, 2021</h5>
                                <p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                                <p id="lorem">Diani Beach is a major beach on the Indian Ocean coast of Kenya. It is located 30 kilometres south of Mombasa, in Kwale County. It has been voted Africa's leading beach destination for the fifth time running since 2015</p>
                                <h5 id="package-pricing" class="card-sub-title" style="font-family: Antic, sans-serif;color: orange;">Starting from...$50</h5><button class="btn btn-outline-success" type="button" style="font-weight: normal;font-family: Antic, sans-serif;">Learn More or Book&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                        <path d="M2 8C2 7.44772 2.44772 7 3 7H21C21.5523 7 22 7.44772 22 8C22 8.55228 21.5523 9 21 9H3C2.44772 9 2 8.55228 2 8Z" fill="currentColor"></path>
                                        <path d="M2 12C2 11.4477 2.44772 11 3 11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12Z" fill="currentColor"></path>
                                        <path d="M3 15C2.44772 15 2 15.4477 2 16C2 16.5523 2.44772 17 3 17H15C15.5523 17 16 16.5523 16 16C16 15.4477 15.5523 15 15 15H3Z" fill="currentColor"></path>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <div class="features-boxed">
        <div class="container">
            <h1 class="display-4 text-center text-white-50" style="padding-top: 20px;">Why us?</h1>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-redo-alt icon"></i>
                        <h3 class="name"><br><strong>EFFICIENT AND FRIENDLY SERVICE</strong><br></h3>
                        <p class="description"><br>Our expert team takes pride in their thoughtful approach to planning your holiday. We find out what you think might make it extra special, then sprinkle in our own special little touches ( even a surprise to enjoy while you’re
                            away) to help create your dream holiday.<br></p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-recycle icon"></i>
                        <h3 class="name"><br><strong>FLEXIBLE AND HASSLE FREE PLANS</strong><br></h3>
                        <p class="description"><br>We’re here to take the stress out of the holiday planning process. You can be as involved as you want, and you are always in control. Everything is tailored to your exact needs and tastes, and we will keep tweaking and adapting
                            until it feels just right.<br></p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-handshake icon"></i>
                        <h3 class="name"><br><strong>PASSIONATE, HONEST EXPERTS</strong><br></h3>
                        <p class="description"><br>After a decade in business and a lifetime of living and travelling in our destinations, we have developed a deep knowledge and formed relationships with the most impressive experts in their fields. We pride ourselves on being
                            able to ask the right questions so that you can trust we get exactly what you’re after.<br><br></p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Testimonials </h2>
                <p class="text-center">Our customers love us! Read what they have to say below. We take pride in our seamless, flawless, and state-of-the-art service delivery.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/1.jpg">
                        <h5 class="name">Ben Johnson</h5>
                        <p class="title">CEO of Company Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/3.jpg">
                        <h5 class="name">Carl Kent</h5>
                        <p class="title">Founder of Style Co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                        <h5 class="name">Emily Clark</h5>
                        <p class="title">Owner of Creative Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Footer and scripts-->
    <?php require_once "footer.php" ?>

</body>

</html>