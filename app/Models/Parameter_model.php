<?php

namespace App\Models;

use CodeIgniter\Model;

class Parameter_model extends Model
{

    // public function getCategory()
    // {
    //     $builder = $this->db->table('category');
    //     return $builder->get();
    // }

    public function getParameter()
    {
        $builder = $this->db->table('parameter');
        $builder->select('*');
        // $builder->join('category', 'category_id = product_category_id', 'left');
        return $builder->get();
    }

    public function saveParameter($data)
    {
        $query = $this->db->table('parameter')->insert($data);
        return $query;
    }

    public function updateParameter($data, $id)
    {
        $query = $this->db->table('parameter')->update($data, array('parameter_id' => $id));
        return $query;
    }

    public function deleteParameter($id)
    {
        $query = $this->db->table('parameter')->delete(array('parameter_id' => $id));
        return $query;
    }
}
