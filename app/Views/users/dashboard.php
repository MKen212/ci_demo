<!-- Dashboard Page -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Hello, <?= session()->get("firstName") ?> </h1>
      <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
      ?>
    </div>
  </div>
</div>