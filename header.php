<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<style>
    .header-bg {
        height: 78.39px;
    }
    .header {
        padding: 30px;
        justify-content: space-between;
        background: rgba(255, 255, 255, 0.8);
        position: fixed;/*ヘッダーを固定*/
        z-index: 9999;/*一番前に表示されるように設定*/
        top: 0;/*画面一番上で固定*/
        width: 100%;/*ヘッダーが横幅いっぱいになるように指定*/
    }
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
</style>
<body <?php body_class(); ?>>
    <div class="header-bg bg-wht"></div>
    <header class="header flex">
        <a href="<?php echo home_url( '/' ); ?>">TECH-TECH KOCHI</a>
        <!-- ナビメニューを表示 -->
        <?php wp_nav_menu(
            array(
                'menu'  => 'pc_menu',
                'menu_class' => 'nav navbar-nav',
            )
        ); ?>
    </header>
