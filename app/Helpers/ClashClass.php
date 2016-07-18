<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class ClashClass
{
    protected $accessToken;
    protected $httpClient;

    public function __construct()
    {
        $this->setAccessToken();
    }

    public function setAccessToken()
    {
        $this->accessToken = env('CLASH_KEY', '');
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function baseUrl()
    {
        return 'https://api.clashofclans.com/v1/';
    }

    public function setupUrl($url)
    {
        $response = $this->getHttpClient()
            ->request('GET', $url, ['headers' => [
                'Accept' => 'application/json',
                'authorization' => 'Bearer ' .
                    $this->getAccessToken()]]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getHttpClient()
    {
        if ($this->httpClient === null) {
            $this->httpClient = new Client(['base_uri' => $this->baseUrl()]);
        }
        return $this->httpClient;
    }

    public function getLeagues()
    {
        $response = $this->setupUrl('leagues');
        return new League($response);
    }

    public function getClans($input)
    {
        /*
		* $input array can have these indexes:
		* name (string)
		* warFrequency (string, {"always", "moreThanOncePerWeek", "oncePerWeek", "lessThanOncePerWeek", "never", "unknown"})
		* locationId (integer)
		* minMembers (integer)
		* maxMembers (integer)
		* minClanPoints (integer)
		* minClanLevel (integer)
		* limit (integer)
		* after (integer)
		* before (integer)
		For more information, take a look at the official documentation: https://developer.clashofclans.com/#/documentation
		*/
        $input = is_array($input) ? $input : ['name' => $input];
        $response = $this->setupUrl('clans?' . http_build_query($input));
        return new Clan($response);
    }

    public function getClan($id)
    {
        $response = $this->setupUrl('clans/' . urlencode('#' . $id));
        return new Clan($response);
    }

    public function getLocations()
    {
        $response = $this->setupUrl('locations');
        return new Location($response);
    }

    public function getLocation($id)
    {
        $response = $this->setupUrl('locations/' . $id);
        return new Location($response);
    }
}