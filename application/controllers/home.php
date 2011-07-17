<?php

class Home extends CI_Controller {

  /*  function __construct()
    {
        parent::Controller();   
    }
    */
    public function index()
    {
		$data['page'] = 'home/home';
		//$data['home'] = 'id=active';
		$this->load->view('home/index', $data);
    }
    
    function about(){
		$data['page'] = 'home/about';
		//$data['home'] = 'id=active';
		$this->load->view('home/index', $data);		
	}
    
    function kontak(){
		$data['page'] = 'home/kontak';
		//$data['home'] = 'id=active';
		$this->load->view('home/index', $data);		
	}
}
