<?php
    require "header.php";
?>

        <main>
            <h1>Signup</h1>
            <?php
             if (isset($_GET['error'])) {
               if ($_GET['error'] == "emptyfields" ) {
                echo '<p class="signuperror">Fill in all fields!</p>';
               }
               else if ($_GET['error'] == "invaliduidmail" ) {
                 echo '<p class="signuperror">Invalid username and e-mail!</p>';
                }
               else if ($_GET['error'] == "invaliduid" ) {
                    echo '<p class="signuperror">Invalid username!</p>';
                }
                else if ($_GET['error'] == "invalidmail" ) {
                    echo '<p class="signuperror">Invalid e-mail!</p>';
                }
                else if ($_GET['error'] == "passwordcheck" ) {
                    echo '<p class="signuperror">Your password do not match!</p>';
                }
                else if ($_GET['error'] == "usertaken" ) {
                    echo '<p class="signuperror">User is already taken!</p>';
                }
             }
             
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </main>

<?php
    require "footer.php";
?>