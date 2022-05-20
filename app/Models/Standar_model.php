<?php

namespace App\Models;

use CodeIgniter\Model;

class Standar_model extends Model
{

    // public function getCategory()
    // {
    //     $builder = $this->db->table('category');
    //     return $builder->get();
    // }

    public function getStandar()
    {
        $builder = $this->db->table('standar');
        $builder->select('*');
        // $builder->join('category', 'category_id = product_category_id', 'left');
        return $builder->get();
    }

    public function saveStandar($data)
    {
        $query = $this->db->table('standar')->insert($data);
        return $query;
    }

    public function updateStandar($data, $id)
    {
        $query = $this->db->table('standar')->update($data, array('standar_id' => $id));
        return $query;
    }

    public function deleteStandar($id)
    {
        $query = $this->db->table('standar')->delete(array('standar_id' => $id));
        return $query;
    }
}
