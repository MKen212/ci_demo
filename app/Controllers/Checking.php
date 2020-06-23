<?php namespace App\Controllers;
// Just used to try out documentation

use CodeIgniter\Controller;

/* Setting Config Variables
$config = new \Config\Pager();
$pageSize = $config->perPage;
*/

class Checking extends Controller {
  public function index() {
    $myVar = new \Malarena\Libraries\CheckServer();
    echo $myVar->serverInfo();
  }
  
}

?>