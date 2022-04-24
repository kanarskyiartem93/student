<?php
ini_set("display_errors", 1);

require_once "Student.php";
require_once "Aspirant.php";

//Створити об'єкт типу Student, яка посилається на об'єкт типу Aspirant.

/**
 * @var Student $student
 */
$student = new Aspirant('John', 'Smith', '444', 5, 'Animals');

$student1 = new Student('Julia', 'Kuzina', '321', 4);
$student2 = new Student('Roman', 'Lukap', '123-a', 3);
$student3 = new Student('Yana', 'Luzhna', '321', 5);
$aspirant1 = new Aspirant('Ula', 'Goroshko', '345', 4, 'Pets');
$aspirant2 = new Aspirant('Nino', 'Francisko', '453', 3, 'Ducks');
$aspirant3 = new Aspirant('Luda', 'Vovk', '765', 5, 'Frogs');

//Створити масив типу Student, що містить об'єкти класу Student та Aspirant. Викликати метод getScholarship() для кожного елемента масиву
/** @var Student[] $students */
$students = array();

$students[] = $student1;
$students[] = $student2;
$students[] = $student3;
$students[] = $aspirant1;
$students[] = $aspirant2;
$students[] = $aspirant3;


foreach ($students as $st) {
    echo $st->getScholarship();
    echo '<br>';
}
