<?php
//if statement (voting system)
$age = 19; //sample age
if ($age >= 18) {
    echo " Pwede na Bumoto\n<br>";
}

// 2. if else statement (driving eligibility)

if ($age >= 15) {
    echo "Puwede na magDrive, Wastong EDAD\n<br>";
} else {
    echo "Bawal pa magDrive, MENOR DE EDAD\n<br>";
}

// 3. if elseif statement (grading system)

$score = 85;//sample grade
if ($score >= 90) {
    echo "OUTSTANDING\n<br>";
} elseif ($score >= 80) {
    echo "AVERAGE\n<br>";
} elseif ($score >= 75) {
    echo "PASSED\n<br>";
} else {
    echo "FAILED\n<br>";
}

// 4. switch statement (day of the week)
$day = "Friday";

switch ($day) {
    case "Monday":
        echo "Walang Pasok\n";
        break;
    case "Tuesday":
        echo "Onsite Class\n";
        break;
    case "Wednesday":
        echo "Online Class\n";
        break;
    case "Thursday":
        echo "Walang Pasok\n";
        break;
    case "Friday":
        echo "Online Class\n";
        break;
    default:
        echo "Weekend\n";
}
?>
