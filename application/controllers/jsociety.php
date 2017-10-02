<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jsociety extends CI_Controller {
    
    public function index()
    {
        $dato['nombreDato']=':D';
        $this->load->view('v_jsociety', $dato);
    }
}
