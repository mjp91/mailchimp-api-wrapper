<?php namespace MailChimp\Request\Lists\Subscribers;

use MailChimp\Request\Request;

/**
 * Class UpdateSubscriber
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class UpdateSubscriber extends Request
{
    const END_POINT = "lists/{list_id}/members/{subscriber_hash}";

    public function __construct($httpMethod, $listId, $subscriberEmail)
    {
        parent::__construct($httpMethod, self::END_POINT, array(
            "list_id" => $listId,
            "subscriber_hash" => md5($subscriberEmail)
        ));
    }
}