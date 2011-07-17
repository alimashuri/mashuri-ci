<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!isset($page)){ die();}
$this->load->view('main/top');
$this->load->view($page);
$this->load->view('main/bottom');
