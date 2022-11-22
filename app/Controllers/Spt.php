<?php

namespace App\Controllers;
use App\Models\SptModel;
use Myth\Auth\Models\UserModel;

class Spt extends BaseController
{
    public function index()
    {
        
        if (logged_in()) {
            $data['title'] = 'SPT';
            $spts = new SptModel();
            $data['spts'] = $spts->findAll();
            return view('pages/spt/admin', $data);
        } else {
            return $this->response->redirect(site_url('/'));
        }
    }
    public function create(){
        $data['title'] = 'Tambah SPT';
        return view('pages/spt/add-spt', $data);
    }
    // insert data
    public function store() {
        $spts = new SptModel();
        $data = [
            'owner'             => $this->request->getVar('owner'),
            'address'           => $this->request->getVar('address'),
            'applicant_date'    => $this->request->getVar('applicant_date'),
            'officer'           => $this->request->getVar('officer')
        ];
        $spts->insert($data);
        return $this->response->redirect(site_url('/spt'));
    }
    public function edit($id = null){
        $spts = new SptModel();
        $data['title'] = 'Edit SPT';
        $data['spts'] = $spts->find($id);
        return view ('pages/spt/edit-spt', $data);
    }
    // update user data
    public function update($id){
        $spts = new SptModel();
        $spts->find($id);
        $data = [
            'owner'             => $this->request->getVar('owner'),
            'address'           => $this->request->getVar('address'),
            'applicant_date'    => $this->request->getVar('applicant_date'),
            'officer'           => $this->request->getVar('officer')
        ];
        $spts->update($id, $data);
        return $this->response->redirect(site_url('/spt'));
    }
    
    // delete user
    public function delete($id = null){
        $spts = new SptModel();
        $data['spts'] = $spts->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/spt'));
    }    
}

