<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $indo=json_decode(file_get_contents('https://covid19.mathdro.id/api/countries/ID'),true);
        $prov=json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'),true);
        
        $data = array(
                        'title' => 'Pusat Informasi Covid-19 Indonesia',
                        'indo'  => $indo,
                        'prov'  => $prov,
                        'isi'   => 'v_home',
                    );
            $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}