<?php namespace MailChimp\Request\Lists\Subscribers;

use MailChimp\Request\GetRequest;

/**
 * Class ReadSubscribers
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class ReadSubscribers extends GetRequest
{
    const END_POINT = "lists/{list_id}/members";

    /**
     * ReadSubscribers constructor.
     * @param string $listId - the list's id
     */
    public function __construct($listId)
    {
        parent::__construct(self::END_POINT, array("list_id" => $listId));
    }
}