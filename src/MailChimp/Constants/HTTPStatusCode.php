<?php namespace MailChimp\Constants;

/**
 * HTTP status code constants
 *
 * Class HTTPStatusCode
 * @package MailChimp\Constants
 */
final class HTTPStatusCode
{
    const OK = 200;
    const CREATED = 201;
    const MOVED_PERMANENTLY = 301;
    const FOUND = 302;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const INTERNAL_SERVER_ERROR = 500;

    private function __construct()
    {
    }
}