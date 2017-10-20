<?php



// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC5f8fcbfeec7a43a938b60a8ff87057b0';
$token = '179c4ce72a459fbcc18c804b1066b882';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+19173490168',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+15017250604',
        // the body of the text message you'd like to send
        'body' => 'Hello My name is PRASAD PATIL CS 643 Fall 2017'
    )
);

echo "<script type='text/javascript'>alert('Your message has been sent');</script>";

?>
