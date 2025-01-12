<?php
namespace EnotasGw\V1\Exceptions;

use Exception;

class RequestException extends Exception
{
    /**
    * The requested url
    * @var string
    */
    public $requestedUrl;
    
    /**
    * The response body
    * @var string
    */
    public $responseBody;

    public function __construct($httpCode, $faultMessage, $requestedUrl, $responseBody)
    {
        $this->requestedUrl = $requestedUrl;
        $this->responseBody = $responseBody;
        parent::__construct($faultMessage, $httpCode, null);
    }
}
