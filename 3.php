<?php
function getgrade($marks){
    switch (true) {
        case($marks >= 90 && $marks <= 100):
            return "A+";
            break;
        case($marks >= 80 && $marks < 90):
            return "A";
            break;
        case($marks >= 70 && $marks < 80):
            return "B+";
            break;
        case($marks >= 60 && $marks < 70):
            return "B";
            break;
        case($marks >= 50 && $marks < 60):
            return "C+";
            break;
        case($marks >= 40 && $marks < 50):
            return "C";
            break;
        case($marks >= 33 && $marks < 40):
            return "D";
            break;
        case($marks < 33):
            return "Fail";
            break;
        default:
            return "Invalid marks";
    }
}

$marks = 85;
$grade = getgrade($marks);

echo "Student marks sheet \n";
echo "------- \n";
echo "Marks = $marks \n";
echo "Grade = $grade \n";
?>
