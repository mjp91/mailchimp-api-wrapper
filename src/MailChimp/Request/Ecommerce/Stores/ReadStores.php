<?php namespace MailChimp\Request\Ecommerce\Stores;

use MailChimp\Request\GetRequest;

/**
 * Class ReadStores
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/
 * @package MailChimp\Request\Ecommerce\Stores
 */
class ReadStores extends GetRequest
{
    const END_POINT = "ecommerce/stores";

    /**
     * ReadStores constructor.
     */
    public function __construct()
    {
        parent::__construct(self::END_POINT);
    }
}