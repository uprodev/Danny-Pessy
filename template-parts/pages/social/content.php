<?php
if (have_rows('content')) :
  while (have_rows('content')) : the_row();
    if (get_row_layout() == 'podcast_first_screen') :
      get_template_part('template-parts/pages/social/content/podcast-hero', 'none');
    elseif (get_row_layout() == 'instagram_tiktok_youtube_first_screen') :
      get_template_part('template-parts/pages/social/content/socials-hero', 'none');
    elseif (get_row_layout() == 'content') :
      get_template_part('template-parts/pages/social/content/content', 'none');
    endif;
  endwhile;
endif;
