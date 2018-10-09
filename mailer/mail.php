<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('4349bddc657b8e6dd6272fe13020372f-c8e745ec-98f3818b');
$domain = "sandbox88601dbe6b2b4d0c8c3ef617403f0475.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'                => 'postmaster@sandbox88601dbe6b2b4d0c8c3ef617403f0475.mailgun.org',
    'to'                  => 'maggieraymond46@gmail.com',
    'subject'             => 'Hello',
    'text'                => 'Testing some Mailgun awesomness!',
));
