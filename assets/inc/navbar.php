<!-- header with navbar start -->
<header>
    <nav class="navbar-large">
        <img src="assets/images/taipei-icon.png" alt="taipei 101 icon">
        
        <ul class="menu">
            <li><a href="<?php echo $path?>index.php">Home</a></li>
            <li><a href="<?php echo $path?>about.php">About Taipei</a></li>
            <li>
                <a href="<?php echo $path?>food.php">Food</a>
                <ul class="submenu">
                    <li><a href="<?php echo $path?>food-trad.php">Traditional</a></li>
                    <li><a href="<?php echo $path?>food-night-market.php">Night Market</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $path?>activities.php">Activities</a>
                <ul class="submenu">
                    <li><a href="<?php echo $path?>act-trad.php">Traditional</a></li>
                    <li><a href="<?php echo $path?>act-natural.php">Natural</a></li>
                    <li><a href="<?php echo $path?>act-fest-events.php">Festivals & Events</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $path?>itineraries.php">Itineraries</a>
                <ul class="submenu">
                    <li><a href="<?php echo $path?>iti-one.php">One Day Trip</a></li>
                    <li><a href="<?php echo $path?>iti.musuem.php">Musuem</a></li>
                    <li><a href="<?php echo $path?>iti-old-street.php">Old Street</a></li>
                    <li><a href="<?php echo $path?>iti-kids.php">For Kids</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $path?>transportations.php">Transportations</a></li>
        </ul>
    </nav>

    <nav class="navbar-small">
        <img src="<?php echo $path?>assets/images/taipei-icon.png" alt="taipei 101 icon">

        <label for="switch"><span class="material-symbols-outlined">menu</span></label>
        <input type="checkbox" id="switch">

        <ul class="menu">
            <li><a href="<?php echo $path?>index.php">Home</a></li>
            <li><a href="<?php echo $path?>about.php">About Taipei</a></li>
            <li>
                Food
                <ul class="submenu">
                    <li><a href="<?php echo $path?>food.php">All</a></li>
                    <li><a href="<?php echo $path?>food-trad.php">Traditional</a></li>
                    <li><a href="<?php echo $path?>food-night-market.php">Night Market</a></li>
                </ul>
            </li>
            <li>
                Activities
                <ul class="submenu">
                    <li><a href="<?php echo $path?>activities.php">All</a></li>
                    <li><a href="<?php echo $path?>act-trad.php">Traditional</a></li>
                    <li><a href="<?php echo $path?>act-natural.php">Natural</a></li>
                    <li><a href="<?php echo $path?>act-fest-events.php">Festival & Events</a></li>
                </ul>
            </li>
            <li>
                Itineraries
                <ul class="submenu">
                    <li><a href="<?php echo $path?>itineraries.php">All</a></li>
                    <li><a href="<?php echo $path?>iti-one.php">One Day Trip</a></li>
                    <li><a href="<?php echo $path?>iti-musuem.php">Musuem</a></li>
                    <li><a href="<?php echo $path?>iti-old-street.php">Old Street</a></li>
                    <li><a href="<?php echo $path?>iti-kids.php">For Kids</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $path?>transportations.php">Transportation</a></li>
        </ul>
    </nav>
</header>
<!-- header with navbar end -->