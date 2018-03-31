<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mongo_core extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $client = new MongoDB\Client("mongodb://localhost:27017");
        $collection = '';
    }
}
