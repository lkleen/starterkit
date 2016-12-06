<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
	<?php foreach($site->languages() as $language): ?>
    <li class="menu-item-language"<?= e($site->language() == $language, ' is-active') ?>>
      <a href="<?php echo $page->url($language->code()) ?>">
        <?php echo html($language->name()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>