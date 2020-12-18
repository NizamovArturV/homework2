<?php
$studentsCount = rand (1, 1000000);

function get_letter($studentsCount) {
    $count = $studentsCount % 10;
    if ($count == 1) {
        return "На учебе $studentsCount студент";
    } elseif ($count > 1 && $count < 5) {
        return "На учебе $studentsCount студента";
    } else {
        return "На учебе $studentsCount студентов";
    }
}

echo (get_letter($studentsCount));
