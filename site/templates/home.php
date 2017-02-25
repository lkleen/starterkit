<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->images() ?>
      <?= $page->text()->kirbytext() ?>
    </div>
  
  </main>

<?php snippet('footer') ?>