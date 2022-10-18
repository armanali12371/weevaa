<?php

require_once 'sendgrid-php.php';

$SENDGRID_API_KEY='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';

$email1 = $_POST['email'];
$name = $_POST['name'];
//$mobile = $_POST['mobile'];
$msg = $_POST['msg'];
if ($email1 == '') {
   echo 'Pls fill email id';
   die();
}
echo $email1;
$email = new \SendGrid\Mail\Mail();
$email->setFrom("johncool12371@gmail.com", $name);
$email->setSubject("Weeva - Contact us");
$email->addTo($email1, "Example User"); //johncool12371@gmail.com
$email->addContent("text/plain", "Test Email By arman Ali");
$email->addContent(
    "text/html", "<strong>$msg</strong>"
);
$sendgrid = new \SendGrid($SENDGRID_API_KEY);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
    header("location:thankyou.php");
    // redirect('thankyou.php');
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}

?>