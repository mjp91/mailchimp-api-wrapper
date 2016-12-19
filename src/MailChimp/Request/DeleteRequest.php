<?php namespace MailChimp\Request;

use MailChimp\Constants\HTTPMethod;

/**
 * Represents a DELETE HTTP request
 *
 * Class DeleteRequest
 * @package MailChimp\Request
 */
abstract class DeleteRequest extends Request
{
    /**
     * DeleteRequest constructor.
     * @param string $endPoint - the API end point
     * @param array|null $pathParameters - path parameters
     */
    public function __construct($endPoint, array $pathParameters = null)
    {
        parent::__construct(HTTPMethod::DELETE, $endPoint, $pathParameters);
    }
}