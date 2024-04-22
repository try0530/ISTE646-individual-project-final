<?php 
    $path = "";
    $page = "home";
    $pagealias = "Home";

    $motherpagealias = "";

    include($path . "assets/inc/head.php");
    include($path . "assets/inc/navbar.php");
?>

    <!-- home section start -->
    <section class="section home-section">
        <div>
            <h2>Welcom to Taipei!</h2>
            <small>Explore this city with us</small>
        </div>
    </section>
    <!-- home section end -->

    <!-- about taipei section start -->
    <section class="section about-section">
        <div class="visit-page">
            <div>
                <h3>About Taipei</h3>
                <p>
                    <span class="title-mark">Taipei</span> is the vibrant capital city of Taiwan where tradition meets modernity,
                    and every corner tells a story. Nestled amidst the scenic landscaes of the island, 
                    Taipei is a bustling metropolis pulsating with energy, culture, and endless opportunities for exploration.
                </p>
                <a href="about.html" class="learn-more">Learn More<span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>
            <img src="<?php echo $path?>assets/images/taipei-101.jpg" alt="Taipei 101">
        </div>
    </section>
    <!-- about taipei section end -->

    <!-- food section start -->
    <section class="section food-section">
        <div class="visit-page">
            <div>
                <h3>Food</h3>
                <p>
                    <span class="title-mark">Taipei</span> is a paradise for food lovers, where traditional recipes blend seamlessly with modern gastronomy.
                    From bustling night markets to elegant dining establishments, Taipei's food culture is an adventure waiting to be savored.
                    <br><br>
                    Whether you're a seasoned foodie or a curious traveler, Taipei promises an unforgettable culinary adventure.
                </p>
                <a href="food.html" class="learn-more">Learn More<span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>            
            <img src="<?php echo $path?>assets/images/taipei-food.jpg" alt="Taipei Food">
        </div>
    </section>
    <!-- food section end -->

    <!-- activities section start -->
    <section class="section activities-section">
        <div class="visit-page">
            <div>
                <h3>Activities</h3>
                <p>
                    <span class="title-mark">Taipei</span> offers a diverse array of activities to suit every taste and interest.
                    <br><br>
                    <b>You can</b>
                    <ul class="activities-list">
                        <li>Immerse Yourself in Culture and History</li>
                        <li>Embrace Nature's Beauty</li>
                        <li>Experience Traditional Activities</li>
                    </ul>
                </p>
                <a href="activities.html" class="learn-more">Learn More<span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>
            <img src="<?php echo $path?>assets/images/taipei-memorial-hall.jpg" alt="Taipei Memorial Hall">
        </div>
    </section>
    <!-- activities section end -->

    <!-- itineraries section start -->
    <section class="section itineraries-section">
        <div class="visit-page">
            <div>
                <h3>Itineraries</h3>
                <p>
                    <span class="title-mark">Taipei</span> is a city where ancient traditions meet modern innovation,
                    and vibrant city life blends seamlessly with serene natural landscapes.
                    <br><br>
                    Don't know where to visit or how to plan the tour in this city? Here are some recommend
                    itineraries that you can refer! Enjoy your trip in Taipei!
                </p>
                <a href="itineraries.html" class="learn-more">Learn More<span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>
            <img src="<?php echo $path?>assets/images/taipei-itinerary.jpg" alt="Taipei Itinerary">
        </div>
    </section>
    <!-- itineraries section end -->

    <!-- transportation start -->
    <section class="section transportation-section">
        <div class="visit-page">
            <div>
                <h3>Transportations</h3>
                <p>
                    <span class="title-mark">Taipei</span> has very convenient transportation networks seamlessly connect vibrant city neihborhoods, 
                    cultural landmarks, and natural attractions. 
                    <br><br>
                    It offers a variety of options to suit every traveler's needs. From the efficient 
                    subway system to the extensive bus network, pedal-powered, exploration, and convenient taxi services, get around Taipei has never 
                    been easier.
                </p>
                <a href="itineraries.html" class="learn-more">Learn More<span class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>
            <img src="<?php echo $path?>assets/images/taipei-transportation.jpg" alt="Taipei Transportation">
        </div>
    </section>
    <!-- trnsportation end-->

<?php
    include($path . "assets/inc/time-weather.php");
    include($path . "assets/inc/footer.php");
?>