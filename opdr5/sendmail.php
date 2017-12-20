<?php
// Variabelen
$to = '25053@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From '. $_POST['from'];

// versturing
mail($to,$subject, $message, $headers);

//bevestiging
echo 'Uw mail is verstuurd. Bedankt!';