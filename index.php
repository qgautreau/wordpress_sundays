

<body>
    <?php
    get_header();
    ?>
    <main>
        <h2>spring summer 2017</h2>
        <div class="container">
            <?php
                $args = array(
                    'posts-per-page' => 20,
                    'orderby' => 'date',
                    'category' => '3, 4, 5',
                );
                $posts = get_posts($args);

               foreach ($posts as $post) {
                   setup_postdata($post);
                   $cats = get_the_category();
                   ?>

                   <article class="<?php echo $cats[0]->slug; ?>">
                   <img src='http://lorempixel.com/150/200' alt='img'>
                   <h4><?php echo $cats[0]->name; ?></h4>
                   <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                   <!-- <h5 class="price"><?php the_meta(); ?></h5>'; -->
                   <?php echo "Price : ".get_field('price'); ?>
                   </article>
                   <?php
               }

            ?>
       </div>
    </main>
    <?php get_footer(); ?>
</body>
