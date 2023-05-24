<?php
$social = get_sub_field('youtube__tiktok__instagram__podcast');
?>
<section class="insta">
  <div class="insta__inner container-inner">
    <?php if ($social === 'youtube') : ?>
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-239f4103-f860-4ad7-ac7d-1a8771dae7a5"></div>
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-01294ff6-7aad-4c3b-b3f2-d4c9623ed1b1"></div>
    <?php elseif ($social === 'tiktok') : ?>
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-b8dcdecd-02e8-4d91-93ef-e1dd99c9c058"></div>
    <?php elseif ($social === 'instagram') : ?>
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-fc1b4a36-92aa-4ae8-94cd-f4616fd24ab4"></div>
    <?php elseif ($social === 'podcast') : ?>
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
	  <div class="elfsight-app-9bcb6422-7fab-4c7b-a402-a73b3931a9b9"></div>
    <?php endif; ?>
  </div>
</section>