<!DOCTYPE html>
<html>
<body>
    <?php
    $student = array("Tiara", "Cindy", "Fuad", "Fauzil");
    $years = array("2021", "2022", "2022", "2023");

    echo "<table border='2'>";
    for ($i = 0; $i <= 3; $i++) {
        echo "<tr><td> $student[$i] </td><td> $years[$i] </td></tr>";
    }
    echo "</table>"
    ?>
</body>
</html>