<?php

namespace App\Exception;

// use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class CustomHttpException implements HttpExceptionInterface
{
    private $statusCode;
    private $headers;

    public function __construct(string $httpCode)
    {
        switch ($httpCode) {
            case "404":
                // $response()
                http_response_code(404);
                return json_encode(array(
                    "msg" => "not found"
                ));
        }
    }
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
