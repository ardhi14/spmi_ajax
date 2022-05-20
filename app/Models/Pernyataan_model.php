<?php

namespace App\Models;

use CodeIgniter\Model;

class Pernyataan_model extends Model
{

    // public function getCategory()
    // {
    //     $builder = $this->db->table('category');
    //     return $builder->get();
    // }

    public function getPernyataan()
    {
        $builder = $this->db->table('pernyataan');
        $builder->select('*');
        // $builder->join('category', 'category_id = product_category_id', 'left');
        return $builder->get();
    }

    public function savePernyataan($data)
    {
        $query = $this->db->table('pernyataan')->insert($data);
        return $query;
    }

    public function updatePernyataan($data, $id)
    {
        $query = $this->db->table('pernyataan')->update($data, array('pernyataan_id' => $id));
        return $query;
    }

    public function deletePernyataan($id)
    {
        $query = $this->db->table('pernyataan')->delete(array('pernyataan_id' => $id));
        return $query;
    }
}
