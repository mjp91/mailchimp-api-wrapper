<?php namespace MailChimp\Response;

/**
 * Simplified model of a HTTP response
 *
 * Class Response
 * @package MailChimp\Response
 */
class Response
{
    protected $httpCode;
    protected $responseBody;

    /**
     * Response constructor.
     * @param $httpCode
     * @param null|mixed $responseBody
     */
    public function __construct($httpCode, $responseBody = null)
    {
        $this->httpCode = $httpCode;
        $this->responseBody = $responseBody;
    }

    /**
     * @return int
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    /**
     * @return null|mixed
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }
}