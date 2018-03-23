<?php wp_footer(); ?>
    <!--Footer Begin-->
    <footer>
        <div class="container">
            <div class="col-lg-6" id="pages">
                <ol>
                    <li><a href="<?php bloginfo('home'); ?>">نخست</a></li>
                    <?php
                    wp_list_pages(array(
                        'link_after'   => '',
                        'link_before'  => '',
                        'post_type'    => 'page',
                        'post_status'  => 'publish',
                        'show_date'    => '',
                        'sort_column'  => 'menu_order, post_title',
                        'sort_order'   => '',
                        'title_li'     => __('')
                    ));
                    ?>
                </ol>
            </div>
            <div class="col-lg-6" id="iden">
                <ul>
                    <li><h1><?php bloginfo('name'); ?></h1></li>
                    <li><a href="http://graphteam.ir"><img src="<?php echo get_template_directory_uri(); ?>/img/graphteam.png" title="Content by GraphTeam"></a></li>
                    <li><a href="http://alirezagholami.com"><img src="<?php echo get_template_directory_uri(); ?>/img/alirezagholami.png" title="Design/Development by Alireza Gholami"></a></li>
                </ul>
                <span>استفاده‌ی غیرتجاری از محتوا، با ذکر منبع ایرادی ندارد.</span>
            </div>
        </div>
    </footer>
    <!--Footer End-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?ver=9"></script>
</body>
</html>