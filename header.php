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
        <h1><a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" class="logo-img"></a></h1>

        <!-- ナビメニューを表示 -->
        <?php wp_nav_menu(
            array(
                'menu'  => 'pc_menu',
                'menu_class' => 'nav navbar-nav',
            )
        ); ?>
        <!-- ハンバーガーメニューを表示 -->
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <div class="menu-content">
                <ul>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/about/">ABOUT</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/news/">NEWS</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/activity/">ACTIVITY</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/member/">MEMBER</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/contact/">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
