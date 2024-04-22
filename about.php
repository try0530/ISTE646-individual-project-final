<?php 
    $path = "";
    $page = "about";
    $pagealias = "About";

    $motherpagealias = "";

    include($path . "assets/inc/head.php");
    include($path . "assets/inc/navbar.php");
    include($path . "assets/inc/breadcrumb.php");
?>
    <!-- about taipei page start -->
    <section class="section">
        <div>
            <h2>About Taipei</h2>
            <p>
                Welcome to learn more about Taipei. This page is going to intrduce you to the geography, weather, and other basics of Taipei.
            </p>
        </div>
    </section>
    <!-- about taipei page end -->

    <!-- about taipei geography start -->
    <section class="section geo-section">
        <div>
            <h3>Geography</h3>
            <p>
                Taipei City is situated in the northern part of Taiwan Island, and the northeastern tip of the Taipei Basin.
                It borders New Taipei City on all sides. 
            </p>
            <h4>Some number about Taipei</h4>
            <ul>
                <li>271.7997 Square kilometer</li>
                <li>12 administrative districts</li>
            </ul>
        </div>
        <img src="<?php echo $path?>assets/images/taipei-in-taiwan.png" alt="Taipei position in Taiwan">
    </section>
    <!-- about taipei geography end -->

    <!-- about taipei weather start -->
    <section class="section weather-section">
        <div>
            <h3>Weather</h3>
            <p>
                Taipei has a <b>subtropical monsoon climate</b>, with scorchingly hot summers and mild winters.
                The city enjoys plentiful rainful throughout the seasons, with typhoons in the summer and autumn.
                <br><br>
                During winter, the island experiences continental high pressure systems from Mongolia and Siberia, 
                and is influenced primarily by the northeastern monsoon climate.
                <br><br>
                In summer, the island's weather is controlled by the marine high-pressure system formed above the Pecific Ocean, 
                with a humid, southwestern monsoon climate.
            </p>
            <div>
                <h4>The Months for Each Season</h4>
                <ul>
                    <li>Spring: March - May</li>
                    <li>Summer: June - August</li>
                    <li>Fall: September - November</li>
                    <li>Winter: December - February</li>
                </ul>
            </div>
            
            <div>
                <h4>Avarage High Low Temperature Every Month in Taipei</h4>
                <img src="<?php echo $path?>assets/images/taipei-temperature.jpg" alt="Taipei Temperature">
            </div>
        </div>
    </section>
    <!-- about taipei weather end -->

<?php
    include($path . "assets/inc/time-weather.php");
    include($path . "assets/inc/footer.php");
?>