<?php

namespace App\Traits;

use App\Services\MarketAuthenticationService;

trait AuthorizesMarketRequests
{
    // resolve the elements to send when authorizing the request
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $accessToken = $this->resolveAccessToken();
        $headers['Authorization'] = $accessToken;
    }

    public function resolveAccessToken()
    {
        $authenticationService = resolve(MarketAuthenticationService::class);
        return $authenticationService->getClientCredentialsToken();
    }
}
