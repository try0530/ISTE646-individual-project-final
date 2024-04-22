<?php 
    $path = "";
    $page = "food";
    $pagealias = "Food";

    $motherpagealias = "";

    include($path . "assets/inc/head.php");
    include($path . "assets/inc/navbar.php");
    include($path . "assets/inc/breadcrumb.php");
?>
    <!-- Traditional food start -->
    <section class="section">
        <div>
            <h3>Traditional Foods</h3>
            <div class="cards">
                <div class="card">
                    <h4>Xiao Long Bao<br>(Soup Dumplings)</h4>
                    <img src="assets/images/taipei-xiao-long-bao.jpg" alt="Soup Dumplings Picture">
                    <p>
                        Xiao Long Bao is a popular traditional food in Taiwan. It is a type of steamed 
                        bun traditionnally filled with pork, ginger, and a flavorful broth that bursts with every bite.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>Beef Noodle Soup</h4>
                    <img src="assets/images/taipei-beaf-noodle-soup.jpg" alt="Beaf Noodle Soup">
                    <p>
                        Beef Noodle Soup is a populr traditional food in Taiwan, which combines tender beef, chewy noodles, 
                        and richly flavored broth to create a truly unforgettable dining experience.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>Traditional Breakfast</h4>
                    <img src="assets/images/taipei-traditional-breakfast.jpg" alt="Traditional Breakfast">
                    <p>
                        Taiwan's traditional breakfast is a feast for the senses, featuring an array of savory and sweet dishes that 
                        awaken the palate From fragrant soy milk and crispy fried dough sticks to savory egg pancakes and steamed buns 
                        filled with pork or vegetables.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <a class="more-article" href="trad-food.html">Explore More Traditional Food</a>
        </div>
    </section>
    <!-- Tradisional food end -->

    <!-- Night market food start -->
    <section class="section">
        <div>
            <h3>Night Market</h3>
            <div class="cards">
                <div class="card">
                    <h4>Shilin Night Market</h4>
                    <img src="assets/images/taipei-shilin-night-market.jpg" alt="Shilin Night Market">
                    <p>
                        Shilin Night Market is one of Taipei's largest and most iconic night markets, a must-visit destination 
                        for food enthusiasts and cultural explorers alike.
                        <br><br>
                        At Shilin Night Market, food takes center stage, with countless stalls and vendors serving up a mouthwatering array of 
                        Taiwanese street food classics and international delicacies.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>Raohe Night Market</h4>
                    <img src="assets/images/taipei-raohe-night-market.jpg" alt="Raohe Night Market">
                    <p>
                        At Raohe Night Market, food takes center stage, with a diverse array of stalls and vendors offering a tantalizing section of 
                        Taiwanese street food classics and innovative culinary.
                        <br><br>
                        From sizzling barbecue skewers and aromatic grilled seafood to savory stinky tofu and mouthwatering desserts, there's something 
                        to tempt every palate and satisfy every craving.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>Ningxia Night Market</h4>
                    <img src="assets/images/taipei-ningxia-night-market.jpg" alt="Ningxia Night Market">
                    <p>
                        There are many traditional street food at Ningxia Night Market. More than just a food market, Ningxia Night Market is a cultural 
                        treasure trove that reflects the rich tapestry of Taiwanese life and traditions.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
            
            <a class="more-article" href="food-night-market.html">Explore More Night Market</a>
        </div>
    </section>
    <!-- Night market food end -->

    <!-- Every Food start -->
    <section class="section">
        <div>
            <h3>All Foods</h3>
            <div class="cards">
                <div class="card">
                    <h4>Xiao Long Bao<br>(Soup Dumpings)</h4>
                    <img src="assets/images/taipei-xiao-long-bao.jpg" alt="Soup Dumplings Picture">
                    <p>
                        Xiao Long Bao is a popular traditional food in Taiwan. It is a type of steamed 
                        bun traditionnally filled with pork, ginger, and a flavorful broth that bursts with every bite.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>15 Restaurants for Dinner</h4>
                    <img src="assets/images/taipei-dinner.jpg" alt="Taipei Dinner">
                    <p>
                        Immerse yourself in Taipei's vibrant culinary scene with our curated selection of 15 restaurants, 
                        each offering a unique dining experience that celebrates the rich flavors and cultural diversity of the city.
                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="card">
                    <h4>10 Desserts Must Eat in Taipei</h4>
                    <img src="assets/images/taipei-dessert.jpg" alt="Taipei Dissert">
                    <p> 
                        There are many desserts in Taipei that waiting to be desicovered. Join us as we explore 10 must-try 
                        desserts that will tantalize your taste buds and leave you craving for more.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <a class="more-article" href="#">Read More Article</a>
        </div>
    </section>
    <!-- Every Food end -->
    
<?php
    include($path . "assets/inc/time-weather.php");
    include($path . "assets/inc/footer.php")
?>