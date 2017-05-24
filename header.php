<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNDAYS</title>
    <link rel="stylesheet" href=<?php echo '"'.get_stylesheet_directory_uri( ).'/static/bootstrap/dist/css/bootstrap.css"';  ?>>
    <link rel="stylesheet" href="./static/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100" rel="stylesheet">
    <link rel="stylesheet" href=<?php echo '"'.get_stylesheet_directory_uri( ).'/style.css"';  ?>>

<?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo get_page_link(2); ?>">catalog</a></li>
                    <li><a href="">about us</a></li>
                    <li><a href="">stories</a></li>
                    <li><a href="<?php echo get_page_link(1); ?>">blog</a></li>
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
</body>
