#MailChimp API Wrapper
Lightweight wrapper library for MailChimp API

##Example Usage
```php
// construct the request handler, passing in data centre, username and API key
$requestHandler = new \MailChimp\RequestHandler("us14", "matthew.pearsall@ogl.co.uk", "2c13852885cfbcd3e390cf5d9e4c6d49-us14");

// construct the request class for the API call, passing in any required URL parameters
$subscriberGet = new ReadSubscribers("4494d94b5a");

// optionally add a request body (if required by the API)
$requestBody = array("..." => "...");
$subscriberGet->setRequestBody($requestBody);

// send the request, returns an associative array
try {
    $response = $requestHandler->handle($subscriberGet);
} catch (RequestFailureException $ex) {
    // any non-200 response will cause a RequestFailure exception, which details the failure 
    $httpStatusCode = $ex->getHttpStatusCode();
    $response = $ex->getResponseBody();
}
```