<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
  protected $table = "users";
  protected $primaryKey = "ID";
  protected $allowedFields = ["FirstName", "LastName", "Email", "Password"];
  protected $beforeInsert = ["beforeInsert"];
  protected $beforeUpdate = ["beforeUpdate"];

  // Function to run before inserting $data, e.g. password hashing
  protected function beforeInsert(array $data) {
    $data = $this->passwordHash($data);
    return $data;
  }

  // Function to run before updating $data
  protected function beforeUpdate(array $data) {
    $data = $this->passwordHash($data);
    return $data;
  }

  // Password Hashing Function using ARGON2ID Hashing
  protected function passwordHash(array $data) {
    if(isset($data["data"]["Password"])) {
      $data["data"]["Password"] = password_hash($data["data"]["Password"], PASSWORD_ARGON2ID);
    }
    return $data;
  }
}
?>