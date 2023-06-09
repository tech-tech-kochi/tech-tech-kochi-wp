<!DOCTYPE html>
<html lang="jp">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TX36GJ3');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TX36GJ3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header flex bg-yel">
        <h1><a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" class="logo-img"></a></h1>

        <!-- ナビメニューを表示 -->
        <?php wp_nav_menu(
            array(
                'menu'  => 'pc_menu',
                'menu_class' => 'nav navbar-nav menu-ul',
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
