<?php get_header(); ?>
    <div class="container" id="main-container">
      <div id="articles" class="col-md-12">
       <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(array('col-sm-4','main',)); ?>>
            <?php
                if (is_sticky($post_ID)) {
                    echo '<img src="' . callFirstImg() . '" alt="Cover" id="cover">';
                    echo get_the_post_thumbnail($post_id,'thumbnail');
                }
                else{
                    echo get_the_post_thumbnail($post_id,'thumbnail');
                }
            ?>
            <span class="cat"><?php the_category(' ') ?></span>
            <span class="bg"></span>
            <span class="title"><a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a></span>
            <span class="author"><?php the_author_posts_link(); ?> - <?php the_time('j F Y') ?></span>
            <?php // the_content(''); ?>
            <?php //the_permalink() ?>
        </article>       
        <?php endwhile; ?>
       </div>
       <?php wp_paginate() ?>
       <?php else : ?>
       <div class="col-lg-12" style="text-align:center;direction:rtl;font: normal 2rem mitra;">
          <br><br><br><br>
          <h2 style="font: bold 3rem mitra;">خطای 404 - یافت نشد!</h2>
          <span>احتمالا چیزی که بدنبالش هستید پاک شده است یا لینک مرجع شما مشکل دارد. لطفا جستجو نمایید.</span>
          <br><br><br><br>
       </div>
    <?php endif; ?>
    </div>
    &nbsp;
<?php get_footer(); ?>