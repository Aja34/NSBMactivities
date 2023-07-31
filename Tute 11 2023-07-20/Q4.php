<!-- http://localhost/Web/Tute 11 2023-07-20/Q4.php -->
<?php

function getDayOfWeek($number) {
    $daysOfWeek = [
        1 => "Monday",
        2 => "Tuesday",
        3 => "Wednesday",
        4 => "Thursday",
        5 => "Friday",
        6 => "Saturday",
        7 => "Sunday",
    ];

    return isset($daysOfWeek[$number]) ? $daysOfWeek[$number] : "Invalid number";
}

$number = 3;
$dayOfWeek = getDayOfWeek($number);

echo "Number: " . $number . "\n";
echo "Day of the Week: " . $dayOfWeek . "\n";
?>
