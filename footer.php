<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <section>
                    <nav id="quicklinks">
                        <h4>quick links</h4>
                        <li><a href="">about us</a></li>
                        <li><a href="<?php echo get_page_link(1); ?>">blog</a></li>
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
                    <h4>Newsletter</h4>
                    <form method="post">
                        <input type="email" name="mail" placeholder="enter your email">
                        <button type="submit">ok</button>
                    </form>
                    <?php
                        if(isset($_POST['mail'])){
                            $_POST['mail'];
                            $wpdb->insert( 'mails', array(
                                'mail' => $_POST['mail'],
                            ));
                        }
                    ?>
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

<?php wp_footer(); ?>
