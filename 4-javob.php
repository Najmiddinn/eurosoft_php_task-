<?php

$connect = mysqli_connect('localhost', 'root', '', 'test');
if (!$connect) {
    echo 'error';die;
}
$sql = "SELECT users.*, profile.first_name, profile.last_name, profile.birth_date, profile.phone_number
FROM users
INNER JOIN profile ON users.id = profile.user_id WHERE users.status = 1 limit 4"; 
$result = mysqli_query($connect, $sql);

echo '<pre>';
// print_r($result);die;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    print_r($row);
    // echo $row['username'];
}

?>

