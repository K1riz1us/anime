<?php
    require_once 'group.php';
    require_once 'student.php';

    $i04 = new group('И-04');

    $x1 = new student('Константин', 'Осинцев',18, 2.4);
    $x2 = new student('Маским', 'Макрицкий',18, 4.2);

    $i04->addStudent($x1);
    $i04->addStudent($x2);
    $i04->addStudent(new Student('Екатерина', 'Бахман', 18, 5.0));

    $i04->display();
?>