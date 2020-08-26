<?php

class GatewayPaymentFailedException extends Exception
{

}

class InvalidGatewayTokenException extends Exception
{
}

class PaymentGateway
{
    public function charge($token, $amount)
    {
        if (1) {
            throw new InvalidGatewayTokenException;
        }

        if (1) {
            throw new GatewayPaymentFailedException;
        }
    }
}

$gateway = new PaymentGateway;

try {
    $gateway->charge('123', 25.00);
} catch (GatewayPaymentFailedException $e) {
    die('Payment failed');
} catch (InvalidGatewayTokenException $e) {
    die('Invalid Token');
}
