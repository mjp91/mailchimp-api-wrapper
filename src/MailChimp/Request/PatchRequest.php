<?php namespace MailChimp\Request;

use MailChimp\Constants\HTTPMethod;

/**
 * Represents a PATCH HTTP request
 *
 * Class PatchRequest
 * @package MailChimp\Request
 */
abstract class PatchRequest extends Request
{
    /**
     * PatchRequest constructor.
     * @param string $endPoint - the API end point
     * @param array|null $pathParameters - path parameters
     */
    public function __construct($endPoint, array $pathParameters = null)
    {
        parent::__construct(HTTPMethod::PATCH, $endPoint, $pathParameters);
    }
}