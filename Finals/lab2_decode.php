<?php
$json_string = '{"name":"Edmark Lupiga","age":21,"email":"edmark@example.com"}';

$student_obj = json_decode($json_string);
$student_array = json_decode($json_string, true);


echo "Object: " . $student_obj->name . "<br>";
echo "Array: " . $student_array["email"] . "<br>";
?>
