<?php

$body = file_get_contents('php://input');
$sig_check = 'sha1=' . hash_hmac('sha1', $body, 'corona_age');
$headers = apache_request_headers();

if (hash_equals($sig_check, $headers['X-Hub-Signature']))
{
    $output = shell_exec( 'sh /var/www/html/servohelper/pull_servohelper.sh' );
    echo $output;	
}
else
{
    echo "fail.";
}


?>
