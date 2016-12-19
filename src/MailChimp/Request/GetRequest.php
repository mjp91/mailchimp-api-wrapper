<?php namespace MailChimp\Request;

use MailChimp\Constants\HTTPMethod;

/**
 * Represents a GET HTTP request
 *
 * Class GetRequest
 * @package MailChimp\Request
 */
abstract class GetRequest extends Request
{
    private $queryParameters;

    /**
     * GetRequest constructor.
     * @param string $endPoint - the API end point
     * @param array|null $pathParameters - path parameters
     * @param array|null $queryParameters - query parameters
     */
    public function __construct($endPoint, array $pathParameters = null, array $queryParameters = null)
    {
        parent::__construct(HTTPMethod::GET, $endPoint, $pathParameters);
        $this->queryParameters = $queryParameters;
    }

    /**
     * @return array|null
     */
    public function getQueryParameters()
    {
        return $this->queryParameters;
    }

    /**
     * @param array $queryParameters
     */
    public function setQueryParameters(array $queryParameters)
    {
        $this->queryParameters = $queryParameters;
    }
}