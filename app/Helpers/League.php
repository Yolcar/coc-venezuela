<?php

namespace App\Helpers;

class League extends Response
{
    public function __construct($data)
    {
        $this->data = $this->respondToArray($data);
    }
}