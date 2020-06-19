<?php namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

// New News Controller
class News extends Controller {
  // What gets returned if News/Index is requested
  public function index() {
    $model = new NewsModel();

    $data = [
      "news"  => $model->getNews(),
      "title" => "News Archive"
    ];
    
    echo view("templates/header", $data);
    echo view("news/overview", $data);
    echo view("templates/footer", $data);
  }

  // What gets returned if News/View(Slug) is requested
  public function view($slug = null) {
    $model = new NewsModel();

    $data["news"] = $model->getNews($slug);
    if (empty($data["news"])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException("Cannot find the news item: " . $slug);
    }
    $data["title"] = $data["news"]["title"];

    echo view("templates/header", $data);
    echo view("news/view", $data);
    echo view("templates/footer", $data);
  }

  // Handling the Create() form view
  public function create() {
    $model = new NewsModel();

    if (!$this->validate([
      "title" => "required|min_length[3]|max_length[255]",
      "body"  => "required",
    ])) {  // Validate the input, and if not valid show the form
      echo view("templates/header", ["title" => "Create a news article"]);
      echo view("news/create");
      echo view("templates/footer");
    } else {  // Form has valid data so load into database
      $model->save([
        "title" => $this->request->getVar("title"),
        "slug"  => url_title($this->request->getVar("title"), "-", TRUE),
        "body"  => $this->request->getVar("body"),
      ]);
      echo view("news/success");
    }
  }
}
?>