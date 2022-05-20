<?php

namespace App\Models;

use CodeIgniter\Model;

class Poin_model extends Model
{

    public function getTahun()
    {
        $builder = $this->db->table('tahun');
        return $builder->get();
    }
    public function getTriwulan()
    {
        $builder = $this->db->table('triwulan');
        return $builder->get();
    }
    public function getStandar()
    {
        $builder = $this->db->table('standar');
        return $builder->get();
    }
    public function getParameter()
    {
        $builder = $this->db->table('parameter');
        return $builder->get();
    }
    public function getPernyataan()
    {
        $builder = $this->db->table('pernyataan');
        return $builder->get();
    }
    public function getPoin()
    {
        $builder = $this->db->table('poin');
        $builder->select('*');
        $builder->join('tahun', 'tahun_id = poin_tahun_id', 'left');
        $builder->join('triwulan', 'triwulan_id = poin_triwulan_id', 'left');
        $builder->join('standar', 'standar_id = poin_standar_id', 'left');
        $builder->join('parameter', 'parameter_id = poin_parameter_id', 'left');
        $builder->join('pernyataan', 'pernyataan_id = poin_pernyataan_id', 'left');
        return $builder->get();
    }

    public function savePoin($data)
    {
        $query = $this->db->table('poin')->insert($data);
        return $query;
    }

    public function updatePoin($data, $id)
    {
        $query = $this->db->table('poin')->update($data, array('poin_id' => $id));
        return $query;
    }

    public function deletePoin($id)
    {
        $query = $this->db->table('poin')->delete(array('poin_id' => $id));
        return $query;
    }
}
