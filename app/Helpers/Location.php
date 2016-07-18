<?php

namespace App\Helpers;

class Location extends Response
{
    public function __construct($data)
    {
        $this->data = $this->respondToArray($data);
    }

    public function getCountries()
    {
        $countries = [];
        foreach($this->data as $location){
            if($location->isCountry){
                $countries[$location->name] = $location;
            }
        }
        return $countries;
    }
}