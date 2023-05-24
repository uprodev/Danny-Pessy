<?php
$image = get_field('banner');
if ($image) :
?>
  <section class="authentic">
    <div class="authentic__image">
      <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="img" class="authentic__img">
    </div>
  </section>
<?php endif; ?>