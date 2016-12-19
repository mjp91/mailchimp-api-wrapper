<?php namespace MailChimp;

use MailChimp\Request\Request;

/**
 * Blueprint for handling MailChimp API requests
 *
 * Interface RequestHandler
 * @package MailChimp
 */
interface RequestHandler
{
    public function handle(Request $request);
}