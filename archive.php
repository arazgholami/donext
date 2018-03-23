<?php get_header(); ?>
    <div class="container" id="main-container">
        <span id="archiveTitle">
        <?php if ( have_posts() ) : ?>
                <?php if (is_category()) { ?>
                    <h3>آرشیو نوشته‌ها با موضوع <?php single_cat_title(); ?></h3>
                <?php } elseif( is_tag() ) { ?>
                    <h3>آرشیو نوشته‌ها با تگ <?php single_tag_title(); ?></h3>       
                <?php } elseif (is_day()) { ?>
                    <h3>آرشیو نوشته‌ها در <?php the_time('F jS, Y'); ?></h3>
                <?php } elseif (is_month()) { ?>
                    <h3>آرشیو نوشته‌ها در <?php the_time('F Y'); ?></h3>
                <?php } elseif (is_year()) { ?>
                    <h3>آرشیو نوشته‌ها در سال <?php the_time('Y'); ?></h3>
                <?php } elseif (is_author()) { ?>
                    <h3>آرشیو نویسنده</h3>
                <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <h3>آرشیو</h3>
         <?php } ?> 
         </span>
      <?php while ( have_posts() ) : the_post(); ?>
       <div id="articles">
         <article class="col-sm-4 main">
            <?php echo get_the_post_thumbnail( $post_id,'thumbnail'); ?> 
            <span class="cat"><?php the_category(' ') ?></span>
            <span class="bg"></span>
            <span class="title"><a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a></span>
            <span class="author"><?php the_author_posts_link(); ?> - <?php the_time('j F Y') ?></span>
            <?php // the_content(''); ?>
            <?php //the_permalink() ?>
        </article>         
       </div>
        <?php endwhile; ?>
        <div id="post-nav-container" class="col-md-12">
             <?php posts_nav_link('<button class="btn post-nav">', 'Next', '</button>'); ?><br>
             <?php posts_nav_link('<button class="btn post-nav">', 'Privies', '</button>'); ?>
        </div>
        <?php else : ?>
        <div class="row">
          <span class="col-lg-12" id="no-post" >
              <h2>خطای 404 - یافت نشد!</h2>
              <span>احتمالا چیزی که بدنبالش هستید پاک شده است یا لینک مرجع شما مشکل دارد. لطفا جستجو نمایید.</span>
              <br><br><br><br>
          </span>
        </div>
    <?php endif; ?>
    </div>
<?php get_footer(); ?>