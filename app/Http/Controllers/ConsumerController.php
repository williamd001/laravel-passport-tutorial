<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ConsumerController extends Controller
{
    /*
     * this class is for demonstration purposes only
     * this class represents a first party api consuming the product api
     * */

    const ACCESS_TOKEN_CACHE_TIME = 43800 * 60; // 1 month

    const DOMAIN = 'app'; // this is the container name for nginx


    public function index(): array
    {
        $accessToken = Cache::remember('access_token', self::ACCESS_TOKEN_CACHE_TIME, function () {
            return $this->getAccessToken();
        });

        $response = $this->getProductApiResponse($accessToken);

        //try again with fresh api token - if using short lived tokens (this example is using short lived tokens)
        if ($response->failed()) {
            $accessToken = $this->getAccessToken();

            $response = $this->getProductApiResponse($accessToken);

            if ($response->failed()) abort(401); // something else must be wrong if it fails here

            Cache::put('access_token', $accessToken, self::ACCESS_TOKEN_CACHE_TIME);
        }

        return $response->json();
    }

    private function getProductApiResponse(string $accessToken): Response
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
            'Accept' => 'application/json',
        ])->get('http://' . self::DOMAIN . '/api/products');
    }

    private function getAccessToken(): string
    {
        $url = 'http://' . self::DOMAIN . '/oauth/token'; // this is the name given when running docker ps - https://stackoverflow.com/questions/52246250/docker-web-and-apis-refusing-connection

        $response = Http::post($url, config('services.product_api'));

        if (!isset($response->json()['access_token'])) {
            abort(401);
        }

        return $response->json()['access_token'];
    }
}
