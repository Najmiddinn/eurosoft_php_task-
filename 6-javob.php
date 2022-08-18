<?php

$db = mysqli_connect('localhost', 'root', '', 'test');
if (!$db) {
    echo 'error';die;
}

$form_data = array(
  'name' => 'Eshmatvoy',
  'surname' => 'Toshmatov',
  'email' => 'eshmatvoy@mail.ru',
  'message' => '<b>Assalomu alaykum!</b><span>Men sizga yozayotganimdan maqsad shuki...</span><script>alert("Voy!");</script>',
);

$name =  $form_data['name'];
$surname = $form_data['surname'];
$email =  $form_data['email'];
$message = strip_tags($form_data['message']);

$query = "INSERT INTO `contact_messages` (`name`, `surname`, `email`, `message`) VALUES ('$name','$surname','$email','$message')";

$result = mysqli_query($db, $query);
echo $result;