<?php namespace MailChimp\Exceptions;

use MailChimp\Response\Response;

/**
 * Represents a request returning a result other than OK
 *
 * Class RequestFailureException
 * @package MailChimp\Exceptions
 */
class RequestFailureException extends \Exception
{
    private $response;

    /**
     * RequestFailureException constructor.
     * @param Response $response
     * @param string|null $message - description of error
     */
    public function __construct(Response $response, $message = null)
    {
        parent::__construct($message);
        $this->response = $response;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param Response $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }
}