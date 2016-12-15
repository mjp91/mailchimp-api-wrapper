<?php namespace MailChimp\Request;

use MailChimp\Constants\HTTPMethod;

/**
 * Abstract model of a MailChimp API request
 *
 * Class Request
 * @package MailChimp\Request
 */
abstract class Request
{
    private $httpMethod;
    private $endPoint;
    private $requestBody;

    public function __construct($httpMethod = HTTPMethod::GET, $endPoint)
    {
        if (!$this->isHTTPMethodValid($httpMethod)) {
            throw new \InvalidArgumentException("{$httpMethod} is not an acceptable HTTP method");
        }

        $this->httpMethod = $httpMethod;
        $this->endPoint = $endPoint;
        $this->requestBody = null;
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     * @param string $httpMethod
     */
    protected function setHttpMethod($httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }

    /**
     * @return string
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    /**
     * @param string $endPoint
     */
    protected function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;
    }

    /**
     * Returns an associative array of request parameters
     *
     * @return array requestBody
     */
    public function getRequestBody()
    {
        return $this->requestBody;
    }

    /**
     * @param array $requestBody
     */
    public function setRequestBody(array $requestBody)
    {
        $this->requestBody = $requestBody;
    }

    /**
     * Checks is a HTTP method is valid
     *
     * @param $httpMethod
     * @return bool
     */
    private function isHTTPMethodValid($httpMethod)
    {
        return in_array($httpMethod, array(
            HTTPMethod::GET,
            HTTPMethod::POST,
            HTTPMethod::PUT,
            HTTPMethod::PATCH,
            HTTPMethod::DELETE
        ));
    }
}