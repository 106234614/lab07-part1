<!DOCTYPE html>
<body>
    <h1>Days of the Week (English)</h1>
    <?php
        $count = 0;
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        echo "<p>The days of the week in English are: </p>";
        foreach ($days as $day) {
            echo "$day";
            $count = $count + 1;
            if ($count != 7) {
                echo ", ";
            }
        }
    ?>

    <h1>Days of the Week (France)</h1>
    <?php
        $count = 0;
        $days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
        echo "<p>The days of the week in France are: </p>";
        foreach ($days as $day) {
            echo "$day";
            $count = $count + 1;
            if ($count != 7) {
                echo ", ";
            }
        }
    ?>
</body>
</html>

