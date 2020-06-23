<?php namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController{
	public function index() {
    helper(["form"]);
    $data = [];

    if($this->request->getMethod() == "post") {
      // Form Validation Rules - only run on "post"
      $rules = [
        "email" => "required|min_length[6]|max_length[50]|valid_email",
        "password" => "required|min_length[6]|max_length[255]|validateUser[email, password]",
      ];

      $errors = [
        "password" => [
          "validateUser" => "Incorrect Email or Password."
        ],
      ];

      // Form Validation / Save
      if (!$this->validate($rules, $errors)) {
        $data["validation"] = $this->validator;
      } else {
        $model = new UserModel();
        $user = $model->where(["email" => $this->request->getVar("email")])
                      ->first();
        $this->setUserSession($user);
        return redirect()->to("dashboard");
      }
    }

    echo view("templates/login_header", $data);
    echo view("users/login");
    echo view("templates/login_footer");
  }

  private function setUserSession($user) {
    $data = [
      "id" => $user["ID"],
      "firstName" => $user["FirstName"],
      "lastName" => $user["LastName"],
      "email" => $user["Email"],
      "isLoggedIn" => true,
    ];
    session()->set($data);
    return true;
  }
    
  public function register() {
    helper(["form"]);
    $data = [];

    if($this->request->getMethod() == "post") {
      // Form Validation Rules - only run on "post"
      $rules = [
        "firstName" => "required|min_length[3]|max_length[20]",
        "lastName" => "required|min_length[3]|max_length[20]",
        "email" => "required|min_length[6]|max_length[50]|valid_email|is_unique[users.Email]",
        "password" => "required|min_length[6]|max_length[255]",
        "password_confirm" => "matches[password]"
      ];

      // Form Validation / Save
      if (!$this->validate($rules)) {
        $data["validation"] = $this->validator;
      } else {
        $model = new UserModel();

        $newUser = [
          "FirstName" => $this->request->getVar("firstName"),
          "LastName" =>  $this->request->getVar("lastName"),
          "Email" =>  $this->request->getVar("email"),
          "Password" =>  $this->request->getVar("password"),
        ];
        $model->save($newUser);
        session()->setFlashdata("success", "New User '" . $newUser["Email"] . "' successfully registered.");
        return redirect()->to("/login");
      }
    }

    echo view("templates/login_header", $data);
    echo view("users/register");
    echo view("templates/login_footer");
  }
}