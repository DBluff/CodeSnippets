<?php
/* template name: Posts by Category! */
get_header(); ?>

    <div id="container">
        <div id="content" role="main">

            <?php
            // get all the categories from the database
            $cats = get_categories();

            // loop through the categories
            foreach ($cats as $cat) {
                // setup the category ID
                $cat_id= $cat->term_id;
                // Make a header for the category
                echo "<h2>".$cat->name."</h2>";
                // create a custom WordPress query
                query_posts("cat=$cat_id&posts_per_page=100");
                // start the wordpress loop!
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php // create our link now that the post is setup ?>
                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                    <a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
                    <?php echo '<hr/>'; ?>

                <?php endwhile; endif; // done, our wordpress loop will start again for each category ?>
            <?php } // done the foreach statement ?>

        </div><!-- #content -->
    </div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>