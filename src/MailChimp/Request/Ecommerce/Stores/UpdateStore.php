<?php namespace MailChimp\Request\Ecommerce\Stores;

use MailChimp\Request\PatchRequest;

/**
 * Class UpdateStore
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/
 * @package MailChimp\Request\Ecommerce\Stores
 */
class UpdateStore extends PatchRequest
{
    const END_POINT = "ecommerce/stores/{store_id}";

    /**
     * UpdateStore constructor.
     * @param string $storeId - the store's id
     */
    public function __construct($storeId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId));
    }
}