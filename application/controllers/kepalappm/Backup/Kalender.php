<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Kalender extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('kepalappm/kalender_model','km');
    $this->load->library('form_validation');
  }

  public function index(){
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $data = [
        'judul_kegiatan'=>$this->input->post('judul'),
        'tanggal_kegiatan'=>$this->input->post('waktu')
      ];

      $this->km->add($data);
    }

    $data = [
      'data'=>$this->km->agenda()
    ];
    
    $this->template->load('kepalappm/v_kepala','kepalappm/v_kalender',$data);
  }

  public function edit($id){
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $data = [
        'judul_kegiatan'=>$this->input->post('judul'),
        'tanggal_kegiatan'=>$this->input->post('waktu')
      ];

      $this->km->update($id,$data);

      redirect('kepalappm/kalender','refresh');
    }

    $data = [
      'data'=>$this->km->agenda(),
      'detail'=>$this->km->find($id)
    ];

    $this->template->load('kepalappm/v_kepala','kepalappm/v_kalender',$data);
  }

  public function delete($id){
    $this->km->delete($id);

    redirect('kepalappm/kalender','refresh');
  }
}