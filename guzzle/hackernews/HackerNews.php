<?php

require 'vendor/autoload.php';
require_once('HackerNewsInterface.php');

use GuzzleHttp\Client;

class HackerNews implements HackerNewsInterface
{

    /*
     * get top 100 hacker news stories
     * @return Array of IDs
     */
    public function get_top_stories_ids()
    {
        $client = new Client(['base_url' => 'https://hacker-news.firebaseio.com']);
        $res = $client->get('/v0/topstories.json');
        return $res->json();
    }

    /*
     * Get Item Data for a Story using ID
     * @return Array of Item Data
     */

    public function get_item_data_by_id($item_id)
    {
        $client = new Client(['base_url' => 'https://hacker-news.firebaseio.com']);
        $item_resource = '/v0/item/' . $item_id . '.json';
        $res = $client->get($item_resource);
        return $res->json();
    }

    /*
     * Get User data for a User using ID
     * @return Array of User Data
     */
    public function get_user_data_by_id($user_id)
    {
        $client = new Client(['base_url' => 'https://hacker-news.firebaseio.com']);
        $res = $client->get('/v0/user/' . $user_id . '.json');
    }

}

#$hn = new HackerNews();
#print_r($hn->get_item_data_by_id( $hn->get_top_stories_ids()[1] ));
