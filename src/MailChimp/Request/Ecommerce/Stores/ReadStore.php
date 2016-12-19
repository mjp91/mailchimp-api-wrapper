<?php namespace MailChimp\Request\Ecommerce\Stores;

use MailChimp\Request\GetRequest;

/**
 * Class ReadStore
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/
 * @package MailChimp\Request\Ecommerce\Stores
 */
class ReadStore extends GetRequest
{
    const END_POINT = "ecommerce/stores/{store_id}";

    /**
     * ReadStore constructor.
     * @param string $storeId - the store's id
     */
    public function __construct($storeId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId));
    }
}