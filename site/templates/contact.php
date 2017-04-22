<?php snippet('header') ?>

  <main class="main" role="main">

    <h1>
      <header class="wrap">
      <?php echo $page->title()->html() ?>
      </header>
    </h1>

    <div class="text wrap">
      <section id="contactform">

        <?php if($alert): ?>
          <div class="contactform-alert">
            <ul>
              <?php foreach($alert as $message): ?>
              <li><?php echo html($message) ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        <?php endif ?>
        
        <?php
	        // fill values with previously posted form data  
        	$name  = isset($GLOBALS['_POST']['name'])  ? $GLOBALS['_POST']['name']  : "";
        	$email = isset($GLOBALS['_POST']['email']) ? $GLOBALS['_POST']['email'] : "";
        	$text  = isset($GLOBALS['_POST']['text'])  ? $GLOBALS['_POST']['text']  : "";
        ?>

        <form method="post">

          <div class="contactform-field">
            <label class="contactform-label" for="contactform-name">Name <abbr title="required">*</abbr></label>
            <input class="contactform-input" type="text" id="contactform-name" name="name" value="<?php echo $name;?>"/>
          </div>

          <div class="contactform-field">
            <label class="contactform-label" for="contactform-email">Email <abbr title="required">*</abbr></label>
            <input class="contactform-input" type="text" id="contactform-email" name="email" value="<?php echo $email;?>" required/>
          </div>

          <div class="contactform-field">
            <label class="contactform-label" for="contactform-text">Text <abbr title="required">*</abbr></label>
            <textarea class="contactform-input" name="text" id="contactform-text"><?php echo $text;?></textarea>
          </div>

          <input class="contactform-button" type="submit" name="submit" value="Submit">

        </form>

      </section>
    </div>

  </main>

<?php snippet('footer') ?>