
<?php
    get_header();
?>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="">catalog</a></li>
                    <li><a href="">about us</a></li>
                    <li><a href="">stories</a></li>
                    <li><a href="">blog</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <i class="fa fa-search" aria-hidden="true"></i>
                   <div class="form-group" hidden="true">
                     <input type="text" class="form-control" placeholder="Search">
                     <button type="submit" class="btn btn-default">Submit</button>
                   </div>
                </form>
            </div>
        </nav>
        <section>
            <h1>sundays</h1>
            <p>we craft ocean friendly apparel</p>
            <button class="btn btn-default tocatalog">browse our products</button>
        </section>
    </header>
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
                   <h4><a href="#"><?php the_title(); ?></a></h4>
                   <h5 class="price"><?php the_meta(); ?></h5>';
                   </article>
                   <?php
               }

            ?>
       </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <section>
                        <nav id="quicklinks">
                            <h4>quick links</h4>
                            <li><a href="">about us</a></li>
                            <li><a href="">blog</a></li>
                            <li><a href="">careers</a></li>
                        </nav>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <section>
                        <h4>contact us</h4>
                        <nav id="contact">
                            <li><i class="fa fa-twitter" aria-hidden="true"></i><a href="http://twitter.com" target="_blank">@californiatheme</a></li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="#">support@smallvictories.co</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +1 917 (123) 4567</li>
                            </nav>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <section>
                        <h4>newsletter</h4>
                        <input type="text" placeholder="You email...">
                        <button>ok</button>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <section>
                        <h4>follow us</h4>
                        <nav id="socialnav">
                            <li><i class="fa fa-pinterest-square" aria-hidden="true"></i>
                            <a href="http://pinterest.com" target="_blank">pinterest</a></li>
                            <li><i class="fa fa-instagram" aria-hidden="true"></i>
                            <a href="http://instagram.com" target="_blank">instagram</a></li>
                            <li><i class="fa fa-vimeo-square" aria-hidden="true"></i>
                            <a href="http://vimeo.com" target="_blank">vimeo</a></li>
                        </nav>
                    </section>
                </div>
            </div>
        </div>
    </footer>
    <script src="static/external/jquery/dist/jquery.min.js"></script>
    <script src="static/js/script.js"></script>
</body>
