<?php /*Template Name: Produit
Template Post Type: post, page*/
 ?>

<?php
    get_header();
?>

<body>
    <header>

    </header>
    <main>
        <div class="container">
            <article class="product">
                <img src="http://lorempixel.com/200/150/abstract" alt="product image">
                <h3><?php the_title(); ?></h3>
                <p><?php echo get_post_field('post_content'); ?></p>
                <h4><?php the_meta(); ?></h4>
                <button type="button" name="button">Ajouter au panier</button>
            </article>
        </div>
    </main>
    <?php
        get_footer();
     ?>
</body>
