<?php namespace MailChimp\Request\Ecommerce\Stores;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class CreateStore
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/
 * @package MailChimp\Request\Ecommerce\Stores
 */
class CreateStore extends Request
{
    const END_POINT = "ecommerce/stores";

    public function __construct()
    {
        parent::__construct(HTTPMethod::POST, self::END_POINT);
    }
}