<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Triwulan_model;

class Triwulan extends Controller
{
    public function index()
    {
        $model = new Triwulan_model();
        $data['triwulan']  = $model->getTriwulan()->getResult();
        $data['title']    = 'SPMI ~ Triwulan';
        // $data['category'] = $model->getCategory()->getResult();
        echo view('triwulan/triwulan_view', $data);
    }

    public function save()
    {
        $model = new Triwulan_model();
        $data = array(
            'triwulan_name'        => $this->request->getPost('triwulan_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->saveTriwulan($data);
        return redirect()->to('/triwulan');
    }

    public function update()
    {
        $model = new Triwulan_model();
        $id = $this->request->getPost('triwulan_id');
        $data = array(
            'triwulan_name'        => $this->request->getPost('triwulan_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->updateTriwulan($data, $id);
        return redirect()->to('/triwulan');
    }

    public function delete()
    {
        $model = new Triwulan_model();
        $id = $this->request->getPost('triwulan_id');
        $model->deleteTriwulan($id);
        return redirect()->to('/triwulan');
    }
}
