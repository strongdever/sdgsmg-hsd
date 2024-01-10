<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

<main class="news-page">
    <div class="subpage-firstview">
        <div class="page-label">
            <div class="container">
                <h2 class="eng font-20-800">News</h2>
                <h1 class="head-text font-40-700">お知らせ</h1>
            </div>
        </div>
    </div>

    <?php
        $args = [
            'post_type' => 'news',
            'post_status' => 'publish',
            'paged' => $paged,
            'posts_per_page' => -1,
            'orderby' => 'post_date',
            'order' => 'DESC',
        ];

        $custom_query = new WP_Query( $args );
    ?>

    <?php if( $custom_query->have_posts() ) : ?>
    <div class="news-wrapper">
        <div class="container">
            <ul class="news-list">
                <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                <li>
                    <a class="news-item" href="<?php the_permalink(); ?>">
                        <p class="date font-16-500"><?php echo get_the_time('Y.m.d'); ?></p>
                        <h3 class="title font-16-800"><?php the_title(); ?></h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path
                                d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38966 1.75 8.1989 1.75 7.99999C1.75 7.80107 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z"
                                fill="#1A8C33" />
                        </svg>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>