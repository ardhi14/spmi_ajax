<?php

namespace App\Models;

use CodeIgniter\Model;

class Triwulan_model extends Model
{

    // public function getCategory()
    // {
    //     $builder = $this->db->table('category');
    //     return $builder->get();
    // }

    public function getTriwulan()
    {
        $builder = $this->db->table('triwulan');
        $builder->select('*');
        // $builder->join('category', 'category_id = product_category_id', 'left');
        return $builder->get();
    }

    public function saveTriwulan($data)
    {
        $query = $this->db->table('triwulan')->insert($data);
        return $query;
    }

    public function updateTriwulan($data, $id)
    {
        $query = $this->db->table('triwulan')->update($data, array('triwulan_id' => $id));
        return $query;
    }

    public function deleteTriwulan($id)
    {
        $query = $this->db->table('triwulan')->delete(array('triwulan_id' => $id));
        return $query;
    }
}
