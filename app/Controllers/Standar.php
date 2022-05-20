<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Standar_model;

class Standar extends Controller
{
    public function index()
    {
        $model = new Standar_model();
        $data['standar']  = $model->getStandar()->getResult();
        $data['title']    = 'SPMI ~ Standar';
        // $data['category'] = $model->getCategory()->getResult();
        echo view('standar/standar_view', $data);
    }

    public function save()
    {
        $model = new Standar_model();
        $data = array(
            'standar_name'        => $this->request->getPost('standar_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->saveStandar($data);
        return redirect()->to('/standar');
    }

    public function update()
    {
        $model = new Standar_model();
        $id = $this->request->getPost('standar_id');
        $data = array(
            'standar_name'        => $this->request->getPost('standar_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->updateStandar($data, $id);
        return redirect()->to('/standar');
    }

    public function delete()
    {
        $model = new Standar_model();
        $id = $this->request->getPost('standar_id');
        $model->deleteStandar($id);
        return redirect()->to('/standar');
    }
}
