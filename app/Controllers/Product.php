<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product_model;

class Product extends Controller
{
    public function index()
    {
        $model = new Product_model();
        $data['product']  = $model->getProduct()->getResult();
        $data['category'] = $model->getCategory()->getResult();
        $data['title']    = 'SPMI ~ Product';
        echo view('product_view', $data);
    }

    public function save()
    {
        $model = new Product_model();
        $data = array(
            'product_name'        => $this->request->getPost('product_name'),
            'product_price'       => $this->request->getPost('product_price'),
            'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->saveProduct($data);
        return redirect()->to('/product');
    }

    public function update()
    {
        $model = new Product_model();
        $id = $this->request->getPost('product_id');
        $data = array(
            'product_name'        => $this->request->getPost('product_name'),
            'product_price'       => $this->request->getPost('product_price'),
            'product_category_id' => $this->request->getPost('product_category'),
        );
        $model->updateProduct($data, $id);
        return redirect()->to('/product');
    }

    public function delete()
    {
        $model = new Product_model();
        $id = $this->request->getPost('product_id');
        $model->deleteProduct($id);
        return redirect()->to('/product');
    }
    public function ajaxSearch()
    {
        helper(['form', 'url']);

        $data = [];

        $db      = \Config\Database::connect();
        $builder = $db->table('category');

        $query = $builder->like('name', $this->request->getVar('q'))
            ->select('id, name as text')
            ->limit(10)->get();
        $data = $query->getResult();

        echo json_encode($data);
    }
}
