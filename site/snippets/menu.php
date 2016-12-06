<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
  <ul class="navigation">
	<?php foreach($site->languages() as $language): ?>
    <li class="menu-item<?= e($site->language() == $language, ' is-active')?>" >
      <a href="<?php echo $page->url($language->code()) ?>">
        <?php echo html($language->code()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>