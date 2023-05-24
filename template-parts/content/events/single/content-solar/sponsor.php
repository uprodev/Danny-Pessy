<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$image = get_sub_field('image');
$button = get_sub_field('button');
$bg = get_sub_field('bg');
?>

<section class="sponsor">
    <div class="section_decor">
        <img src="<?= $bg['url'] ?>" alt="">
    </div>

    <div class="sponsor_inner">
        <div class="container-inner">
            <div class="inner_content">
                <div class="left_part">
                    <img src="<?= $image['url'] ?>" alt="">
                </div>
                <div class="right_part">
                    <div class="content_wrapper">
                        <h3 class="main-title title_gradient"><?= $title ?></h3>
                        <div class="content">
                            <p>
                                <strong><?= $subtitle ?></strong>
                            </p>
                        </div>
                        <div class="btn_wrapper">
                            <a href="<?= $button['url'] ?>" class="btn-gold"><?= $button['title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>