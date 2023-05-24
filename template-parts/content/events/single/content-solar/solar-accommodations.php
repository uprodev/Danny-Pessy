<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$images = get_sub_field('images');
if ($images) :
?>
  <section class="accommodations">
    <div class="accommodations__inner container-inner">
      <?php if ($title) : ?>
        <h3 class="accommodations__title main-title">
          <?php echo $title; ?>
        </h3>
      <?php endif; ?>
      <?php if ($text) : ?>
        <p class="accommodations__subtitle waystohelp__subtitle">
          <?php echo $text; ?>
        </p>
      <?php endif; ?>
      <div class="accommodations__content">
        <?php foreach ($images as $image) : ?>
          <div class="accommodations__image">
            <div class="image">
              <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="img" class="accommodations__img">
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>