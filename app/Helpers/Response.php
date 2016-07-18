<?php

namespace App\Helpers;

abstract class Response {

    public $data;

    public function respondToArray($response)
    {
        if(array_key_exists('items', $response)){
            return $this->parseResponse($response['items']);
        }
        return $this->parseResponse($response);
    }

    protected function parseResponse($items){
        foreach($items as $key => $item){
            $this->data[$key] = $item;
        }
        return json_decode(json_encode($this->data));
    }
}