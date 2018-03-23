<?php get_header(); ?>
    <div class="container" id="main-container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
       <div id="articles">
         <article class="single">
            <div class="col-md-12">
                <span class="cat"><?php the_category(', ') ?></span>
                <span class="title"><a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a></span>
                <div class="content col-md-8"> <?php the_content(''); ?></div>
                <?php //the_permalink() ?>
            </div>
            <!-- <div class="col-md-12">
                <h3>احتمالا این مطالب را بپسندید:</h3>
            </div>-->
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