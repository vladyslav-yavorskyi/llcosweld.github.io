<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
}

$mailTo = "vlad09vlad09@yandex.com";
$headers = "from: ".$email;
$txt = "You have an e-mail form ".$name.".\n\n".$tel;
$subject = "NEW";

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");

?>


