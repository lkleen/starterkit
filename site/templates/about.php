<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="about_left">
        <?= $page->images() ?>
      </div>
      <div class="about_right">
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
      </div>
        
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
    
  </main>

<?php snippet('footer') ?>