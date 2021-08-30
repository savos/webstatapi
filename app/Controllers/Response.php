<?php

namespace App\Controllers;

use JsonSerializable;
use Config\route;

class Response implements JsonSerializable
{
    protected string $data;

    protected string $message;

    protected bool $error;


    /**
     * Response constructor.
     * @param $data
     * @param string $message
     * @param bool $error
     */
    public function __construct($data, $message='', $error = false)
    {
        $this->data = (is_object($data) || is_array($data)) ? json_encode($data) : $data;
        $this->message = $message;
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function jsonSerialize(): string
    {
        return json_encode([
            'error' => $this->error,
            'message' => $this->message,
            'data' => $this->data
        ], JSON_FORCE_OBJECT);
    }
}