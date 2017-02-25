<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/index.css') ?>

</head>
<body>

  <nav class="navbar">
    <div class="grid">

      <?php snippet('menu') ?>

      <div class="branding column">
        <a href="<?= url() ?>" rel="home">Lars Kleen</a>
      </div>

    </div>
  </nav>
