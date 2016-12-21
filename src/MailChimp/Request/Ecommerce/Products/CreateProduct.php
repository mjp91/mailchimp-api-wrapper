<?php namespace MailChimp\Request\Ecommerce\Products;

use MailChimp\Request\PostRequest;

/**
 * Class CreateProduct
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/products/
 * @package MailChimp\Request\Ecommerce\Products
 */
class CreateProduct extends PostRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/products";

    /**
     * CreateProduct constructor.
     * @param string $storeId - the store's id
     */
    public function __construct($storeId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId));
    }
}