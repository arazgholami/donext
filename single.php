<?php get_header(); ?>
<header class="innerheader">
	<div class="container innertitle">
		<h1><?php echo get_the_title(); ?></h1>
		<p><?php bloginfo('description'); ?></p>
	</div>
</header>
	<div class="jumbotron blog">
		<div class="container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-10">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            <br>
            <?php the_category(' ') ?>
          </div>
          <div class="col-md-3"></div>
        </div>
        <div class="row">
          <div class="col-md-3">
            نوشته‌شده توسط <br>
            <?php the_author_posts_link(); ?>
          </div>
          <div class="col-md-10">
            <?php the_content(''); ?>
            <hr>
            <?php comments_template(); ?>
          </div>
          <div class="col-md-3">
            <?php the_tags('<span class="content-posts-bottom-tags">','</span><span class="content-posts-bottom-tags">',''); ?>
          </div>
        </div>


  				<!-- <?php echo get_avatar( get_the_author_email(),'86' ); ?>
  				<?php the_author_description(); ?> -->

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
	</div>
<?php wp_footer(); ?>
<?php get_footer(); ?>
