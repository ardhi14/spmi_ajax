<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Poin_model;

class Poin extends Controller
{
    public function index()
    {
        $model = new Poin_model();
        $data['poin']  = $model->getPoin()->getResult();
        // $data['tahun'] = $model->getTahun()->getResult();
        $data['tahun'] = $model->getTahun()->getResult();
        $data['triwulan'] = $model->getTriwulan()->getResult();
        $data['standar'] = $model->getStandar()->getResult();
        $data['parameter'] = $model->getParameter()->getResult();
        $data['pernyataan'] = $model->getPernyataan()->getResult();
        $data['title']    = 'SPMI ~ Poin';
        echo view('poin/poin_view', $data);
    }

    public function save()
    {
        $model = new Poin_model();
        $data = array(
            'poin_capaian'        => $this->request->getPost('poin_capaian'),
            'poin_tahun_id'       => $this->request->getPost('poin_tahun'),
            'poin_triwulan_id'    => $this->request->getPost('poin_triwulan'),
            'poin_standar_id'     => $this->request->getPost('poin_standar'),
            'poin_parameter_id'   => $this->request->getPost('poin_parameter'),
            'poin_pernyataan_id'  => $this->request->getPost('poin_pernyataan'),
        );
        $model->savePoin($data);
        return redirect()->to('/poin');
    }

    public function update()
    {
        $model = new Poin_model();
        $id = $this->request->getPost('poin_id');
        $data = array(
            'poin_capaian'        => $this->request->getPost('poin_capaian'),
            'poin_tahun_id'       => $this->request->getPost('poin_tahun'),
            'poin_triwulan_id'       => $this->request->getPost('poin_triwulan'),
            'poin_standar_id' => $this->request->getPost('poin_standar'),
            'poin_parameter_id' => $this->request->getPost('poin_parameter'),
            'poin_pernyataan_id' => $this->request->getPost('poin_pernyataan'),
        );
        $model->updatePoin($data, $id);
        return redirect()->to('/poin');
    }

    public function delete()
    {
        $model = new Poin_model();
        $id = $this->request->getPost('poin_id');
        $model->deletePoin($id);
        return redirect()->to('/poin');
    }
}
