<?php /*Template Name: Blog
Template Post Type: post, page*/
 ?>
 <body>
     <?php get_header(); ?>
     <main>
         <div class="container">
             <?php
                 $args = array(
                     'posts-per-page' => 20,
                     'orderby' => 'date',
                     'category' => '6',
                 );
                 $posts = get_posts($args);

                foreach ($posts as $post) {
                    setup_postdata($post);
                    $cats = get_the_category();
                    ?>

                    <article class="<?php echo $cats[0]->slug; ?>">
                    <img src='http://lorempixel.com/250/200' alt='img'>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <h4><?php the_content(); ?></h4>
                    </article>
                    <?php
                }

             ?>

         </div>
     </main>

     <?php get_footer(); ?>
 </body>
