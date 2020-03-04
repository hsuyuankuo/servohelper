<?php

$body = file_get_contents('php://input');
$sig_check = 'sha1=' . hash_hmac('sha1', $body, 'corona_age');
$headers = apache_request_headers();

if (hash_equals($sig_check, $headers['X-Hub-Signature']))
{
    shell_exec( './sh pull_servohelper.sh' );	 
    echo "verified.";
}
else
{
    echo "fail.";
}


?>
