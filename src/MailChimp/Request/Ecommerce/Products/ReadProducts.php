<?php namespace MailChimp\Request\Ecommerce\Products;

use MailChimp\Request\GetRequest;

/**
 * Class ReadProducts
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/products/
 * @package MailChimp\Request\Ecommerce\Products
 */
class ReadProducts extends GetRequest
{
    const END_POINT = "commerce/stores/{store_id}/products";

    /**
     * ReadProducts constructor.
     * @param string $storeId - the store's id
     */
    public function __construct($storeId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId));
    }
}