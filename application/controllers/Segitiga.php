<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Segitiga extends CI_Controller {

	public function index()
	{	
		$this->load->view('segitiga');
	}

	public function hitung(){
        $alas =  $this->input->post("alas"); 
        $tinggi =  $this->input->post("tinggi"); 
        $luas = 0.5 * (int) $alas * (int) $tinggi; 
        $data = array();
        $data["luas_segitiga"] = $luas;
        $this->load->view('segitiga', $data);
    }
}
