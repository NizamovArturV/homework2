<?php
$studentsCount = rand (1, 1000000);

function get_letter($studentsCount) {
    $count = $studentsCount % 100;
    if ($count > 4 && $count < 21) {
        return "На учебе $studentsCount студентов";
    } elseif ($count % 10 === 1) {
        return "На учебе $studentsCount студент";
    } elseif ($count % 10 > 1 && $count % 10 < 5) {
        return "На учебе $studentsCount студента";
    }
    return "На учебе $studentsCount студентов";
}

echo (get_letter($studentsCount));