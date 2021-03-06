<?php namespace MailChimp\Request\Ecommerce\Stores;

use MailChimp\Request\PostRequest;

/**
 * Class CreateStore
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/
 * @package MailChimp\Request\Ecommerce\Stores
 */
class CreateStore extends PostRequest
{
    const END_POINT = "ecommerce/stores";

    /**
     * CreateStore constructor.
     */
    public function __construct()
    {
        parent::__construct(self::END_POINT);
    }
}