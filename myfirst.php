<!DOCTYPE html>
<body>
    <h1>part1</h1>
    <?php
        $marks = array(85, 85, 95);
        $marks[2] = 90;
        $average = ($marks[0] + $marks[1] + $marks[2]) / 3;
        if ($average >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }
        echo "<p>The average score is: $average, you $status!</p>";
    ?>
</body>
</html>