<?php namespace MailChimp\Request\Ecommerce\Stores;

use MailChimp\Request\DeleteRequest;

/**
 * Class DeleteStore
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/
 * @package MailChimp\Request\Ecommerce\Stores
 */
class DeleteStore extends DeleteRequest
{
    const END_POINT = "ecommerce/stores/{store_id}";

    /**
     * DeleteStore constructor.
     * @param string $storeId - the stores's id
     */
    public function __construct($storeId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId));
    }
}