<?php namespace MailChimp;

use Guzzle\Http\Client;
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

    /**
     * Constructs and sends an API call built from the Request object. Uses Guzzle 3.8.* for PHP 5.3 compatibility.
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

        $requestBody = $request->getRequestBody();

        // does the request have a body?
        if ($requestBody !== null && !empty($requestBody)) {
            $parameters['headers'] = array("application/json");
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