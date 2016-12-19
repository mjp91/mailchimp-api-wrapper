<?php namespace MailChimp\Request;

use MailChimp\Constants\HTTPMethod;

/**
 * Represents a POST HTTP request
 *
 * Class PostRequest
 * @package MailChimp\Request
 */
abstract class PostRequest extends Request
{
    /**
     * PostRequest constructor.
     * @param string $endPoint - the API end point
     * @param array|null $pathParameters - path parameters
     */
    public function __construct($endPoint, array $pathParameters = null)
    {
        parent::__construct(HTTPMethod::POST, $endPoint, $pathParameters);
    }
}