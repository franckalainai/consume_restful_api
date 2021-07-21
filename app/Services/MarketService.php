<?php

namespace App\Services;

use App\Traits\AuthorizesMarketRequests;
use App\Traits\ConsumesExternalServices;
use App\Traits\InteractsWithMarketResponses;

class MarketService
{
    use ConsumesExternalServices, AuthorizesMarketRequests, InteractsWithMarketResponses;

    // the URL to send the request
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.market.base_uri');
    }
}
