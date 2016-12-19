<?php namespace MailChimp;

use Guzzle\Http\Client;
use MailChimp\Exceptions\RequestFailureException;
use MailChimp\Request\GetRequest;
use MailChimp\Request\Request;

/**
 * Guzzle 3.8.* implementation of MailChimp API request handler. Uses Guzzle 3.8.* for PHP 5.3 compatibility.
 *
 * Class GuzzleRequestHandler
 * @package MailChimp
 */
class GuzzleRequestHandler implements RequestHandler
{
    const BASE_URL = "https://%s.api.mailchimp.com/3.0/";

    private $apiURL;
    private $apiKey;
    private $username;

    /**
     * RequestGenerator constructor.
     * @param string $dataCentre - the data centre e.g. us11
     * @param $username - username for the MailChimp account
     * @param $apiKey - the API key for the MailChimp account
     */
    public function __construct($dataCentre, $username, $apiKey)
    {
        $this->apiURL = sprintf(self::BASE_URL, $dataCentre);
        $this->apiKey = $apiKey;
        $this->username = $username;
    }

    /**
     * Constructs and sends an API call built from the Request object.
     *
     * @param Request $request
     * @return array response
     * @throws RequestFailureException
     */
    public function handle(Request $request)
    {
        $client = new Client($this->apiURL);

        $parameters = array(
            'exceptions' => false,
        );

        // is it a GET request and is there query parameters?
        if ($request instanceof GetRequest) {
            $queryParameters = $request->getQueryParameters();
            if ($queryParameters !== null) {
                $parameters['query'] = $queryParameters;
            }
        }

        $requestBody = $request->getRequestBody();

        // does the request have a body?
        if ($requestBody !== null && !empty($requestBody)) {
            $parameters['headers'] = array("Content-Type" => "application/json");
            $parameters['body'] = json_encode($requestBody);
        }

        $request = $client->createRequest($request->getHttpMethod(), $request->getEndPoint(), null, null, $parameters);
        $request->setAuth($this->username, $this->apiKey);
        $response = $request->send();

        $httpStatusCode = $response->getStatusCode();
        $responseBody = $response->json();

        if (!in_array($httpStatusCode, array(200, 201))) {
            throw new RequestFailureException($httpStatusCode, "Request failed", $responseBody);
        }

        return $responseBody;
    }
}