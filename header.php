<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<style>
    .menu-item {
        display: inline;
        margin-right: 20px;
    }
    .menu-item {
        position: relative;
    }
    .menu-item::after {
        position: absolute;
        bottom: -4px;
        left: 0;
        content: '';
        width: 100%;
        height: 1px;
        background: #333;
        transform: scale(0, 1);
        transform-origin: left top;
        transition: transform .3s;
    }
    .menu-item:hover::after {
        transform: scale(1, 1);
    }
    .header {
        padding: 30px;
        justify-content: space-between;
    }
</style>
<body <?php body_class(); ?>>
    <header class="header bg-yel flex">
        <a href="<?php echo home_url( '/' ); ?>">TECH-TECH KOCHI</a>
        <!-- ナビメニューを表示 -->
        <?php wp_nav_menu(
            array(
                'menu'  => 'pc_menu',
                'menu_class' => 'nav navbar-nav',
            )
        ); ?>
    </header>
    <?php wp_footer() ?>
</body>
</html>

