<?php get_header(); ?>
<div id="main">
<?php
$querySearch = new WP_Query(array('keyword'=>get_query_var('query')));
if ($querySearch->have_posts()) {
    while ($querySearch->have_posts()) {
        $querySearch->the_post(); ?>
        <div>
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="<?=get_permalink()?>"><?php the_title() ?></a></h2>
                    </div>
                    <div class="meta">
                        <time class="published"><?php the_time( 'F j, Y' ) ?></time>
                        <a href="https://vincent-mancheron.000webhostapp.com/" class="author" target="_blank">
                            <span class="name"><?php the_author() ?></span>
                            <?=get_avatar( get_the_author_meta( 'ID' ), 40 );?>							</a>
                    </div>
                </header>
                <a href="<?=get_permalink()?>" class="image featured"><?php the_post_thumbnail(); ?></a>
                <?php the_excerpt() ?>
                <footer>
                    <ul class="actions">
                        <li><a href="<?=get_permalink()?>" class="button large">Continue Reading</a></li>
                    </ul>
                    <ul class="stats">
                        <li><?php the_category() ?></li>
                        <li><a href="#" class="icon solid fa-heart">28</a></li>
                        <li><?php comments_number() ?></li>
                    </ul>
                </footer>
            </article>
        </div>
    <?php }
} ?>
</div>

<?php
get_footer();
?>