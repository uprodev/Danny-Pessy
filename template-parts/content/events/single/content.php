<?php
if (have_rows('content')) :
  while (have_rows('content')) : the_row();
    if (get_row_layout() == 'first_screen_setter') :
      get_template_part('template-parts/content/events/single/content-tour/setter-main', 'none');
    elseif (get_row_layout() == 'testimonials_setter') :
      get_template_part('template-parts/content/events/single/content-tour/setter-testimonials', 'none');
    elseif (get_row_layout() == 'cities_setter') :
      get_template_part('template-parts/content/events/single/content-tour/setter-cities', 'none');
    elseif (get_row_layout() == 'tour_setter') :
      get_template_part('template-parts/content/events/single/content-tour/setter-tour', 'null');
    elseif (get_row_layout() == 'articles_setter') :
      get_template_part('template-parts/content/events/single/content-tour/setter-articles', 'none');
    elseif (get_row_layout() == 'review_setter') :
      get_template_part('template-parts/content/events/single/content-tour/setter-review', 'none');
    elseif (get_row_layout() == 'tickets') :
      get_template_part('template-parts/content/events/single/content-tour/setter-tickets', 'none');
    elseif (get_row_layout() == 'sold_out') :
      get_template_part('template-parts/content/events/single/content-tour/setter-sold-out', 'none');

    endif;
  endwhile;
elseif (have_rows('content-solar')) :
  while (have_rows('content-solar')) : the_row();
    if (get_row_layout() == 'hero') :
      get_template_part('template-parts/content/events/single/content-solar/solar-hero', 'none');
    elseif (get_row_layout() == 'location') :
      get_template_part('template-parts/content/events/single/content-solar/solar-location', 'none');
    elseif (get_row_layout() == 'features') :
      get_template_part('template-parts/content/events/single/content-solar/solar-features', 'none');
    elseif (get_row_layout() == 'last_years_trip') :
      get_template_part('template-parts/content/events/single/content-solar/solar-last-years-trip', 'none');
    elseif (get_row_layout() == 'projects') :
      get_template_part('template-parts/content/events/single/content-solar/solar-projects', 'none');
    elseif (get_row_layout() == 'days') :
      get_template_part('template-parts/content/events/single/content-solar/solar-days', 'none');
    elseif (get_row_layout() == 'accommodations') :
      get_template_part('template-parts/content/events/single/content-solar/solar-accommodations', 'none');
    elseif (get_row_layout() == 'video') :
      get_template_part('template-parts/content/events/single/content-solar/solar-video', 'none');
    elseif (get_row_layout() == 'sold_out') :
      get_template_part('template-parts/content/events/single/content-solar/solar-sold-out', 'none');
    elseif (get_row_layout() == 'sponsor') :
        get_template_part('template-parts/content/events/single/content-solar/sponsor', 'none');

    endif;
  endwhile;
endif;
