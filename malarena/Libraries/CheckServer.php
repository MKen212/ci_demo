<?php namespace Malarena\Libraries;

Class CheckServer {
  public function serverInfo() {
    echo "<pre>";
    echo "This is using the Malarena\Libraries\CheckServer Class.<br />";
    print_r($_SERVER);
    echo "</pre>";
  }
}

?>