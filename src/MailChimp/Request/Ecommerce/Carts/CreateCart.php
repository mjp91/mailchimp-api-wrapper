<?php namespace MailChimp\Request\Ecommerce\Carts;

use MailChimp\Request\PostRequest;

/**
 * Class CreateCart
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/
 * @package MailChimp\Request\Ecommerce\Carts
 */
class CreateCart extends PostRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/carts";

    /**
     * CreateCart constructor.
     * @param string $storeId - the store's id
     */
    public function __construct($storeId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId));
    }
}