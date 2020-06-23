<?php namespace App\Validation;

use App\Models\UserModel;

class UserRules {
  // Function to Validate Username and Password
  public function validateUser(string $str, string $fields, array $data) {
    $model = new UserModel();
    //Get the user
    $user = $model->where(["email" => $data["email"]])
                  ->first();

    // If user not found, return false
    if(!$user) {
      return false;
    } else {
      // If user found return password_verify check as true or false
      return password_verify($data["password"], $user["Password"]);
    }
  }
}

?>