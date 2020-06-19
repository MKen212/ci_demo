<?php namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;

// New Pages Controller
class Pages extends Controller {
  // What gets returned if Pages/Index is requested
  public function index() {
    return view("welcome_message");
  }

  // What gets returned if Pages/View(Page) is requested
  public function view($page = "home") {
    if (!is_file(APPPATH . "/Views/pages/" . $page . ".php")) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data["title"] = ucfirst($page);  // Capitalise First Letter

    // Logging
    $data["tokenName"] = getenv("tokenName");
    if (env("tokenPrice") == "") {
      $info = [
        "id" => "myID",
        "ip_address" => $this->request->getIPAddress()
      ];
      log_message("warning", "Token Price Not Set. UserID: {id} & IP:{ip_address}", $info);
    }
    $data["tokenPrice"] = env("tokenPrice", "1");

    // Error Handling
    try {
      $model = new NewsModel();
      $newsID = $model->getID("1");
    } catch (\Exception $err) {
      log_message("error", "[ERROR] {exception}", ["exception" => $err]);
    }

    echo view("templates/header", $data);
    echo view("pages/" . $page, $data);
    echo view("templates/footer", $data);
    echo anchor("https://ci-news", "Click Here");
  }
}
?>