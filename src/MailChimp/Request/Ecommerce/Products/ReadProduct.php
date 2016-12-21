<?php namespace MailChimp\Request\Ecommerce\Products;

use MailChimp\Request\GetRequest;

/**
 * Class ReadProduct
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/products/
 * @package MailChimp\Request\Ecommerce\Products
 */
class ReadProduct extends GetRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/products/{product_id}";

    /**
     * ReadProduct constructor.
     * @param string $storeId - the store's id
     * @param string $productId - the product's id
     */
    public function __construct($storeId, $productId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId, "product_id" => $productId));
    }
}