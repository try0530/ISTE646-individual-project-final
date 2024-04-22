<?php 
    $path = "";
    $page = "comments";
    $pagealias = "Comments";

    $motherpagealias = "";

    include($path . "assets/inc/head.php");
    include($path . "assets/inc/navbar.php");

    function sanitize($str, $length=200) {
        $str = trim($str);
        $str = htmlentities($str, ENT_QUOTES);
        return substr($str, 0, $length);
    }

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
        $name = santitize($_POST['name']);
        $email = santitize($_POST['email']);
        $comment = santitize($_POST['comment']);

        // $sql = "INSERT INTO `646project_comments` (`name`, `email`, `comment`) VALUES (?, ?, ?);";
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param("sss", $name, $email, $comment);
        // $stmt->execute();
        // $stmt->close();
    }    
?>
    <section class="section comments-section">
        <div class="visit-page comment-lists">
            <!-- <ul class="comment-ul">
                <?php
                    // $sql = "SELECT * FROM `646project_comments` DESC LIMIT 50";

                    // $results = $conn->query($sql);

                    // while($row = $results->fetch_assoc()) {
                    //     echo "<li>" . $row['name'] . "<br>" . $row['comment'] . "</li>";
                    // }
                ?>
            </ul> -->
        </div>
    </section>
    <section class="section form-section">
        <div class="visit-page">
            <form action="" name="comments" onsubmit="return validateFomr();" method="post">
                <p>Wants to leave some comment about this website? Leave some comments here!</p>
                <p>Name: <input type="text" name="name"> </p>
                <p>Email: <input type="email" name="email"></p>
                <p>
                    Leave some comment: <br>
                    <input type="text" name="comment">
                </p>
                
                <input type="submit" name="submit">
            </form>
        </div>
    </section>
<?php
    include($path . "assets/inc/time-weather.php");
    include($path . "assets/inc/footer.php");
?>