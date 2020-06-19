<?php namespace App\Controllers;

class Users extends BaseController{
	public function index() {
    helper(["form"]);
    $data = [];

    echo view("templates/login_header", $data);
    echo view("users/login");
    echo view("templates/login_footer");

  }
  
  public function register() {
    helper(["form"]);
    $data = [];

    echo view("templates/login_header", $data);
    echo view("users/register");
    echo view("templates/login_footer");
  }
}