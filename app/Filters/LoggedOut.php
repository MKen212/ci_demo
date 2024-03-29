<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoggedOut implements FilterInterface {
  public function before(RequestInterface $request) {
    if (!session()->get("isLoggedIn")) {
      return redirect()->to("/login");
    }
  }

  //--------------------------------------------------------------------

  public function after(RequestInterface $request, ResponseInterface $response) {
    // Do something here
  }

}
