<?php // Create a Clockwork object using your API key
require 'Clockwork.php';
require 'ClockworkException.php';
$key="6aca009dd18eb6fdefb8f7691d7c897a7485c468";
$clockwork = new mediaburst\ClockworkSMS\Clockwork( $key );

// Setup and send a message
$message = array( "to" => "0021698902940", "message" => "Hello World" );
$result = $clockwork->send( $message );

// Check if the send was successful
if( $result["success"] ) {
    echo "Message sent - ID: " . $result["id"];
} else {
    echo "Message failed - Error: " . $result["error_message"];
}
?>