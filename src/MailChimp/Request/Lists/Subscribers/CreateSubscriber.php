<?php namespace MailChimp\Request\Lists\Subscribers;

use MailChimp\Request\PostRequest;

/**
 * Class CreateSubscriber
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class CreateSubscriber extends PostRequest
{
    const END_POINT = "lists/{list_id}/members";

    /**
     * CreateSubscriber constructor.
     * @param string $listId - the list's id
     */
    public function __construct($listId)
    {
        parent::__construct(self::END_POINT, array("list_id" => $listId));
    }
}