<?php

namespace App\Models;

use CodeIgniter\Model;

class Tahun_model extends Model
{

    // public function getCategory()
    // {
    //     $builder = $this->db->table('category');
    //     return $builder->get();
    // }

    public function getTahun()
    {
        $builder = $this->db->table('tahun');
        $builder->select('*');
        // $builder->join('category', 'category_id = product_category_id', 'left');
        return $builder->get();
    }

    public function saveTahun($data)
    {
        $query = $this->db->table('tahun')->insert($data);
        return $query;
    }

    public function updateTahun($data, $id)
    {
        $query = $this->db->table('tahun')->update($data, array('tahun_id' => $id));
        return $query;
    }

    public function deleteTahun($id)
    {
        $query = $this->db->table('tahun')->delete(array('tahun_id' => $id));
        return $query;
    }
}
