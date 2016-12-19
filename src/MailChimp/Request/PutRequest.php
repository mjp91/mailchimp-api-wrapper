<?php namespace MailChimp\Request;

use MailChimp\Constants\HTTPMethod;

/**
 * Represents a PUT HTTP request
 *
 * Class PutRequest
 * @package MailChimp\Request
 */
abstract class PutRequest extends Request
{
    /**
     * PutRequest constructor.
     * @param string $endPoint - the API end point
     * @param array|null $pathParameters - path parameters
     */
    public function __construct($endPoint, array $pathParameters = null)
    {
        parent::__construct(HTTPMethod::PUT, $endPoint, $pathParameters);
    }
}