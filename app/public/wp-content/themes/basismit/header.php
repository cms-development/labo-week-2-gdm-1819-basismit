<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?> 
    <style>
        body {
            background-color: #f1f8e9;
        }
        .banner {
            padding: 30px;
            margin: 0;
        }
        li {
            list-style-type: none;
        }
    </style>
</head>

<body <?php echo body_class();?>>
    <header>
        <nav>
            <div class="nav-wrapper light-green">
                <a href="/" class="brand-logo"><?php bloginfo('name');?></a>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'right hide-on-med-and-down' ) ); ?>
            </div>
        </nav>
        <div class="banner light-green lighten-3">
            <h1 class="center-align"><?php bloginfo('name');?></h1>
            <h4 class="center-align"><?php bloginfo('description');?></h4>
        </div>
    </header>