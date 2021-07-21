<?php

namespace App\Services;

use App\Traits\ConsumesExternalServices;

class MarketService
{
    use ConsumesExternalServices;

    // the URL to send the request
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.market.base_uri');
    }

    // resolve the elements to send when authorizing the request
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
    }

    // decode the correspondingly the response
    public function decodeResponse($response)
    {
    }

    // resolve when the request failed
    public function checkIfErrorResponse($response)
    {
    }
}
