# The Problem
When a new order is placed on our e-commerce store, we send an email receipt to the customer. Currently, the receipt email is sent immediately from the web application when the customer clicks “Place Order”. The process of preparing and sending the email to the customer sometimes takes so long that the request times out, the customer sees a blank page and they are not sure if their order was placed.

# The Goal
To improve the user experience of our online store, email receipts should be sent asynchronously.

To solve this problem, build a simple event queue and processor system. There should be two parts: a client that emits named events, and a server that dequeues and processes events emitted by the client. Besides a name, each event should also include a `payload` that can contain contextual data about the event; for example, the `email_address` and `order_id` for a newly placed order.

The client and the server should work asynchronously, in two separate processes, so persistent storage will be necessary to pass data from client to server.

# Requirements
- Use PHP to write both the client and the server.
- Use MySQL for persistent storage. It is your responsibility to design and model your own database. Keep it simple. An empty script, `create_events.sql`, is included for you to use.
- The event system only needs to support a single event type, ‘Order.Created’, however it should be built in a way that adding new events types in the future is trivial for the development team.
- For the scope of this problem, the server does not need to send an email. When the ‘Order.Created’ event is processed, it should output the string *"Sending receipt to {$email_address} for order #{$order_id}..."*

# Getting Started

```
$ git clone git@github.com:Printfection/event-queue-exercise.git
$ cd ./event-queue-exercise
$ ./run_tests
```

