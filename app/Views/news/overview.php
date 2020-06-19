<!-- News Overview View -->
<!-- <h2><?= esc($title) ?></h2>  < Included in Header! -->

<?php if (!empty($news) && is_array($news)) : ?>

  <?php foreach ($news as $newsItem) : ?>
    <h3><?= esc($newsItem["title"]); ?></h3>
    <div class="main">
      <?= esc($newsItem["body"]); ?>
    </div>
    <p><a href="/news/<?= esc($newsItem["slug"], "url"); ?>">View article</a></p>
  <?php endforeach; ?>

<?php else : ?>
  
  <h3>No News</h3>
  <p>Unable to find any news for you today.</p>

<?php endif; ?>