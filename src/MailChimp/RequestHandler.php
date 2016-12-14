<?php namespace MailChimp;

use GuzzleHttp\Client;
use MailChimp\Exceptions\RequestFailureException;
use MailChimp\Request\Request;

class RequestHandler
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

    public function handle(Request $request)
    {
        $client = new Client(array(
            'base_uri' => $this->apiURL
        ));

        $parameters = array(
            'auth' => array($this->username, $this->apiKey),
            'http_errors' => false,
        );

        $requestBody = $request->getRequestBody();

        // does the request have a body?
        if ($requestBody !== null && !empty($requestBody)) {
            $parameters['json'] = $requestBody;
        }

        $response = $client->request($request->getHttpMethod(), $request->getEndPoint(), $parameters);

        $httpStatusCode = $response->getStatusCode();
        $responseBody = \GuzzleHttp\json_decode($response->getBody(), true);

        if (!in_array($httpStatusCode, array(200, 201))) {
            throw new RequestFailureException($httpStatusCode, "Request failed", $responseBody);
        }

        return $responseBody;
    }
}