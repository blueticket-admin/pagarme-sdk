<?php

namespace PagarMe\Endpoints;

use PagarMe\Client;
use PagarMe\Routes;
use PagarMe\Endpoints\EndpointInterface;
use PagarMe\Endpoints\Endpoint;

class Charges extends Endpoint
{
    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function refund(array $payload)
    {
        return $this->client->request(
            self::DELETE,
            Routes::charges()->refund($payload['id']),
            ['json' => $payload]
        );
    }
}
