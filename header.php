<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header flex bg-yel">
        <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php header_image(); ?>" class="logo-img">
        </a>
        <!-- ナビメニューを表示 -->
        <?php wp_nav_menu(
            array(
                'menu'  => 'pc_menu',
                'menu_class' => 'nav navbar-nav',
            )
        ); ?>
    </header>
