<?php
require "head1.php";
?>
<main>
    <?php if (isset($_SESSION['userId'])) {
        echo '<p class="login-status"> You are logged in!</p>';
    }
    else {
        echo '<p class'
    }
    <p> You are logged out!</p>
    <p> You are logged in!</P>
</main>
<?php
require "footer.php";
?>