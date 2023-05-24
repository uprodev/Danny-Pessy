<?php
if (get_post_type() === 'page') :
  get_template_part('template-parts/content/page/content', 'none');
elseif (get_post_type() === 'post') :
elseif (get_post_type() === 'events') :
  if (is_single()) :
    get_template_part('template-parts/content/events/single/content', 'none');
  else :
    get_template_part('template-parts/content/services/archive/content', 'none');
  endif;
endif;
