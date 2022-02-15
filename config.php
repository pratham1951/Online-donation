<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51K5WnqSA9CwRW7vWJUHfDj8qRfM2aeRLYOhwHREfvGU7eME9h6SYNsm75sXNeBV3353p9GQ5KDekGDlBYZOELd9E007mL6cL81";

$secretKey="sk_test_51K5WnqSA9CwRW7vW7R9iIbYHPKXmA9ayoJNcUIvmJFqYAsNnXMai4ie6aR4iz05tFToPBMqpLH9EsJbYilG8S5VQ003ecINcFB";

\Stripe\Stripe::setApiKey($secretKey);
?>