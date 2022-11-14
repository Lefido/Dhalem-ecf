<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header>

    <div>
            <img src="<?= get_template_directory_uri()?>/assets/logo.png" alt="image logo">
    </div>

<div>

<?php wp_nav_menu(


        array('menu' => 'main',
            'container' => '',
            'theme_location' => 'main',
            'items-wrap' => '<ul id="" class="menu-li">%3$s</ul>'

));

?>


</div>

</header>