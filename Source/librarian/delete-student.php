
        <?php

    include 'inc/connection.php';
    if (isset($_GET["email"])) {
        $id = $_GET["email"];
        mysqli_query($link, "delete from std_registration where email=$id");

        
        ?>
        <script type="text/javascript">
            window.location="remove-student.php";
        </script>
        
        <?php
    }



?>






