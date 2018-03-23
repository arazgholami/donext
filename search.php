<?php get_header(); ?>
    <div class="container" id="main-container">
        <span id="archiveTitle">
        <?php if ( have_posts() ) : ?>
                <h3>نتایج جستجو برای <?php echo get_search_query(); ?></h3>
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