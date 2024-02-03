<?php namespace App\Controllers;

class Dashboard extends BaseController{
	public function index() {
    $data = [];
    /*  Could use following to check if user is logged in...
    if (!session()->get("isLoggedIn")) {
      return redirect()->to("/login");
    }
    */

    echo view("templates/login_header", $data);
    echo view("users/dashboard");
    echo view("templates/login_footer");
  }
} 
?>