<?php

namespace App\Routing;

class HttpMethod
{
    const HTTP_METHODS = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'CONNECT', 'OPTIONS', 'TRACE'];

    protected string $method;

    /**
     * @param $httpMethod
     * @throws \Exception
     */
    public function __construct(string $httpMethod)
    {
        try {
            $this->method = $this->validate(mb_strtoupper($httpMethod));
        } catch (HttpMethodException $e) {
            echo($e->getMessage());
            die();
        }
    }

    /**
     * @param $httpMethod
     * @return string
     * @throws \Exception
     */
    protected function validate(string $httpMethod): string
    {
        if (in_array($httpMethod, self::HTTP_METHODS)) {
            return $httpMethod;
        }
        throw new HttpMethodException('Wrong method exception: '.$httpMethod);
    }

    public function getMethod()
    {
        return $this->method;
    }
}