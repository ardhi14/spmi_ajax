<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Parameter_model;

class Parameter extends Controller
{
    public function index()
    {
        $model = new Parameter_model();
        $data['parameter']  = $model->getParameter()->getResult();
        $data['title']      = 'SPMI ~ Parameter';
        // $data['category'] = $model->getCategory()->getResult();
        echo view('parameter/parameter_view', $data);
    }

    public function save()
    {
        $model = new Parameter_model();
        $data = array(
            'parameter_name'        => $this->request->getPost('parameter_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->saveParameter($data);
        return redirect()->to('/parameter');
    }

    public function update()
    {
        $model = new Parameter_model();
        $id = $this->request->getPost('parameter_id');
        $data = array(
            'parameter_name'        => $this->request->getPost('parameter_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->updateParameter($data, $id);
        return redirect()->to('/parameter');
    }

    public function delete()
    {
        $model = new Parameter_model();
        $id = $this->request->getPost('parameter_id');
        $model->deleteParameter($id);
        return redirect()->to('/parameter');
    }
}
