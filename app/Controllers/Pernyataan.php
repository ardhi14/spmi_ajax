<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pernyataan_model;

class Pernyataan extends Controller
{
    public function index()
    {
        $model = new Pernyataan_model();
        $data['pernyataan']  = $model->getPernyataan()->getResult();
        $data['title']       = 'SPMI ~ Pernyataan';
        // $data['category'] = $model->getCategory()->getResult();
        echo view('pernyataan/pernyataan_view', $data);
    }

    public function save()
    {
        $model = new Pernyataan_model();
        $data = array(
            'pernyataan_name'        => $this->request->getPost('pernyataan_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->savePernyataan($data);
        return redirect()->to('/pernyataan');
    }

    public function update()
    {
        $model = new Pernyataan_model();
        $id = $this->request->getPost('pernyataan_id');
        $data = array(
            'pernyataan_name'        => $this->request->getPost('pernyataan_name'),
            // 'product_price'       => $this->request->getPost('product_price'),
            // 'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->updatePernyataan($data, $id);
        return redirect()->to('/pernyataan');
    }

    public function delete()
    {
        $model = new Pernyataan_model();
        $id = $this->request->getPost('pernyataan_id');
        $model->deletePernyataan($id);
        return redirect()->to('/pernyataan');
    }
}
