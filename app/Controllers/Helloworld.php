<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Helloworld extends Controller {

  public function index() {
    echo "Hello World";
  }

  public function flat() {
    echo "I am not flat";
  }

  public function shoes($sandals, $id) {
    echo "Sandals: ${sandals}<br />";
    echo "ID: ${id}<br />";
    
    
    
  }
}
?>