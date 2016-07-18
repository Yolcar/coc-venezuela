<?php

namespace App\Helpers;

class Clan extends Response
{
    public function __construct($data)
    {
        $this->data = $this->respondToArray($data);
    }

    public function getMemberList()
    {
        return $this->data->memberList;
    }

    public function getLocation(){
        return $this->data->location;
    }

    public function getMemberCount(){
        return $this->data->members;
    }

    public function getLeaders(){
        $leaders = [];
        foreach ($this->getMemberList() as $member){
            if($member->role === 'leader' || $member->role === 'coLeader'){
                $leaders[] = $member;
            }
        }
        return $leaders;
    }

}