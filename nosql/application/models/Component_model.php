<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Component_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $client = new MongoDB\Client("mongodb://localhost:27017");
        $this->collection = $client->store->components;
    }


    public function create($data)
    {
        $result = $this->collection->insertOne($data);
        return $result->getInsertedId();
    }



    public function read($id = '')
    {
        if ($id) {
            return $this->get_component_by_id($id);
        }

        return $this->collection->find();
    }

    private function get_component_by_id($id)
    {
        return $this->collection->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
        // ->toArray();
    }


    public function updateOne($id, $data)
    {
        return $this->collection->updateOne(
          ['_id' => new MongoDB\BSON\ObjectID($id)],
          ['$set' => $data]
         );
    }



    public function deleteOne($data)
    {
        if (is_array($data)) {
            return $this->collection->deleteOne($data)
                                  ->getDeletedCount();
        }
        return $this->delete_by_id($data);
    }

    private function delete_by_id($id)
    {
        return $this->collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)])
                                ->getDeletedCount();
    }

    public function getElementByKey($data)
    {
        return $this->collection->find($data);
    }
}
