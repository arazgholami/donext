<?php

  add_theme_support('post-thumbnails',true);

    //Active Footer widgets
	if (function_exists('register_sidebar'))
	 {
        register_sidebar(
            array(
                'id' => 'sidebar',
                'name' => __( 'سایدبار' ),
                'description' => __( 'ابزارک‌های سایدبار' ),
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '',
                'after_title' => ''
            ));
    }

	//get MoreLink on search page result
	function new_excerpt_more($more) {
	global $post;
	return '... <a href="'. get_permalink($post->ID) . '">(ادامه مطلب)</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');


    //get MoreLink on search page result
    function callFirstImg() {
      global $post, $posts;
      $first_img = '';
      ob_start();
      ob_end_clean();
      $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
      $first_img = $matches [1] [0];

      if(empty($first_img)){ //Defines a default image
        $first_img = "/images/default.jpg";
      }
      return $first_img;
    }

?>