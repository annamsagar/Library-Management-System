<?php

include 'inc/connection.php';
if (isset($_GET["email"])) {
    $id = $_GET["email"];
    mysqli_query($link, "delete from t_registration where email=$id");

    
    ?>
    <script type="text/javascript">
        window.location="remove-teacher.php";
    </script>
    
    <?php
}



?>
