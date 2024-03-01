<?php
$config = [
    'protocol' => 'smtp',
    'smpt_host' => 'ssL://smtp.gmail.com',
    'smtp_port' => 465,
    'mailtype' => 'html',
    'smtp_user' =>' ',
    'newline' => '\r\n'
];
$to = "fattybobik@gmail.com";
$subject = 'Y VAS RAAAAAAK';
$message = 'LOOOOOOOOOOOOOOOOL';
$headers = 'from: admin; Content-type: text/html; charset=utf-8';
mail($to,$subject,$message,$headers);
echo ('Done')
?>
