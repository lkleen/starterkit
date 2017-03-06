<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>      
    </header>
    
    <div class="text wrap">
      <?php snippet('contactform')?>
    </div>
    
  </main>

<?php snippet('footer') ?>