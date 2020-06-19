<!-- Create Individual News Form -->
<!-- <h2><?= esc($title) ?></h2>  < Included in Header! -->

<!-- Display any form validation errors -->
<?= \Config\Services::validation()->listErrors(); ?>

<form action="/news/create" method="POST">
  <!-- Hidden Field with CSRF Token to protect against attacks -->
  <?= csrf_field(); ?>
  
  <label for="title">Title: </label>
  <input type="text" name="title" id="title" />
  <br /><br />

  <label for="body">Text: </label>
  <textarea name="body" id="body" cols="30" rows="5"></textarea>
  <br /><br />

  <input type="submit" name="submit" value="Create News Article" />
  <br /><br />

</form>
