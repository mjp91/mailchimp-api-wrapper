<?php namespace MailChimp\Request\Subscribers;

use MailChimp\Request\Request;

/**
 * Class UpdateSubscriber
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class UpdateSubscriber extends Request
{
    const END_POINT = "lists/%s/members/%s";

    public function __construct($httpMethod, $listId, $subscriberEmail)
    {
        $endPoint = sprintf(self::END_POINT, $listId, md5($subscriberEmail));
        parent::__construct($httpMethod, $endPoint);
    }
}