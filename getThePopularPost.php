<?php
function getThePopularPosts() {
    $arguments = array(
        'post_type'      =>  'post',
        'posts_per_page' =>  5,
        'date_query' => array(
            'after' => '2 months ago',
        ),
        'meta_query'	=> array(
            'key'		=> '_post_views_count'
        ),
        'meta_key'     => '_post_views_count',
        'orderby'        => 'meta_value_num',
        'order'          => 'DESC',
        'post_status'    => 'publish'
    );

    $popular_posts = new WP_Query ( $arguments );

    return $popular_posts;
}