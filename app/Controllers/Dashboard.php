<?php namespace App\Controllers;

class Dashboard extends BaseController{
	public function index() {
    $data = [];

    echo view("templates/login_header", $data);
    echo view("users/dashboard");
    echo view("templates/login_footer");
  }
} 
?>