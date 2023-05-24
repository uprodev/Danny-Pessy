<?php
$shortcode = get_field('shortcode');
$title_form = get_field('title-form');
$forms = get_field('forms');
?>
<section class="contact-me scroll-block">
  <div class="contact-me__inner container-inner">
    <?php if ($title_form) : ?>
      <h3 class="contact-me__title main-title">
        <?php echo  $title_form; ?>
      </h3>
    <?php endif; ?>
    <?php if ($shortcode) : ?>
      <div class="">
        <?php echo do_shortcode($shortcode); ?>
      </div>
    <?php endif; ?>

      <div class="contact-me__form">
      <div class="contact-me__checkboxes">
        <div class="checkboxes_inner">
          <h4 class="contact-me__text">
            Select contact type
          </h4>
          <ul class="contact-me__list">
              <?php foreach ($forms as $form) { $i++ ?>
                <li class="contact-me__line <?= $i == 1 ? 'active' : '' ?> ">
                  <label for="input-<?= $i ?>" class="contact-me__label <?= $i == 1 ? 'active' : '' ?>">
                    <span class="contact-me__text"><?= $form['form'] ?></span>
                    <input value="<?= $i ?>" name="form" id="input-<?= $i ?>" type="checkbox" class="contact-me__check">
                  </label>
                </li>
            <?php } ?>
          </ul>
        </div>
      </div>

      <div class="contact-form">
        <?php
        $i=0;
        foreach ($forms as $form) { $i++; ?>
          <div style="display: <?= $i != 1 ? "none" : 'block'?> "
               data-form="<?= $i ?>">
          <?php echo  $form['iframe']; ?>
          </div>

       <?php } ?>
      </div>
    </div>
  </div>
</section>
