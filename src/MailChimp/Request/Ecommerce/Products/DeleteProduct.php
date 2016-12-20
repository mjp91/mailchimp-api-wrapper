<?php namespace MailChimp\Request\Ecommerce\Products;

use MailChimp\Request\DeleteRequest;

/**
 * Class DeleteProduct
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/products/
 * @package MailChimp\Request\Ecommerce\Products
 */
class DeleteProduct extends DeleteRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/products/{product_id}";

    public function __construct($storeId, $productId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId, "product_id" => $productId));
    }
}