<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tahun_model;

class Tahun extends Controller
{
    public function index()
    {
        $model = new Tahun_model();
        $data['tahun']  = $model->getTahun()->getResult();
        $data['title']  = 'SPMI ~ Tahun';
        // $data['category'] = $model->getCategory()->getResult();
        echo view('tahun/tahun_view', $data);
    }

    public function save()
    {
        $model = new Tahun_model();
        $data = array(
            'tahun_name'        => $this->request->getPost('tahun_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->saveTahun($data);
        session()->setFlashdata("success", "Berhasil Menambah Data Tahun");
        return redirect()->to('/tahun');
    }

    public function update()
    {
        $model = new Tahun_model();
        $id = $this->request->getPost('tahun_id');
        $data = array(
            'tahun_name'        => $this->request->getPost('tahun_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->updateTahun($data, $id);
        return redirect()->to('/tahun');
    }

    public function delete()
    {
        $model = new Tahun_model();
        $id = $this->request->getPost('tahun_id');
        $model->deleteTahun($id);
        session()->setFlashdata("success", "Berhasil Menambah Data Tahun");
        return redirect()->to('/tahun');
    }

    public function ajaxSearch()
    {
        helper(['form', 'url']);

        $data = [];

        $db      = \Config\Database::connect();
        $builder = $db->table('tahun');

        $query = $builder->like('tahun_name', $this->request->getVar('q'))
            ->select('tahun_id, tahun_name as text')
            ->limit(10)->get();
        $data = $query->getResult();

        echo json_encode($data);
    }
}
