<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalServices
{
    // send a request to any service
    public function makeRequest($method, $requestUrl, $queryParams = [], $formParams = [], $headers = [])
    {
        // create client with alternative baseUri wich is an attribute for the class
        $client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        // resolving the authorization to send the headers or any parameter that we need there
        if (method_exists($this, 'resolveAuthorization')) {
            $this->resolveAuthorization($queryParams, $formParams, $headers);
        }

        // resolving the response
        $response = $client->request($method, $requestUrl, [
            'query' => $queryParams,
            'form_params' => $formParams,
            'headers' => $headers
        ]);

        // receive the response wich can be decoded by the service we implemente depending of the format
        // of the content of that response
        $response = $response->getBody()->getContents();

        if (method_exists($this, 'decodeResponse')) {
            $response = $this->decodeResponse($response);
        }
        // verify if the response is an error response or not
        if (method_exists($this, 'checkIfErrorResponse')) {
            $this->checkIfErrorResponse($response);
        }

        return $response;
    }
}
