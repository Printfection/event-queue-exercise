<?php

# *** You do not need to edit this file ***
#
# This file is a mock application used to simulate a real-world
# application that uses the event client, a class called Event located in ./client.php
#
# Just as our real web application would emit the 'Order.Created'
# event when a customer clicks the 'Place Order' button on checkout,
# the code below emits three events for three mock orders.
#
# To run the mock application:
#   $ php application.php

require './client.php';

Event::emit('Order.Created', array('order_id' => 1, 'email_address' => 'bob@example.com'));
Event::emit('Order.Created', array('order_id' => 2, 'email_address' => 'sally@example.com'));
Event::emit('Order.Created', array('order_id' => 3, 'email_address' => 'paul@example.com'));

?>

