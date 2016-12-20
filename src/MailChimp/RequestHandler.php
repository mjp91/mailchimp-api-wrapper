<?php namespace MailChimp;

use MailChimp\Request\Request;
use MailChimp\Response\Response;

/**
 * Blueprint for handling MailChimp API requests
 *
 * Interface RequestHandler
 * @package MailChimp
 */
interface RequestHandler
{
    /**
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request);
}