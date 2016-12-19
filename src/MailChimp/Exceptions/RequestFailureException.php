<?php namespace MailChimp\Exceptions;

/**
 * Represents a request returning a result other than OK
 *
 * Class RequestFailureException
 * @package MailChimp\Exceptions
 */
class RequestFailureException extends \Exception
{
    private $httpStatusCode;
    private $responseBody;

    /**
     * RequestFailureException constructor.
     * @param string $httpStatusCode - the HTTP status code
     * @param string $message - description of error
     * @param array $responseBody - the response body
     */
    public function __construct($httpStatusCode, $message, $responseBody = null)
    {
        parent::__construct($message);
        $this->httpStatusCode = $httpStatusCode;
        $this->responseBody = $responseBody;
    }

    /**
     * @return string
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @param string $httpStatusCode
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * @return array
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * @param array $responseBody
     */
    public function setResponseBody($responseBody)
    {
        $this->responseBody = $responseBody;
    }
}