<?php

const COLLEGE_NAME = "MARWADI UNIVERSITY";

$student_name = "Khushi Kumari";
$enrollment_number = "92400527042";
$course = "BCA";
$semester = "4th";

$subject1 = "Operating System";
$subject2 = "Computer Network";
$subject3 = "Python";
$subject4 = "C#";
$subject5 = "Life Skills";

$mark1 = 80;
$mark2 = 95;
$mark3 = 90;
$mark4 = 85;
$mark5 = 75;


$total_marks = $mark1 + $mark2 + $mark3 + $mark4 + $mark5;
$percentage = ($total_marks / 500) * 100;




echo "<h2>Previous Semester Result</h2>";
echo "College Name: " . COLLEGE_NAME . "<br>";
echo "Student Name: " . $student_name . "<br>";
echo "Enrollment Number: " . $enrollment_number . "<br>";
echo "Course: " . $course . "<br>";
echo "Semester: " . $semester . "<br><br>";

echo "<b>Subjects and Marks</b><br>";
echo $subject1 . ": " . $mark1 . "<br>";
echo $subject2 . ": " . $mark2 . "<br>";
echo $subject3 . ": " . $mark3 . "<br>";
echo $subject4 . ": " . $mark4 . "<br>";
echo $subject5 . ": " . $mark5 . "<br><br>";

echo "Total Marks: " . $total_marks . " / 500<br>";
echo "Percentage: " . $percentage . "%";


?>