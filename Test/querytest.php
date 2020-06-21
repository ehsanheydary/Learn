<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'civilsociety'
);
$records = mysqli_query($conn , "SELECT * FROM civil_questions LEFT OUTER JOIN civil_votes  ON civil_questions.Questions_Users_Id = civil_votes.Users_Id ");

while ($record = $records->fetch_assoc())
{
    echo '<pre>';
    print_r($records);
    echo '</pre>';
}