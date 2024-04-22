<?php 
    $path = "";
    $page = "activities";
    $pagealias = "Activities";

    $motherpagealias = "";

    include($path . "assets/inc/head.php");
    include($path . "assets/inc/navbar.php");
    include($path . "assets/inc/breadcrumb.php");
?>

    <!-- Traditional Activities Start -->
    <section class="section">
        <div>
            <h3>Traditional Activities</h3>
            <div class="cards">
                <div class="card">
                    <h4>Tea Culture</h4>
                    <img src="assets/images/taipei-tea-culture.jpg" alt="Tea Culture">
                    <p>
                        Nestled amidst the verdant hillsides of northern Taiwan, Pinglin is renowned for its picturesque tea plantations 
                        and rich tradition of tea cultivation. Experience the art of tea-making firsthand with a visit to this charming mountain 
                        town, where you can immerse yourself in the serene beauty of the countryside and learn about the time-honored practices 
                        that have shaped Taiwan's tea culture.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>Ri Xing Type Foundry</h4>
                    <img src="assets/images/taipei-type-foundry.jpg" alt="Ri Xing Type Foundry">
                    <p>
                        Ri Xing Type Foundry is a hidden gem that preserves the ancient craft of Chinese typography in the modern age. 
                        Step back in time as you enter this iconic establishment, where time-honored techniques, intricate craftmanship, 
                        and rich cultural heritage come together to create a truly unique and immersive experience.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>Temple Visits</h4>
                    <img src="assets/images/taipei-temple.jpg" alt="Taipei Temple">
                    <p>
                        Pay homage to Taipei's spiritual heritage by visiting one of the city's many temples, which serve as centers of worship, 
                        community gathering, and cultural expression. Marvel at the intricate architecture and ornate decorations of temples such 
                        as Longshan Temple and Bao'an Temple, and witness the rituals and ceremonies that continue to be practiced today.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <a class="more-article" href="act-trad.html">Read More Article</a>
        </div>
    </section>
    <!-- Traditional Activities End -->

    <!-- Natural Activities Start -->
    <section class="section">
        <div>
            <h3>Natural</h3>
            <div class="cards">
                <div class="card">
                    <h4>5 Hiking Destinations in Taipei</h4>
                    <img src="assets/images/taipei-elephant-mountain.jpg" alt="Hiking Destinations">
                    <p>
                        Taipei offers a plethora of hiking trails that cater to outdoor enthusiasts of all skill levels. 
                        From scenic viewpoints to tranquil forests, these five hiking destinations promise breathtaking 
                        vistas and unforgettable adventures for nature lovers.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>Beitou Thermal Valley</h4>
                    <img src="assets/images/taipei-thermal-valley.jpg" alt="Beitou Thermal Valley">
                    <p>
                        Beitou Thermal Valley, also known as Hell Valley, is a captivating natural wonder located in the heart 
                        of Beitou District in Taipei. Renowned for its steaming hot springs, bubbling mud pots, and otherworldly 
                        landscapes, Beitou Thermal Valley offers visitors a unique opportunity to witness the power and beauty of 
                        geothermal activity up close.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>YehLiu Geopark</h4>
                    <img src="assets/images/taipei-yehliu-geopark.jpg" alt="YehLiu Geopark">
                    <p>
                        Yehliu Geopark, located along Taiwan's picturesque northern coast, is a geological marvel that captivates 
                        visitors with its unique rock formations and stunning coastal landscapes. With its distinctive rock sculptures, 
                        wind-sculpted cliffs, and panoramic ocean views, Yehliu Goepark offers a one-of-a-kind natural experience that's 
                        perfect for adventurers and nature enthusiasts alike.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <a class="more-article" href="act-natural.html">Read More Article</a>
        </div>
    </section>
    <!-- Natural Activities End -->

    <!-- Festivals & Events Start -->
    <section class="section">
        <div>
            <h3>Festivals & Events</h3>
            <div class="cards">
                <div class="card">
                    <h4>Taipei Lantern Festival</h4>
                    <img src="assets/images/taipei-lantern-festival.jpg" alt="Lantern Festival">
                    <p>
                        The Taipei Lantern Festival is a dazzling celebration of light, culture, and tradition that illuminates 
                        the city with its vibrant colors and enchanting displays. Held annually in conjunction with the Lunar New Year, 
                        this beloved festival brings together locals and visitors alike to marvel at its spectacular lantern installations,
                        cultural performances, and festive atmospher.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>International Dragon Boat Race</h4>
                    <img src="assets/images/taipei-dragon-boat-festival.jpg" alt="Dragon Boat Race">
                    <p>
                        Experience the excitement and adrenaline of the Taipei International Dragon Boat Race, one of the largest dragon boat 
                        festivals in Asia. Watch as teams from around the world compete in thrilling races along the scenic Keelun River, showcasing 
                        skill, teamwork, and tradition in this ancient sport.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>Pingxi Sky Lantern Festival</h4>
                    <img src="assets/images/taipei-pingxi-sky-lantern-festival.jpg" alt="Pingxi Sky Lantern">
                    <p>
                        The Pingxi Sky Lantern Festival is a breathtaking annual event that illuminates the night sky with thousands of colorful lanterns, 
                        creating a spectacle that captivates visitors from around the world.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <a class="more-article" href="act-fest-events.html">Read More Article</a>
        </div>
    </section>
    <!-- Festivals & Events End -->

<?php
    include($path . "assets/inc/time-weather.php");
    include($path . "assets/inc/footer.php");
?>