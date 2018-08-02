<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Events\UserSearched;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Record search activity
        if ($request['keyword'] != null) {
            event(new UserSearched($request));
        }

        return view('home', [
            'tweets' => $this->search($request['keyword']),
            'activities' => $request->user()->activities()->latest()->get()
        ]);
    }

    /**
     * Search API endpoint with keyword.
     *
     * @return \Illuminate\Http\Response
     */
    private function search($keyword)
    {
        $client = new Client();
        $response = $client->get($this->fromEndpoint($keyword), $this->withHeaders());

        $body = $response->getBody();
        $data = json_decode($body->getContents(), true);

        return $data['statuses'];
    }

    /**
     * Craft query string.
     *
     * @return String
     */
    private function fromEndpoint($keyword)
    {
        return 'http://twitter-like-search-api-server.herokuapp.com/api/1.1/search/tweets.json?q=' . $keyword;
    }

    /**
     * Http request headers with Access Token from API Server.
     *
     * @return Array
     */
    private function withHeaders()
    {
        return [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . env('TLSA_ACCESS_TOKEN')
            ]
        ];
    }
}
