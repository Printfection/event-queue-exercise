<?php

class Event {
  public static function emit($name, $payload) {
    # Your event client implementation code goes here
    # The purpose of this method is to queue the event to be processed
    # asynchronously by the event server located in ./server.php
  }
}

?>

