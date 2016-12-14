<?php namespace MailChimp\Request\Subscribers;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class DeleteSubscriber
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class DeleteSubscriber extends Request
{
    const END_POINT = "lists/%s/members/%s";

    public function __construct($listId, $subscriberEmail)
    {
        $endPoint = sprintf(self::END_POINT, md5($subscriberEmail));
        parent::__construct(HTTPMethod::DELETE, $endPoint);
    }
}